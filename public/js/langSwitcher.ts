
(function (): void {
    'use strict';

    interface LangSwitcherElements {
        switcher:  HTMLElement;
        trigger:   HTMLButtonElement;
        dropdown:  HTMLElement;
        options:   NodeListOf<HTMLElement>;
    }

    function buildInstance(
        switcherId: string,
        triggerId:  string,
        dropdownId: string
    ): LangSwitcherElements | null {
        const switcher = document.getElementById(switcherId) as HTMLElement       | null;
        const trigger  = document.getElementById(triggerId)  as HTMLButtonElement | null;
        const dropdown = document.getElementById(dropdownId) as HTMLElement       | null;

        if (!switcher || !trigger || !dropdown) return null;

        return {
            switcher,
            trigger,
            dropdown,
            options: dropdown.querySelectorAll<HTMLElement>('[role="option"]')
        };
    }

    const instances: (LangSwitcherElements | null)[] = [
        buildInstance('lang-switcher',        'lang-trigger',        'lang-dropdown'),
        buildInstance('lang-switcher-footer', 'lang-trigger-footer', 'lang-dropdown-footer')
    ];

    const validInstances = instances.filter((i): i is LangSwitcherElements => i !== null);


    function closeAll(except?: LangSwitcherElements): void {
        validInstances.forEach(function (inst: LangSwitcherElements): void {
            if (inst === except) return;
            inst.dropdown.classList.remove('open');
            inst.trigger.setAttribute('aria-expanded', 'false');
        });
    }

    function openDropdown(inst: LangSwitcherElements): void {
        closeAll(inst);
        inst.dropdown.classList.add('open');
        inst.trigger.setAttribute('aria-expanded', 'true');
    }

    function closeDropdown(inst: LangSwitcherElements): void {
        inst.dropdown.classList.remove('open');
        inst.trigger.setAttribute('aria-expanded', 'false');
    }

    function isOpen(inst: LangSwitcherElements): boolean {
        return inst.dropdown.classList.contains('open');
    }


    function redirectToLang(lang: string): void {
        const segments    = window.location.pathname.replace(/^\//, '').split('/');
        const knownLangs  = ['en', 'fr', 'de', 'es', 'ja'];

        // @ts-ignore
        if (knownLangs.includes(segments[0])) {
            segments[0] = lang;
        } else {
            segments.unshift(lang);
        }

        window.location.pathname = '/' + segments.join('/');
    }


    function markActiveLang(): void {
        const segments    = window.location.pathname.replace(/^\//, '').split('/');
        const currentLang = segments[0] ?? 'en';

        validInstances.forEach(function (inst: LangSwitcherElements): void {
            inst.options.forEach(function (opt: HTMLElement): void {
                opt.setAttribute('aria-selected', String(opt.dataset.lang === currentLang));
            });
        });
    }

    validInstances.forEach(function (inst: LangSwitcherElements): void {

        inst.trigger.addEventListener('click', function (e: MouseEvent): void {
            e.stopPropagation();
            isOpen(inst) ? closeDropdown(inst) : openDropdown(inst);
        });

        inst.options.forEach(function (opt: HTMLElement): void {
            opt.addEventListener('click', function (): void {
                redirectToLang(opt.dataset.lang ?? 'en');
            });
        });

        inst.dropdown.addEventListener('keydown', function (e: KeyboardEvent): void {
            const opts  = Array.from(inst.options);
            const focus = document.activeElement as HTMLElement;
            const idx   = opts.indexOf(focus);

            if (e.key === 'ArrowDown') {
                e.preventDefault();
                (opts[idx + 1] ?? opts[0]).focus();
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                (opts[idx - 1] ?? opts[opts.length - 1]).focus();
            } else if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                focus.click();
            } else if (e.key === 'Escape') {
                closeDropdown(inst);
                inst.trigger.focus();
            }
        });

        inst.trigger.addEventListener('keydown', function (e: KeyboardEvent): void {
            if (e.key === 'Escape') closeDropdown(inst);
        });
    });

    document.addEventListener('click', function (e: MouseEvent): void {
        validInstances.forEach(function (inst: LangSwitcherElements): void {
            if (!inst.switcher.contains(e.target as Node)) {
                closeDropdown(inst);
            }
        });
    });

    markActiveLang();

})();