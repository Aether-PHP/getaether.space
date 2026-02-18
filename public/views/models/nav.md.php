<?php
/** @var string $lang */
?>
<header class="nav" id="nav">
    <div class="nav__inner">
        <a href="/<?= $lang; ?>" class="nav__logo">
            <span class="nav__logo-symbol">☄️</span>
            <span class="nav__logo-text">Æther</span>
            <span class="nav__logo-tag">PHP</span>
        </a>
        <nav class="nav__links" id="nav-links">
            <a href="#philosophy">Philosophy</a>
            <a href="#security">Security</a>
            <a href="#features">Features</a>
            <a href="#start">Get Started</a>
            <a href="/<?= $lang; ?>/modules" class="nav__cta" rel="noopener">Modules</a>
            <a href="/<?= $lang; ?>/docs" class="nav__cta" rel="noopener">Documentation</a>

            <div class="lang-switcher" id="lang-switcher" role="navigation" aria-label="Language selector">
                <button class="lang-switcher__trigger" id="lang-trigger" aria-haspopup="listbox" aria-expanded="false">
                    <span class="lang-switcher__globe" aria-hidden="true">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                    </span>
                    <span class="lang-switcher__current" id="lang-current"><?= strtoupper($lang); ?></span>
                    <span class="lang-switcher__caret" aria-hidden="true">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="6 9 12 15 18 9"/></svg>
                    </span>
                </button>

                <ul class="lang-switcher__dropdown" id="lang-dropdown" role="listbox" aria-label="Select language">
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
        </nav>
        <button class="nav__burger" id="nav-burger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>