(function (): void {
    'use strict';

    const topnav = document.getElementById('topnav') as HTMLElement;
    window.addEventListener('scroll', function (): void {
        topnav.classList.toggle('scrolled', window.scrollY > 4);
    }, { passive: true });

    const sidebar   = document.getElementById('sidebar') as HTMLElement;
    const burger    = document.getElementById('topnav-burger') as HTMLButtonElement;
    let sidebarOpen = false;

    const backdrop = document.createElement('div');
    Object.assign(backdrop.style, {
        position:   'fixed',
        inset:      '0',
        zIndex:     '149',
        background: 'rgba(14,14,20,0.6)',
        display:    'none',
    } as Partial<CSSStyleDeclaration>);
    document.body.appendChild(backdrop);

    function openSidebar(): void {
        sidebarOpen = true;
        sidebar.classList.add('open');
        burger.classList.add('active');
        backdrop.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar(): void {
        sidebarOpen = false;
        sidebar.classList.remove('open');
        burger.classList.remove('active');
        backdrop.style.display = 'none';
        document.body.style.overflow = '';
    }

    burger.addEventListener('click', function (): void {
        sidebarOpen ? closeSidebar() : openSidebar();
    });

    backdrop.addEventListener('click', closeSidebar);

    sidebar.querySelectorAll<HTMLAnchorElement>('.sidenav__link').forEach(function (link: HTMLAnchorElement): void {
        link.addEventListener('click', function (): void {
            if (window.innerWidth <= 900) closeSidebar();
        });
    });

    const sections  = Array.from(document.querySelectorAll<HTMLElement>('.doc-section'));
    const sideLinks = Array.from(document.querySelectorAll<HTMLAnchorElement>('.sidenav__link'));

    function getActiveSection(): HTMLElement {
        const scrollY  = window.scrollY;
        const navH     = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--topnav-h')) || 64;
        const offset   = navH + 48;
        let active     = sections[0];

        for (let i = 0; i < sections.length; i++) {
            const top = sections[i].getBoundingClientRect().top + scrollY;
            if (scrollY >= top - offset) {
                active = sections[i];
            }
        }
        return active;
    }

    function updateScrollSpy(): void {
        const activeSection = getActiveSection();
        const id            = activeSection ? activeSection.id : '';

        sideLinks.forEach(function (link: HTMLAnchorElement): void {
            const isActive = link.getAttribute('data-section') === id;
            link.classList.toggle('active', isActive);
        });

        document.querySelectorAll<HTMLAnchorElement>('.toc-nav a').forEach(function (a: HTMLAnchorElement): void {
            const isActive = a.getAttribute('href') === '#' + id;
            a.classList.toggle('toc-active', isActive);
        });
    }

    window.addEventListener('scroll', updateScrollSpy, { passive: true });
    updateScrollSpy();

    const tocNav = document.getElementById('toc-nav');

    if (tocNav) {
        const headings = document.querySelectorAll<HTMLHeadingElement>('.doc-section__h1, .doc-section h2');

        headings.forEach(function (heading: HTMLHeadingElement): void {
            const section   = heading.closest<HTMLElement>('.doc-section');
            const sectionId = section ? section.id : null;
            const tag       = heading.tagName.toLowerCase();

            let href = '';
            const text = heading.textContent?.trim() ?? '';

            if (tag === 'h1') {
                href = '#' + (sectionId || '');
            } else {
                const slug = text.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
                if (!heading.id) heading.id = (sectionId || '') + '-' + slug;
                href = '#' + heading.id;
            }

            const a       = document.createElement('a');
            a.href        = href;
            a.textContent = text;

            if (tag === 'h2') {
                a.style.paddingLeft = '24px';
                a.style.fontSize    = '0.78rem';
                a.style.opacity     = '0.75';
            }

            tocNav.appendChild(a);
        });
    }

    interface SearchEntry {
        id:      string;
        label:   string;
        title:   string;
        excerpt: string;
        isH2?:  boolean;
    }

    const searchIndex: SearchEntry[] = [];

    sections.forEach(function (section: HTMLElement): void {
        const id    = section.id;
        const label = section.querySelector<HTMLElement>('.doc-section__label')?.textContent ?? '';
        const title = section.querySelector<HTMLElement>('.doc-section__h1')?.textContent ?? '';

        section.querySelectorAll<HTMLElement>('p, .method-item p, .principle p, .security-item p').forEach(function (p: HTMLElement): void {
            const text = p.textContent?.trim() ?? '';
            if (text.length > 20) {
                searchIndex.push({ id, label: label.trim(), title: title.trim(), excerpt: text });
            }
        });

        section.querySelectorAll<HTMLHeadingElement>('h2').forEach(function (h: HTMLHeadingElement): void {
            searchIndex.push({ id, label: label.trim(), title: h.textContent?.trim() ?? '', excerpt: title.trim(), isH2: true });
        });
    });

    const overlay       = document.getElementById('search-overlay') as HTMLElement;
    const searchInput   = document.getElementById('search-input') as HTMLInputElement;
    const searchResults = document.getElementById('search-results') as HTMLElement;
    const searchTrigger = document.getElementById('search-trigger') as HTMLElement;
    const searchClose   = document.getElementById('search-close') as HTMLElement;

    function openSearch(): void {
        overlay.classList.add('open');
        overlay.setAttribute('aria-hidden', 'false');
        setTimeout(function (): void { searchInput.focus(); }, 60);
    }

    function closeSearch(): void {
        overlay.classList.remove('open');
        overlay.setAttribute('aria-hidden', 'true');
        searchInput.value = '';
        renderResults('');
    }

    searchTrigger.addEventListener('click', openSearch);
    searchTrigger.addEventListener('keydown', function (e: KeyboardEvent): void {
        if (e.key === 'Enter' || e.key === ' ') openSearch();
    });
    searchClose.addEventListener('click', closeSearch);

    document.addEventListener('keydown', function (e: KeyboardEvent): void {
        if (e.key === '/' && (document.activeElement as HTMLElement).tagName !== 'INPUT') {
            e.preventDefault();
            openSearch();
        }
        if (e.key === 'Escape') closeSearch();
    });

    overlay.addEventListener('click', function (e: MouseEvent): void {
        if (e.target === overlay) closeSearch();
    });

    function renderResults(query: string): void {
        searchResults.innerHTML = '';

        if (!query.trim()) {
            const hint       = document.createElement('div');
            hint.className   = 'search-box__hint';
            hint.textContent = 'Type to search across all sections';
            searchResults.appendChild(hint);
            return;
        }

        const q = query.toLowerCase();
        const matches = searchIndex.filter(function (item: SearchEntry): boolean {
            return (
                item.title.toLowerCase().includes(q) ||
                item.excerpt.toLowerCase().includes(q) ||
                item.label.toLowerCase().includes(q)
            );
        }).slice(0, 10);

        if (!matches.length) {
            const hint       = document.createElement('div');
            hint.className   = 'search-box__hint';
            hint.textContent = 'No results for "' + query + '"';
            searchResults.appendChild(hint);
            return;
        }

        const seen = new Set<string>();
        matches.forEach(function (item: SearchEntry): void {
            const key = item.id + item.title;
            if (seen.has(key)) return;
            seen.add(key);

            const el     = document.createElement('div');
            el.className = 'search-result';

            const raw   = item.excerpt.substring(0, 120);
            const idx   = raw.toLowerCase().indexOf(q);
            let excerpt = raw;
            if (idx !== -1) {
                excerpt = raw.substring(0, idx)
                    + '<mark style="background:rgba(76,110,245,0.25);color:var(--accent-light);border-radius:2px;padding:0 2px">'
                    + raw.substring(idx, idx + q.length)
                    + '</mark>'
                    + raw.substring(idx + q.length);
            }

            el.innerHTML = '<div class="search-result__section">' + item.label + '</div>'
                + '<div class="search-result__title">' + item.title + '</div>'
                + '<div class="search-result__excerpt">' + excerpt + '…</div>';

            el.addEventListener('click', function (): void {
                closeSearch();
                const target = document.getElementById(item.id);
                if (target) {
                    setTimeout(function (): void { target.scrollIntoView({ behavior: 'smooth' }); }, 80);
                }
            });

            searchResults.appendChild(el);
        });
    }

    searchInput.addEventListener('input', function (): void {
        renderResults(searchInput.value);
    });

    document.querySelectorAll<HTMLElement>('.code-card').forEach(function (card: HTMLElement): void {
        const header = card.querySelector<HTMLElement>('.code-card__header');
        if (!header) return;

        const copyBtn       = document.createElement('button');
        copyBtn.textContent = 'copy';

        Object.assign(copyBtn.style, {
            fontFamily:    'var(--font-mono)',
            fontSize:      '10px',
            letterSpacing: '0.08em',
            textTransform: 'uppercase',
            color:         'var(--text-dim)',
            background:    'none',
            border:        '1px solid var(--border)',
            borderRadius:  'var(--radius)',
            padding:       '2px 8px',
            cursor:        'pointer',
            transition:    'color 0.15s, border-color 0.15s',
        } as Partial<CSSStyleDeclaration>);

        copyBtn.addEventListener('mouseenter', function (): void {
            copyBtn.style.color       = 'var(--accent-light)';
            copyBtn.style.borderColor = 'var(--accent-light)';
        });

        copyBtn.addEventListener('mouseleave', function (): void {
            if (copyBtn.textContent !== 'copied!') {
                copyBtn.style.color       = 'var(--text-dim)';
                copyBtn.style.borderColor = 'var(--border)';
            }
        });

        copyBtn.addEventListener('click', function (): void {
            const code = card.querySelector<HTMLElement>('code');
            if (!code) return;
            const text = code.innerText || code.textContent || '';

            navigator.clipboard.writeText(text).then(function (): void {
                copyBtn.textContent       = 'copied!';
                copyBtn.style.color       = 'var(--code-fn)';
                copyBtn.style.borderColor = 'var(--code-fn)';
                setTimeout(function (): void {
                    copyBtn.textContent       = 'copy';
                    copyBtn.style.color       = 'var(--text-dim)';
                    copyBtn.style.borderColor = 'var(--border)';
                }, 1800);
            }).catch(function (): void {
                const range = document.createRange();
                range.selectNodeContents(code);
                const sel = window.getSelection();
                if (sel) {
                    sel.removeAllRanges();
                    sel.addRange(range);
                    document.execCommand('copy');
                    sel.removeAllRanges();
                }
                copyBtn.textContent = 'copied!';
                setTimeout(function (): void { copyBtn.textContent = 'copy'; }, 1800);
            });
        });

        const dots = header.querySelector<HTMLElement>('.code-card__dots');
        header.insertBefore(copyBtn, dots);
    });

    const revealTargets = document.querySelectorAll<HTMLElement>(
        '.doc-section, .principle, .security-item, .step-item, .method-item'
    );

    revealTargets.forEach(function (el: HTMLElement): void {
        el.style.opacity    = '0';
        el.style.transform  = 'translateY(12px)';
        el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
    });

    const revealObs = new IntersectionObserver(function (entries: IntersectionObserverEntry[]): void {
        entries.forEach(function (entry: IntersectionObserverEntry): void {
            if (entry.isIntersecting) {
                const siblings = Array.from(entry.target.parentElement!.children);
                const idx      = siblings.indexOf(entry.target);
                const delay    = Math.min(idx * 40, 200);
                setTimeout(function (): void {
                    const target = entry.target as HTMLElement;
                    target.style.opacity   = '1';
                    target.style.transform = 'translateY(0)';
                }, delay);
                revealObs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -24px 0px' });

    revealTargets.forEach(function (el: HTMLElement): void { revealObs.observe(el); });

})();