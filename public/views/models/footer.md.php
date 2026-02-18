<?php
/** @var string $lang */
?>
<footer class="footer">
    <div class="footer__inner">
        <div class="footer__brand">
            <span class="footer__logo">&copy;<?= date("Y"); ?> Aether-PHP ☄️</span>
            <span class="footer__tagline">The divine lightweight PHP framework.</span>
        </div>
        <div class="footer__links">
            <a href="https://github.com/Aether-PHP/Aether-PHP" target="_blank" rel="noopener">GitHub</a>
            <a href="https://github.com/Aether-PHP/Aether-PHP/blob/main/README.md" target="_blank" rel="noopener">Readme</a>
            <a href="https://github.com/Aether-PHP/Aether-PHP/blob/main/LICENSE" target="_blank" rel="noopener">License</a>
            <a href="https://github.com/Aether-PHP/Aether-PHP/issues" target="_blank" rel="noopener">Issues</a>
        </div>
        <div class="footer__meta">
            <div class="footer__copy">
                Pure PHP 8.3+ · Zero dependencies · Source available
            </div>
            <div class="lang-switcher lang-switcher--footer" id="lang-switcher-footer" role="navigation" aria-label="Language selector">
                <button class="lang-switcher__trigger" id="lang-trigger-footer" aria-haspopup="listbox" aria-expanded="false">
                    <span class="lang-switcher__globe" aria-hidden="true">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                    </span>
                    <span class="lang-switcher__current" id="lang-current-footer"><?= strtoupper($lang); ?></span>
                    <span class="lang-switcher__caret" aria-hidden="true">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="6 9 12 15 18 9"/></svg>
                    </span>
                </button>
                <ul class="lang-switcher__dropdown lang-switcher__dropdown--up" id="lang-dropdown-footer" role="listbox" aria-label="Select language">
                    <li role="option" aria-selected="true"  data-lang="en" data-label="EN">
                        <span class="lang-switcher__code">🇬🇧</span>
                        <span class="lang-switcher__name">English</span>
                    </li>
                    <li role="option" aria-selected="false" data-lang="fr" data-label="FR">
                        <span class="lang-switcher__code">🇫🇷</span>
                        <span class="lang-switcher__name">Français</span>
                    </li>
                    <li role="option" aria-selected="false" data-lang="es" data-label="ES">
                        <span class="lang-switcher__code">🇪🇸</span>
                        <span class="lang-switcher__name">Español</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>