<?php
/** @var string $lang */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aether PHP :: Documentation</title>
        <meta name="description" content="Full documentation for the Aether PHP framework. Routing, Auth, Middleware, Sessions, Database, CLI and more.">
        <link rel="stylesheet" href="/public/css/docs.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300&family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class="topnav" id="topnav">
            <div class="topnav__inner">
                <a href="/<?= $lang; ?>" class="topnav__logo">
                    <span class="topnav__logo-symbol">☄️</span>
                    <span class="topnav__logo-name">Aether</span>
                    <span class="topnav__logo-tag">PHP</span>
                </a>
                <div class="topnav__center">
                    <div class="topnav__search" id="search-trigger" role="button" tabindex="0" aria-label="Search documentation">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        <span>Search docs...</span>
                        <kbd>/</kbd>
                    </div>
                </div>
                <div class="topnav__right">
                    <a href="/<?= $lang; ?>" class="topnav__link">Home</a>
                    <a href="https://github.com/Aether-PHP/Aether-PHP" class="topnav__link" target="_blank" rel="noopener">GitHub ↗</a>
                    <a class="topnav__version">v1.x</a>
                </div>
                <button class="topnav__burger" id="topnav-burger" aria-label="Toggle sidebar">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </header>

        <div class="search-overlay" id="search-overlay" aria-hidden="true">
            <div class="search-box">
                <div class="search-box__header">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" class="search-box__input" id="search-input" placeholder="Search documentation..." autocomplete="off">
                    <button class="search-box__close" id="search-close" aria-label="Close search"><kbd>esc</kbd></button>
                </div>
                <div class="search-box__results" id="search-results">
                    <div class="search-box__hint">Type to search across all sections</div>
                </div>
            </div>
        </div>

        <div class="docs-layout">

            <aside class="sidebar" id="sidebar">
                <div class="sidebar__inner">

                    <nav class="sidenav">

                        <div class="sidenav__group">
                            <div class="sidenav__group-label">Getting Started</div>
                            <a href="#introduction" class="sidenav__link active" data-section="introduction">Introduction</a>
                            <a href="#installation" class="sidenav__link" data-section="installation">Installation</a>
                            <a href="#quickstart" class="sidenav__link" data-section="quickstart">Quick Start</a>
                            <a href="#configuration" class="sidenav__link" data-section="configuration">Configuration</a>
                        </div>

                        <div class="sidenav__group">
                            <div class="sidenav__group-label">Core</div>
                            <a href="#routing" class="sidenav__link" data-section="routing">Routing</a>
                            <a href="#controllers" class="sidenav__link" data-section="controllers">Controllers</a>
                            <a href="#middleware" class="sidenav__link" data-section="middleware">Middleware</a>
                            <a href="#requests" class="sidenav__link" data-section="requests">Requests</a>
                            <a href="#responses" class="sidenav__link" data-section="responses">Responses</a>
                        </div>

                        <div class="sidenav__group">
                            <div class="sidenav__group-label">Auth & Session</div>
                            <a href="#authentication" class="sidenav__link" data-section="authentication">Authentication</a>
                            <a href="#sessions" class="sidenav__link" data-section="sessions">Sessions</a>
                            <a href="#authorization" class="sidenav__link" data-section="authorization">Authorization</a>
                        </div>

                        <div class="sidenav__group">
                            <div class="sidenav__group-label">Data</div>
                            <a href="#database" class="sidenav__link" data-section="database">Database</a>
                            <a href="#views" class="sidenav__link" data-section="views">Views</a>
                        </div>

                        <div class="sidenav__group">
                            <div class="sidenav__group-label">Advanced</div>
                            <a href="#modules" class="sidenav__link" data-section="modules">Modules</a>
                            <a href="#cli" class="sidenav__link" data-section="cli">CLI Tools</a>
                            <a href="#security" class="sidenav__link" data-section="security">Security Model</a>
                        </div>

                    </nav>

                    <div class="sidebar__footer">
                        <div class="sidebar__footer-item">
                            <span class="sidebar__footer-dot"></span>
                            PHP 8.3+ required
                        </div>
                        <div class="sidebar__footer-item">Zero dependencies</div>
                    </div>

                </div>
            </aside>

            <main class="docs-main" id="docs-main">
                <div class="docs-content">

                    <section class="doc-section" id="introduction">
                        <div class="doc-section__label">Getting Started</div>
                        <h1 class="doc-section__h1">Introduction</h1>
                        <p class="doc-section__lead">
                            Aether is a PHP 8.3+ framework built from scratch with one principle: you should understand everything that runs in your application.
                        </p>

                        <p>No magic containers. No reflection-based dependency injection. No hidden conventions that silently alter your code's behavior. Every layer of Aether is readable, typed, and explicit.</p>
                        <p>It is not designed to compete with Laravel or Symfony. It is designed for developers who want a structured, auditable foundation - lightweight enough to understand fully, solid enough to build real products on.</p>

                        <div class="callout callout--info">
                            <div class="callout__icon" aria-hidden="true">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            </div>
                            <div class="callout__body">
                                <strong>Design philosophy:</strong> Aether exposes complexity safely rather than hiding it. Every decision you make is traceable back to your code - not the framework's internals.
                            </div>
                        </div>

                        <h2>Core principles</h2>
                        <div class="principles-grid">
                            <div class="principle">
                                <div class="principle__num">01</div>
                                <h3>Explicit over implicit</h3>
                                <p>Routes, middleware, auth - all must be declared. Nothing is registered automatically or inferred from naming conventions.</p>
                            </div>
                            <div class="principle">
                                <div class="principle__num">02</div>
                                <h3>Minimal footprint</h3>
                                <p>Under 1MB of source. No vendor directory at runtime. Every class in the framework is there for a reason.</p>
                            </div>
                            <div class="principle">
                                <div class="principle__num">03</div>
                                <h3>Security by structure</h3>
                                <p>HMAC-signed sessions, strict deserialization, opt-in middleware. Security is enforced at the architecture level, not patched later.</p>
                            </div>
                            <div class="principle">
                                <div class="principle__num">04</div>
                                <h3>OOP-first</h3>
                                <p>Interfaces, typed properties, enums, readonly classes. Aether is built for PHP 8.3+, not retrofitted to support older versions.</p>
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="installation">
                        <div class="doc-section__label">Getting Started</div>
                        <h1 class="doc-section__h1">Installation</h1>
                        <p class="doc-section__lead">Clone the repository and point your server to the project root. No build step. No package manager.</p>

                        <h2>Requirements</h2>
                        <div class="requirements-table">
                            <div class="req-row req-row--header">
                                <span>Requirement</span><span>Version</span><span>Notes</span>
                            </div>
                            <div class="req-row">
                                <span>PHP</span><span>8.3+</span><span>Enums, typed properties required</span>
                            </div>
                            <div class="req-row">
                                <span>PDO extension</span><span>Any</span><span>For database features</span>
                            </div>
                            <div class="req-row">
                                <span>URL rewriting</span><span>-</span><span>Apache mod_rewrite or Nginx</span>
                            </div>
                        </div>

                        <h2>Clone &amp; setup</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">Terminal</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code>git clone https://github.com/Aether-PHP/Aether-PHP
        cd Aether-PHP
        cp .env.example .env</code></pre>
                        </div>

                        <h2>Apache configuration</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">.htaccess</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">RewriteEngine</span> On
        <span class="kw">RewriteCond</span> %{REQUEST_FILENAME} !-f
        <span class="kw">RewriteCond</span> %{REQUEST_FILENAME} !-d
        <span class="kw">RewriteRule</span> ^ index.php [QSA,L]</code></pre>
                        </div>

                        <h2>Nginx configuration</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">nginx.conf</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code>location / {
            try_files $uri $uri/ /index.php?$query_string;
        }</code></pre>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="quickstart">
                        <div class="doc-section__label">Getting Started</div>
                        <h1 class="doc-section__h1">Quick Start</h1>
                        <p class="doc-section__lead">A working application in four steps.</p>

                        <div class="steps-list">
                            <div class="step-item">
                                <div class="step-item__num">01</div>
                                <div class="step-item__body">
                                    <h3>Create a controller</h3>
                                    <div class="code-card">
                                        <div class="code-card__header">
                                            <span class="code-card__title">Terminal</span>
                                            <div class="code-card__dots"><span></span><span></span><span></span></div>
                                        </div>
                                        <pre class="code-block"><code>php bin/aether make:controller HomeController</code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-item__num">02</div>
                                <div class="step-item__body">
                                    <h3>Define a route via annotation</h3>
                                    <div class="code-card">
                                        <div class="code-card__header">
                                            <span class="code-card__title">app/App/Controllers/HomeController.php</span>
                                            <div class="code-card__dots"><span></span><span></span><span></span></div>
                                        </div>
                                        <pre class="code-block"><code><span class="kw">class</span> <span class="fn">HomeController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {

            <span class="cmt">/**
             * [@method] => GET
             * [@route]  => /
             */</span>
            <span class="kw">public function</span> <span class="fn">index</span>() {
                <span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">'home'</span>, [
                    <span class="str">'title'</span> => <span class="str">'Welcome to Aether'</span>
                ]);
            }
        }</code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-item__num">03</div>
                                <div class="step-item__body">
                                    <h3>Create the view</h3>
                                    <div class="code-card">
                                        <div class="code-card__header">
                                            <span class="code-card__title">app/App/Views/home.php</span>
                                            <div class="code-card__dots"><span></span><span></span><span></span></div>
                                        </div>
                                        <pre class="code-block"><code>
        <span class="kw">&lt;h1&gt;</span>&lt;?= <span class="kw">$title</span> ?&gt;<span class="kw">&lt;/h1&gt;</span>
        <span class="kw">&lt;p&gt;</span>Aether is running.<span class="kw">&lt;/p&gt;</span>
        </code></pre>

                                    </div>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-item__num">04</div>
                                <div class="step-item__body">
                                    <h3>Point your browser to <code>/</code></h3>
                                    <p>Your route is live. No registration needed - <code>ControllerGateway</code> scans and loads annotations automatically at boot.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="configuration">
                        <div class="doc-section__label">Getting Started</div>
                        <h1 class="doc-section__h1">Configuration</h1>
                        <p class="doc-section__lead">All configuration lives in <code>.env</code>. No PHP config arrays. No XML. No YAML.</p>

                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">.env</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="cmt"># Application</span>
        APP_ENV=production
        APP_KEY=your-secret-key-here

        <span class="cmt"># Database</span>
        DB_DRIVER=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_NAME=aether_db
        DB_USER=root
        DB_PASS=

        <span class="cmt"># Session</span>
        SESSION_LIFETIME=86400</code></pre>
                        </div>

                        <div class="callout callout--warn">
                            <div class="callout__icon" aria-hidden="true">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            </div>
                            <div class="callout__body">
                                Never commit your <code>.env</code> file. It is already included in <code>.gitignore</code> by default.
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="routing">
                        <div class="doc-section__label">Core</div>
                        <h1 class="doc-section__h1">Routing</h1>
                        <p class="doc-section__lead">Routes are defined via docblock annotations directly on controller methods. No route files, no arrays, no registration calls.</p>

                        <h2>How it works</h2>
                        <p><code>ControllerGateway</code> reflects over all controllers in <code>app/App/Controllers/</code>, extracts <code>[@route]</code> and <code>[@method]</code> annotations, and registers them at boot time.</p>

                        <h2>Basic route</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">Controller annotation</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="cmt">/**
         * [@method] => GET
         * [@route]  => /hello
         */</span>
        <span class="kw">public function</span> <span class="fn">hello</span>() {
            <span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">'hello'</span>);
        }</code></pre>
                        </div>

                        <h2>Supported HTTP methods</h2>
                        <div class="inline-tags">
                            <span class="method-tag method-tag--get">GET</span>
                            <span class="method-tag method-tag--post">POST</span>
                            <span class="method-tag method-tag--put">PUT</span>
                            <span class="method-tag method-tag--delete">DELETE</span>
                            <span class="method-tag method-tag--patch">PATCH</span>
                        </div>

                        <h2>REST API route</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">JSON endpoint</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="cmt">/**
         * [@method] => GET
         * [@route]  => /api/users
         */</span>
        <span class="kw">public function</span> <span class="fn">users_fetch</span>() {
            <span class="kw">$response</span> = <span class="fn">ResponseFactory</span>::<span class="fn">_create</span>(
                <span class="fn">HttpResponseFormatEnum</span>::JSON,
                [<span class="str">'users'</span> => <span class="kw">$this</span>-><span class="fn">getUsers</span>()],
                <span class="num">200</span>
            );
            <span class="kw">$response</span>-><span class="fn">_send</span>();
        }</code></pre>
                        </div>

                        <div class="callout callout--info">
                            <div class="callout__icon" aria-hidden="true">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            </div>
                            <div class="callout__body">
                                Route scanning happens once at boot inside <code>Aether::_init()</code>. There is no caching mechanism - the overhead is minimal given the small controller surface area that Aether is designed for.
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="controllers">
                        <div class="doc-section__label">Core</div>
                        <h1 class="doc-section__h1">Controllers</h1>
                        <p class="doc-section__lead">All controllers extend <code>Controller</code> and live in <code>app/App/Controllers/</code>.</p>

                        <h2>Rendering a view</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">Using _render()</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">public function</span> <span class="fn">dashboard</span>() {
            <span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">'dashboard'</span>, [
                <span class="str">'user'</span>  => <span class="fn">SessionInstance</span>::<span class="fn">_getUser</span>(),
                <span class="str">'title'</span> => <span class="str">'Dashboard'</span>
            ]);
        }</code></pre>
                        </div>

                        <h2>Available base methods</h2>
                        <div class="method-list">
                            <div class="method-item">
                                <code class="method-item__sig">_render(string $view, array $data = [])</code>
                                <p>Renders a PHP view template from <code>app/App/Views/</code> with the given data.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">_redirect(string $url)</code>
                                <p>Issues a 302 redirect and terminates execution.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">_abort(int $code)</code>
                                <p>Sends an HTTP error response and terminates.</p>
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="middleware">
                        <div class="doc-section__label">Core</div>
                        <h1 class="doc-section__h1">Middleware</h1>
                        <p class="doc-section__lead">Middleware is opt-in, composable, and runs sequentially through a single pipeline before the router dispatches.</p>

                        <h2>Built-in middleware</h2>
                        <div class="method-list">
                            <div class="method-item">
                                <code class="method-item__sig">CsrfMiddleware</code>
                                <p>Validates CSRF tokens on <code>POST</code>, <code>PUT</code>, and <code>DELETE</code> requests. Tokens are generated automatically and injected into forms.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">RateLimitMiddleware</code>
                                <p>Limits requests per IP per time window. Configurable via <code>.env</code>.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">AuthMiddleware</code>
                                <p>Checks session validity and redirects unauthenticated users.</p>
                            </div>
                        </div>

                        <h2>Registering middleware</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">index.php - middleware pipeline</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="fn">Aether</span>::<span class="fn">_init</span>([
            <span class="fn">CsrfMiddleware</span>::class,
            <span class="fn">RateLimitMiddleware</span>::class,
            <span class="fn">AuthMiddleware</span>::class,
        ]);</code></pre>
                        </div>

                        <h2>Writing custom middleware</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">Custom middleware</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">class</span> <span class="fn">LogMiddleware</span> <span class="kw">implements</span> <span class="fn">AetherMiddleware</span> {

            <span class="kw">public function</span> <span class="fn">handle</span>(<span class="fn">Request</span> <span class="kw">$request</span>, <span class="kw">callable</span> <span class="kw">$next</span>): void {
                <span class="cmt">// Before dispatch</span>
                <span class="fn">error_log</span>(<span class="str">'→ '</span> . <span class="kw">$request</span>-><span class="fn">getPath</span>());

                <span class="kw">$next</span>(<span class="kw">$request</span>);

                <span class="cmt">// After dispatch</span>
            }
        }</code></pre>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="requests">
                        <div class="doc-section__label">Core</div>
                        <h1 class="doc-section__h1">Requests</h1>
                        <p class="doc-section__lead">Incoming HTTP data is handled via <code>HttpParameterUnpacker</code>. Outgoing HTTP calls use <code>RequestFactory</code>.</p>

                        <h2>Reading input</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">POST / GET input</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">$unpacker</span> = <span class="kw">new</span> <span class="fn">HttpParameterUnpacker</span>();

        <span class="cmt">// From POST body or query string</span>
        <span class="kw">$email</span>    = <span class="kw">$unpacker</span>-><span class="fn">_getAttribute</span>(<span class="str">'email'</span>);
        <span class="kw">$password</span> = <span class="kw">$unpacker</span>-><span class="fn">_getAttribute</span>(<span class="str">'password'</span>);</code></pre>
                        </div>

                        <h2>Making outbound HTTP requests</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">External API call</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">$request</span> = <span class="fn">RequestFactory</span>::<span class="fn">_create</span>(
            <span class="fn">HttpMethodEnum</span>::GET,
            <span class="str">'https://api.example.com/data'</span>
        );

        <span class="kw">$response</span> = <span class="kw">$request</span>-><span class="fn">_send</span>();
        <span class="fn">var_dump</span>(<span class="kw">$response</span>);</code></pre>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="responses">
                        <div class="doc-section__label">Core</div>
                        <h1 class="doc-section__h1">Responses</h1>
                        <p class="doc-section__lead"><code>ResponseFactory</code> creates typed HTTP responses. Supported formats: JSON, XML, TEXT.</p>

                        <h2>JSON response</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">ResponseFactory</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">$response</span> = <span class="fn">ResponseFactory</span>::<span class="fn">_create</span>(
            <span class="fn">HttpResponseFormatEnum</span>::JSON,
            [<span class="str">'status'</span> => <span class="str">'ok'</span>, <span class="str">'data'</span> => <span class="kw">$payload</span>],
            <span class="num">200</span>
        );

        <span class="kw">$response</span>-><span class="fn">_send</span>(); <span class="cmt">// sends headers + body, terminates</span></code></pre>
                        </div>

                        <h2>Response formats</h2>
                        <div class="method-list">
                            <div class="method-item">
                                <code class="method-item__sig">HttpResponseFormatEnum::JSON</code>
                                <p>Sets <code>Content-Type: application/json</code> and encodes the data array.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">HttpResponseFormatEnum::XML</code>
                                <p>Sets <code>Content-Type: application/xml</code> and converts the array to XML.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">HttpResponseFormatEnum::TEXT</code>
                                <p>Sets <code>Content-Type: text/plain</code>.</p>
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="authentication">
                        <div class="doc-section__label">Auth &amp; Session</div>
                        <h1 class="doc-section__h1">Authentication</h1>
                        <p class="doc-section__lead">Auth is built around the gateway pattern. Three gateways handle login, registration, and logout - each wrapping the full logic for that operation.</p>

                        <h2>Login</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">LoginAuthGateway</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">$gateway</span> = <span class="kw">new</span> <span class="fn">LoginAuthGateway</span>(<span class="kw">$username</span>, <span class="kw">$password</span>);

        <span class="kw">if</span> (<span class="kw">$gateway</span>-><span class="fn">_tryAuth</span>()) {
            <span class="cmt">// Session is set - user is authenticated</span>
            <span class="kw">$this</span>-><span class="fn">_redirect</span>(<span class="str">'/dashboard'</span>);
        } <span class="kw">else</span> {
            <span class="kw">$error</span> = <span class="kw">$gateway</span>-><span class="fn">_getStatus</span>();
            <span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">'login'</span>, [<span class="str">'error'</span> => <span class="kw">$error</span>]);
        }</code></pre>
                        </div>

                        <h2>Registration</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">RegisterAuthGateway</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">$gateway</span> = <span class="kw">new</span> <span class="fn">RegisterAuthGateway</span>(
            <span class="kw">$username</span>, <span class="kw">$email</span>, <span class="kw">$password</span>
        );

        <span class="kw">if</span> (<span class="kw">$gateway</span>-><span class="fn">_register</span>()) {
            <span class="kw">$this</span>-><span class="fn">_redirect</span>(<span class="str">'/login'</span>);
        }</code></pre>
                        </div>

                        <div class="callout callout--info">
                            <div class="callout__icon" aria-hidden="true">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            </div>
                            <div class="callout__body">
                                Passwords are hashed with <strong>Argon2ID</strong> automatically. Do not hash before passing to the gateway.
                            </div>
                        </div>

                        <h2>Logout</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">LogoutAuthGateway</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="fn">LogoutAuthGateway</span>::<span class="fn">_logout</span>();
        <span class="kw">$this</span>-><span class="fn">_redirect</span>(<span class="str">'/'</span>);</code></pre>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="sessions">
                        <div class="doc-section__label">Auth &amp; Session</div>
                        <h1 class="doc-section__h1">Sessions</h1>
                        <p class="doc-section__lead"><code>SessionInstance</code> centralizes all <code>$_SESSION</code> access. Session payloads are signed with HMAC to detect tampering.</p>

                        <h2>Reading session data</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">SessionInstance</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="cmt">// Get the current user object</span>
        <span class="kw">$user</span> = <span class="fn">SessionInstance</span>::<span class="fn">_getUser</span>();

        <span class="cmt">// Get an arbitrary session value</span>
        <span class="kw">$value</span> = <span class="fn">SessionInstance</span>::<span class="fn">_get</span>(<span class="str">'cart_id'</span>);

        <span class="cmt">// Set a value</span>
        <span class="fn">SessionInstance</span>::<span class="fn">_set</span>(<span class="str">'cart_id'</span>, <span class="kw">$cartId</span>);</code></pre>
                        </div>

                        <div class="callout callout--warn">
                            <div class="callout__icon" aria-hidden="true">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            </div>
                            <div class="callout__body">
                                Never write directly to <code>$_SESSION</code>. Always use <code>SessionInstance</code> - direct writes bypass the HMAC signing mechanism.
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="authorization">
                        <div class="doc-section__label">Auth &amp; Session</div>
                        <h1 class="doc-section__h1">Authorization</h1>
                        <p class="doc-section__lead">Aether does not provide an automatic authorization system. Authorization is the developer's explicit responsibility.</p>

                        <h2>Checking login state</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">UserInstance checks</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">if</span> (!<span class="fn">UserInstance</span>::<span class="fn">_isLoggedIn</span>()) {
            <span class="kw">$this</span>-><span class="fn">_redirect</span>(<span class="str">'/login'</span>);
        }

        <span class="kw">$user</span> = <span class="fn">SessionInstance</span>::<span class="fn">_getUser</span>();

        <span class="kw">if</span> (<span class="kw">$user</span>-><span class="fn">_isAdmin</span>()) {
            <span class="cmt">// Admin-only logic</span>
        }

        <span class="kw">if</span> (<span class="kw">$user</span>-><span class="fn">_hasPerm</span>(<span class="str">'edit_posts'</span>)) {
            <span class="cmt">// Permission-gated logic</span>
        }</code></pre>
                        </div>

                        <h2>Available UserInstance methods</h2>
                        <div class="method-list">
                            <div class="method-item">
                                <code class="method-item__sig">UserInstance::_isLoggedIn(): bool</code>
                                <p>Returns <code>true</code> if there is a valid authenticated session.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">$user->_isAdmin(): bool</code>
                                <p>Returns <code>true</code> if the user has the admin flag set.</p>
                            </div>
                            <div class="method-item">
                                <code class="method-item__sig">$user->_hasPerm(string $perm): bool</code>
                                <p>Checks against the user's JSON-encoded permission array.</p>
                            </div>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="database">
                        <div class="doc-section__label">Data</div>
                        <h1 class="doc-section__h1">Database</h1>
                        <p class="doc-section__lead"><code>DatabaseWrapper</code> provides a thin, type-safe abstraction over PDO. Prepared statements are used everywhere - SQL injection is structurally not possible through the standard API.</p>

                        <h2>Connecting</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">DatabaseWrapper</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">$db</span> = <span class="kw">new</span> <span class="fn">DatabaseWrapper</span>(
            <span class="str">'my_database'</span>,
            <span class="fn">DatabaseDriverEnum</span>::MYSQL
        );</code></pre>
                        </div>

                        <h2>CRUD operations</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">Select / Insert / Update / Delete</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="cmt">// Select with conditions</span>
        <span class="kw">$users</span> = <span class="kw">$db</span>-><span class="fn">_select</span>(<span class="str">'users'</span>, <span class="str">'*'</span>, [<span class="str">'active'</span> => <span class="num">1</span>]);

        <span class="cmt">// Insert a row</span>
        <span class="kw">$db</span>-><span class="fn">_insert</span>(<span class="str">'users'</span>, [
            <span class="str">'username'</span> => <span class="str">'alice'</span>,
            <span class="str">'email'</span>    => <span class="str">'alice@example.com'</span>,
            <span class="str">'password'</span> => <span class="fn">password_hash</span>(<span class="kw">$pass</span>, PASSWORD_ARGON2ID)
        ]);

        <span class="cmt">// Update</span>
        <span class="kw">$db</span>-><span class="fn">_update</span>(<span class="str">'users'</span>,
            [<span class="str">'active'</span> => <span class="num">0</span>],
            [<span class="str">'id'</span>     => <span class="kw">$userId</span>]
        );

        <span class="cmt">// Delete</span>
        <span class="kw">$db</span>-><span class="fn">_delete</span>(<span class="str">'users'</span>, [<span class="str">'id'</span> => <span class="kw">$userId</span>]);</code></pre>
                        </div>

                        <h2>Supported drivers</h2>
                        <div class="inline-tags">
                            <span class="method-tag method-tag--get">MySQL</span>
                            <span class="method-tag method-tag--post">SQLite</span>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="views">
                        <div class="doc-section__label">Data</div>
                        <h1 class="doc-section__h1">Views</h1>
                        <p class="doc-section__lead">Views are plain PHP templates. No templating engine. No compilation step. No <code>{{ }}</code> syntax to learn.</p>

                        <h2>Rendering from a controller</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">_render()</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">'dashboard'</span>, [
            <span class="str">'title'</span> => <span class="str">'Dashboard'</span>,
            <span class="str">'items'</span> => <span class="kw">$items</span>
        ]);</code></pre>
                        </div>

                        <h2>Rendering standalone</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">ViewInstance</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="fn">ViewInstance</span>::<span class="fn">_make</span>(<span class="str">'dashboard'</span>, [
            <span class="str">'title'</span> => <span class="str">'Dashboard'</span>
        ]);</code></pre>
                        </div>

                        <h2>Template file</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">app/App/Views/dashboard.php</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">&lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;</span>
            <span class="kw">&lt;title&gt;</span>&lt;?= <span class="fn">htmlspecialchars</span>(<span class="kw">$title</span>) ?><span class="kw">&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;</span>
            <span class="kw">&lt;h1&gt;</span>&lt;?= <span class="fn">htmlspecialchars</span>(<span class="kw">$title</span>) ?><span class="kw">&lt;/h1&gt;
        &lt;/body&gt;
        &lt;/html&gt;</span></code></pre>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="modules">
                        <div class="doc-section__label">Advanced</div>
                        <h1 class="doc-section__h1">Modules</h1>
                        <p class="doc-section__lead">Modules are optional extensions loaded at boot. Each module implements <code>AetherModule</code> and receives a <code>_onLoad()</code> hook.</p>

                        <h2>Loading modules</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">ModuleFactory</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="fn">ModuleFactory</span>::<span class="fn">_load</span>([
            <span class="fn">MyAnalyticsModule</span>::class,
            <span class="fn">CustomApiModule</span>::class,
        ]);</code></pre>
                        </div>

                        <h2>Writing a module</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">Custom module</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="kw">class</span> <span class="fn">MyAnalyticsModule</span> <span class="kw">implements</span> <span class="fn">AetherModule</span> {

            <span class="kw">public function</span> <span class="fn">_onLoad</span>(): void {
                <span class="cmt">// Runs once at framework boot</span>
                <span class="fn">Analytics</span>::<span class="fn">track</span>(<span class="fn">$_SERVER</span>[<span class="str">'REQUEST_URI'</span>]);
            }
        }</code></pre>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="cli">
                        <div class="doc-section__label">Advanced</div>
                        <h1 class="doc-section__h1">CLI Tools</h1>
                        <p class="doc-section__lead">Aether ships with a minimal CLI via <code>php bin/aether</code>. No Node.js, no npm, no build tooling.</p>

                        <h2>Available commands</h2>
                        <div class="cli-table">
                            <div class="cli-row cli-row--header">
                                <span>Command</span><span>Description</span>
                            </div>
                            <div class="cli-row">
                                <code>make:controller &lt;Name&gt;</code>
                                <span>Generates a new controller class in <code>app/App/Controllers/</code></span>
                            </div>
                            <div class="cli-row">
                                <code>setup</code>
                                <span>Runs the initial setup wizard - DB, .env, directory scaffold</span>
                            </div>
                            <div class="cli-row">
                                <code>source:script &lt;path&gt;</code>
                                <span>Executes a PHP script in the Aether bootstrap context</span>
                            </div>
                        </div>

                        <h2>Examples</h2>
                        <div class="code-card">
                            <div class="code-card__header">
                                <span class="code-card__title">Terminal</span>
                                <div class="code-card__dots"><span></span><span></span><span></span></div>
                            </div>
                            <pre class="code-block"><code><span class="cmt"># Generate a controller</span>
        php bin/aether make:controller ProductController

        <span class="cmt"># Run initial setup</span>
        php bin/aether setup

        <span class="cmt"># Run a migration script</span>
        php bin/aether source:script scripts/migrate.php</code></pre>
                        </div>
                    </section>

                    <div class="doc-divider"></div>

                    <section class="doc-section" id="security">
                        <div class="doc-section__label">Advanced</div>
                        <h1 class="doc-section__h1">Security Model</h1>
                        <p class="doc-section__lead">Security in Aether is structural. Every protection mechanism is explicit, composable, and enforced at the architecture level - not added as an afterthought.</p>

                        <div class="security-grid">
                            <div class="security-item">
                                <div class="security-item__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </div>
                                <h3>HMAC-signed sessions</h3>
                                <p>All session payloads carry an HMAC signature. Any tampered session is rejected before reaching application code. Never bypass <code>SessionInstance</code>.</p>
                            </div>
                            <div class="security-item">
                                <div class="security-item__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                </div>
                                <h3>Strict deserialization</h3>
                                <p>Only explicitly whitelisted classes can be reconstructed from session data. PHP object injection is structurally prevented.</p>
                            </div>
                            <div class="security-item">
                                <div class="security-item__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/></svg>
                                </div>
                                <h3>CSRF protection</h3>
                                <p><code>CsrfMiddleware</code> validates tokens on all mutating requests. Token generation and validation is automatic when the middleware is registered.</p>
                            </div>
                            <div class="security-item">
                                <div class="security-item__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                </div>
                                <h3>Prepared statements</h3>
                                <p>The <code>DatabaseWrapper</code> API uses PDO prepared statements exclusively. SQL injection through the standard data layer is not possible.</p>
                            </div>
                            <div class="security-item">
                                <div class="security-item__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                                </div>
                                <h3>Argon2ID passwords</h3>
                                <p>Registration and password changes use <code>password_hash($pass, PASSWORD_ARGON2ID)</code>. Do not pre-hash passwords before passing to auth gateways.</p>
                            </div>
                            <div class="security-item">
                                <div class="security-item__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/></svg>
                                </div>
                                <h3>Explicit authorization</h3>
                                <p>There is no automatic role system. Every permission check is a line of code you write. Authorization cannot be silently bypassed by a framework assumption.</p>
                            </div>
                        </div>
                    </section>

                    <div class="doc-bottomnav">
                        <a href="#introduction" class="doc-bottomnav__btn">← Introduction</a>
                        <a href="/" class="doc-bottomnav__btn doc-bottomnav__btn--home">☄️ Back to home</a>
                    </div>

                </div>
            </main>

            <aside class="toc-panel" id="toc-panel">
                <div class="toc-panel__inner">
                    <div class="toc-panel__label">On this page</div>
                    <nav class="toc-nav" id="toc-nav"></nav>
                </div>
            </aside>
        </div>

        <script src="/public/js/docs.js"></script>
    </body>
</html>