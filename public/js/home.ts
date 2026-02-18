(function (): void {
    'use strict';

    const nav = document.getElementById('nav') as HTMLElement;

    function updateNav(): void {
        if (window.scrollY > 20) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', updateNav, { passive: true });
    updateNav();

    const burger   = document.getElementById('nav-burger') as HTMLButtonElement;
    const navLinks = document.getElementById('nav-links') as HTMLElement;

    burger.addEventListener('click', function (): void {
        const open = navLinks.classList.toggle('open');
        burger.classList.toggle('active', open);
        burger.setAttribute('aria-expanded', String(open));
        document.body.style.overflow = open ? 'hidden' : '';
    });

    navLinks.querySelectorAll<HTMLAnchorElement>('a').forEach(function (link: HTMLAnchorElement): void {
        link.addEventListener('click', function (): void {
            navLinks.classList.remove('open');
            burger.classList.remove('active');
            burger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    });

    document.addEventListener('click', function (e: MouseEvent): void {
        if (
            navLinks.classList.contains('open') &&
            !nav.contains(e.target as Node)
        ) {
            navLinks.classList.remove('open');
            burger.classList.remove('active');
            burger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });

    const revealEls = document.querySelectorAll<HTMLElement>(
        '.pillar, .sec-card, .feature-item, .code-card, .step, .why__quote, .why__body, .why__tags'
    );

    revealEls.forEach(function (el: HTMLElement): void {
        el.style.opacity    = '0';
        el.style.transform  = 'translateY(16px)';
        el.style.transition = 'opacity 0.45s ease, transform 0.45s ease';
    });

    const revealObserver = new IntersectionObserver(
        function (entries: IntersectionObserverEntry[]): void {
            entries.forEach(function (entry: IntersectionObserverEntry): void {
                if (entry.isIntersecting) {
                    const siblings = Array.from(entry.target.parentElement!.children);
                    const index    = siblings.indexOf(entry.target);
                    const delay    = Math.min(index * 60, 300);

                    setTimeout(function (): void {
                        const target = entry.target as HTMLElement;
                        target.style.opacity   = '1';
                        target.style.transform = 'translateY(0)';
                    }, delay);

                    revealObserver.unobserve(entry.target);
                }
            });
        },
        {
            threshold:  0.1,
            rootMargin: '0px 0px -40px 0px'
        }
    );

    revealEls.forEach(function (el: HTMLElement): void {
        revealObserver.observe(el);
    });

    const titles = document.querySelectorAll<HTMLElement>('.section__title');

    titles.forEach(function (el: HTMLElement): void {
        el.style.opacity    = '0';
        el.style.transform  = 'translateX(-12px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    const titleObserver = new IntersectionObserver(
        function (entries: IntersectionObserverEntry[]): void {
            entries.forEach(function (entry: IntersectionObserverEntry): void {
                if (entry.isIntersecting) {
                    const target = entry.target as HTMLElement;
                    target.style.opacity   = '1';
                    target.style.transform = 'translateX(0)';
                    titleObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.2 }
    );

    titles.forEach(function (el: HTMLElement): void { titleObserver.observe(el); });

    document.querySelectorAll<HTMLElement>('.code-card').forEach(function (card: HTMLElement): void {
        const header = card.querySelector<HTMLElement>('.code-card__header');
        if (!header) return;

        const copyBtn = document.createElement('button');
        copyBtn.className   = 'copy-btn';
        copyBtn.textContent = 'copy';
        copyBtn.title       = 'Copy code to clipboard';
        copyBtn.setAttribute('aria-label', 'Copy code');

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
            marginLeft:    '8px'
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

    const sections   = document.querySelectorAll<HTMLElement>('section[id]');
    const navAnchors = document.querySelectorAll<HTMLAnchorElement>('.nav__links a[href^="#"]');

    const sectionObserver = new IntersectionObserver(
        function (entries: IntersectionObserverEntry[]): void {
            entries.forEach(function (entry: IntersectionObserverEntry): void {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navAnchors.forEach(function (a: HTMLAnchorElement): void {
                        const active = a.getAttribute('href') === '#' + id;
                        a.style.color = active ? 'var(--text)' : '';
                    });
                }
            });
        },
        {
            threshold:  0.3,
            rootMargin: '-64px 0px 0px 0px'
        }
    );

    sections.forEach(function (s: HTMLElement): void { sectionObserver.observe(s); });

    const watermark = document.querySelector<HTMLElement>('.hero__watermark');

    if (watermark) {
        window.addEventListener('scroll', function (): void {
            const scrolled = window.scrollY;
            if (scrolled < window.innerHeight) {
                const opacity = 1 - (scrolled / (window.innerHeight * 0.6));
                watermark.style.opacity = String(Math.max(0, opacity));
            }
        }, { passive: true });
    }

})();