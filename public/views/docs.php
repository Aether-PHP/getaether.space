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
        <a href="/" class="topnav__logo">
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
            <a href="/" class="topnav__link">Home</a>
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
                    <a href="#requirements" class="sidenav__link" data-section="requirements">Requirements</a>
                    <a href="#installation" class="sidenav__link" data-section="installation">Installation</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Configuration</div>
                    <a href="#environment" class="sidenav__link" data-section="environment">Environment Variables</a>
                    <a href="#accessing-config" class="sidenav__link" data-section="accessing-config">Accessing Configuration</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Routing</div>
                    <a href="#routing-basics" class="sidenav__link" data-section="routing-basics">Understanding Routes</a>
                    <a href="#first-route" class="sidenav__link" data-section="first-route">Creating Your First Route</a>
                    <a href="#route-parameters" class="sidenav__link" data-section="route-parameters">Route Parameters</a>
                    <a href="#base-paths" class="sidenav__link" data-section="base-paths">Base Paths</a>
                    <a href="#advanced-routing" class="sidenav__link" data-section="advanced-routing">Advanced Routing</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Controllers & Responses</div>
                    <a href="#controller-structure" class="sidenav__link" data-section="controller-structure">Controller Structure</a>
                    <a href="#json-responses" class="sidenav__link" data-section="json-responses">JSON Responses</a>
                    <a href="#response-formats" class="sidenav__link" data-section="response-formats">Other Response Formats</a>
                    <a href="#rendering-views" class="sidenav__link" data-section="rendering-views">Rendering Views</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Database</div>
                    <a href="#db-connecting" class="sidenav__link" data-section="db-connecting">Connecting</a>
                    <a href="#db-select" class="sidenav__link" data-section="db-select">SELECT Queries</a>
                    <a href="#db-where" class="sidenav__link" data-section="db-where">WHERE Clauses</a>
                    <a href="#db-insert" class="sidenav__link" data-section="db-insert">INSERT Queries</a>
                    <a href="#db-update" class="sidenav__link" data-section="db-update">UPDATE Queries</a>
                    <a href="#db-delete" class="sidenav__link" data-section="db-delete">DELETE Queries</a>
                    <a href="#db-exist" class="sidenav__link" data-section="db-exist">Checking Existence</a>
                    <a href="#db-join" class="sidenav__link" data-section="db-join">JOIN Queries</a>
                    <a href="#db-raw" class="sidenav__link" data-section="db-raw">Raw SQL Queries</a>
                    <a href="#db-advanced" class="sidenav__link" data-section="db-advanced">Advanced Database</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Authentication</div>
                    <a href="#auth-registration" class="sidenav__link" data-section="auth-registration">User Registration</a>
                    <a href="#auth-login" class="sidenav__link" data-section="auth-login">User Login</a>
                    <a href="#auth-status" class="sidenav__link" data-section="auth-status">Checking Auth Status</a>
                    <a href="#auth-user" class="sidenav__link" data-section="auth-user">Getting Current User</a>
                    <a href="#auth-permissions" class="sidenav__link" data-section="auth-permissions">User Permissions</a>
                    <a href="#auth-logout" class="sidenav__link" data-section="auth-logout">User Logout</a>
                    <a href="#auth-advanced" class="sidenav__link" data-section="auth-advanced">Advanced Authentication</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Sessions</div>
                    <a href="#session-basics" class="sidenav__link" data-section="session-basics">Session Basics</a>
                    <a href="#session-security" class="sidenav__link" data-section="session-security">Session Security</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">HTTP Requests</div>
                    <a href="#http-reading" class="sidenav__link" data-section="http-reading">Reading POST/PUT Data</a>
                    <a href="#http-making" class="sidenav__link" data-section="http-making">Making HTTP Requests</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Middleware</div>
                    <a href="#middleware-understanding" class="sidenav__link" data-section="middleware-understanding">Understanding Middleware</a>
                    <a href="#middleware-csrf" class="sidenav__link" data-section="middleware-csrf">CSRF Protection</a>
                    <a href="#middleware-custom" class="sidenav__link" data-section="middleware-custom">Creating Custom Middleware</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Caching</div>
                    <a href="#cache-apcu" class="sidenav__link" data-section="cache-apcu">Using APCU Cache</a>
                    <a href="#cache-patterns" class="sidenav__link" data-section="cache-patterns">Cache Patterns</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">File Operations</div>
                    <a href="#file-reading" class="sidenav__link" data-section="file-reading">Reading and Writing Files</a>
                    <a href="#file-folders" class="sidenav__link" data-section="file-folders">Working with Folders</a>
                    <a href="#file-streams" class="sidenav__link" data-section="file-streams">Stream Operations</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Internationalization</div>
                    <a href="#i18n-setup" class="sidenav__link" data-section="i18n-setup">Setting Up Translations</a>
                    <a href="#i18n-using" class="sidenav__link" data-section="i18n-using">Using Translations</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">CLI</div>
                    <a href="#cli-commands" class="sidenav__link" data-section="cli-commands">Available Commands</a>
                    <a href="#cli-controllers" class="sidenav__link" data-section="cli-controllers">Creating Controllers</a>
                    <a href="#cli-setup" class="sidenav__link" data-section="cli-setup">Setup Files</a>
                    <a href="#cli-custom" class="sidenav__link" data-section="cli-custom">Custom Scripts</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Best Practices</div>
                    <a href="#bp-organization" class="sidenav__link" data-section="bp-organization">Code Organization</a>
                    <a href="#bp-security" class="sidenav__link" data-section="bp-security">Security</a>
                    <a href="#bp-performance" class="sidenav__link" data-section="bp-performance">Performance</a>
                    <a href="#bp-testing" class="sidenav__link" data-section="bp-testing">Testing</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Examples</div>
                    <a href="#example-blog" class="sidenav__link" data-section="example-blog">Simple Blog API</a>
                    <a href="#example-dashboard" class="sidenav__link" data-section="example-dashboard">User Dashboard</a>
                </div>

                <div class="sidenav__group">
                    <div class="sidenav__group-label">Troubleshooting</div>
                    <a href="#troubleshooting" class="sidenav__link" data-section="troubleshooting">Common Issues</a>
                    <a href="#getting-help" class="sidenav__link" data-section="getting-help">Getting Help</a>
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
                    Welcome to Aether-PHP, a lightweight, zero-dependency PHP framework built from scratch. This documentation will guide you through using the framework from basic to advanced levels.
                </p>

                <p>Aether-PHP is designed with simplicity and clarity in mind. Every component is readable, typed, and explicit. No magic containers. No reflection-based dependency injection. No hidden conventions that silently alter your code's behavior.</p>

                <p>Built for PHP 8.3+, Aether leverages modern language features like enums, typed properties, and readonly classes to provide a solid foundation for building real applications.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="requirements">
                <div class="doc-section__label">Getting Started</div>
                <h1 class="doc-section__h1">Requirements</h1>
                <p class="doc-section__lead">Before you begin, ensure you have the following installed:</p>

                <div class="requirements-table">
                    <div class="req-row req-row--header">
                        <span>Requirement</span><span>Version</span><span>Notes</span>
                    </div>
                    <div class="req-row">
                        <span>PHP</span><span>8.3+</span><span>Enums, typed properties required</span>
                    </div>
                    <div class="req-row">
                        <span>Web Server</span><span>Any</span><span>Apache, Nginx, or PHP built-in</span>
                    </div>
                    <div class="req-row">
                        <span>Database</span><span>Optional</span><span>MySQL or SQLite for database features</span>
                    </div>
                    <div class="req-row">
                        <span>APCU extension</span><span>Optional</span><span>For caching features</span>
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="installation">
                <div class="doc-section__label">Getting Started</div>
                <h1 class="doc-section__h1">Installation</h1>
                <p class="doc-section__lead">To get started with Aether-PHP:</p>

                <div class="steps-list">
                    <div class="step-item">
                        <div class="step-item__num">01</div>
                        <div class="step-item__body">
                            <h3>Clone or download the framework</h3>
                            <div class="code-card">
                                <div class="code-card__header">
                                    <span class="code-card__title">Terminal</span>
                                    <div class="code-card__dots"><span></span><span></span><span></span></div>
                                </div>
                                <pre class="code-block"><code>git clone https://github.com/Aether-PHP/Aether-PHP
cd Aether-PHP</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-item__num">02</div>
                        <div class="step-item__body">
                            <h3>Point your web server to the public directory</h3>
                            <p>Configure your web server's document root to point to the <code>public</code> directory.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-item__num">03</div>
                        <div class="step-item__body">
                            <h3>Configure your .env file</h3>
                            <div class="code-card">
                                <div class="code-card__header">
                                    <span class="code-card__title">Terminal</span>
                                    <div class="code-card__dots"><span></span><span></span><span></span></div>
                                </div>
                                <pre class="code-block"><code>cp .env.example .env</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-item__num">04</div>
                        <div class="step-item__body">
                            <h3>Access your application</h3>
                            <p>Visit your application through the web server. The entry point is <code>/index.php</code> which automatically loads everything.</p>
                        </div>
                    </div>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        The framework uses a custom autoloader, so no Composer is needed. No additional setup required!
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="environment">
                <div class="doc-section__label">Configuration</div>
                <h1 class="doc-section__h1">Environment Variables</h1>
                <p class="doc-section__lead">Aether-PHP uses a .env file for configuration. Create a .env file in the root directory with the following variables:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">.env</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt"># Application</span>
APP_ENV=dev
PROJECT_NAME=MyApp

<span class="cmt"># Database</span>
DATABASE_ADDRESS=localhost
DATABASE_USERNAME=root
DATABASE_PASSWORD=your_password
AUTH_DATABASE_GATEWAY=my_database
AUTH_TABLE_GATEWAY=users

<span class="cmt"># Session</span>
SESSION_HMAC=your_secret_key_at_least_32_characters_long</code></pre>
                </div>

                <p><code>APP_ENV</code> can be 'dev' or 'prod'. In dev mode, errors are displayed. In prod mode, errors are hidden for security.</p>

                <p><code>SESSION_HMAC</code> is used to sign session data. Use a long, random string for security. Generate one using:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Terminal</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code>openssl rand -hex 32</code></pre>
                </div>

                <div class="callout callout--warn">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <div class="callout__body">
                        <code>SESSION_HMAC</code> should never be committed to version control.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="accessing-config">
                <div class="doc-section__label">Configuration</div>
                <h1 class="doc-section__h1">Accessing Configuration</h1>
                <p class="doc-section__lead">You can access configuration values anywhere in your application:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Accessing config values</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$dbHost</span> = <span class="fn">Aether</span>()-><span class="fn">_config</span>()-><span class="fn">_get</span>(<span class="str">'DATABASE_ADDRESS'</span>);
<span class="kw">$appName</span> = <span class="fn">Aether</span>()-><span class="fn">_config</span>()-><span class="fn">_get</span>(<span class="str">'PROJECT_NAME'</span>);

<span class="cmt"># Same as:</span>
<span class="kw">$dbHost</span> = <span class="kw">$_ENV</span>[<span class="str">"DATABASE_ADDRESS"</span>];
<span class="kw">$appName</span> = <span class="kw">$_ENV</span>[<span class="str">"PROJECT_NAME"</span>];</code></pre>
                </div>

                <p>The <code>_get()</code> method returns the value from <code>$_ENV</code> array. If the key doesn't exist, it returns null.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="routing-basics">
                <div class="doc-section__label">Routing</div>
                <h1 class="doc-section__h1">Understanding Routes</h1>
                <p class="doc-section__lead">Aether-PHP uses annotation-based routing. Routes are defined using PHP DocBlock comments in your controller classes. The framework automatically scans controllers and registers routes.</p>

                <p>Controllers are located in:</p>
                <ul>
                    <li><code>app/App/Controller/</code> for web controllers</li>
                    <li><code>app/App/Controller/Api/</code> for API controllers</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="first-route">
                <div class="doc-section__label">Routing</div>
                <h1 class="doc-section__h1">Creating Your First Route</h1>
                <p class="doc-section__lead">Let's create a simple route. Create a file <code>app/App/Controller/HomeController.php</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">app/App/Controller/HomeController.php</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">&lt;?php</span>
<span class="kw">namespace</span> <span class="fn">App</span>\<span class="fn">Controller</span>;

<span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Router</span>\<span class="fn">Controller</span>\<span class="fn">Controller</span>;

<span class="kw">class</span> <span class="fn">HomeController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {
    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /
     */</span>
    <span class="kw">public function</span> <span class="fn">index</span>() {
        <span class="kw">echo</span> <span class="str">"Hello, Aether-PHP!"</span>;
    }
}</code></pre>
                </div>

                <p>This creates a GET route at the root URL (/). When someone visits your site, this method will be called.</p>

                <p>The annotations work as follows:</p>
                <ul>
                    <li><code>[@method]</code> => HTTP method (GET, POST, PUT, DELETE)</li>
                    <li><code>[@route]</code> => URL path</li>
                </ul>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Note: The square brackets and @ symbols are literal - include them exactly as shown. Routes are case-sensitive.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="route-parameters">
                <div class="doc-section__label">Routing</div>
                <h1 class="doc-section__h1">Route Parameters</h1>
                <p class="doc-section__lead">You can capture URL parameters using curly braces:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Single parameter</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@method] => GET
 * [@route]  => /user/{id}
 */</span>
<span class="kw">public function</span> <span class="fn">showUser</span>(<span class="kw">$id</span>) {
    <span class="kw">echo</span> <span class="str">"User ID: "</span> . <span class="kw">$id</span>;
}</code></pre>
                </div>

                <p>When someone visits <code>/user/123</code>, the <code>$id</code> parameter will contain '123'. Parameters are automatically sanitized to prevent XSS attacks.</p>

                <h2>Multiple parameters</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Multiple parameters</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@method] => GET
 * [@route]  => /user/{userId}/post/{postId}
 */</span>
<span class="kw">public function</span> <span class="fn">showPost</span>(<span class="kw">$userId</span>, <span class="kw">$postId</span>) {
    <span class="cmt"># Parameters are passed in the order they appear in the route</span>
    <span class="kw">echo</span> <span class="str">"User: $userId, Post: $postId"</span>;
}</code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Route parameters only work with GET requests. For POST/PUT/DELETE, use request body data instead.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="base-paths">
                <div class="doc-section__label">Routing</div>
                <h1 class="doc-section__h1">Base Paths</h1>
                <p class="doc-section__lead">For API controllers, you often want a base path prefix. Use the <code>[@base]</code> annotation on the class:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Using base paths</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@base] => /api/v1
 */</span>
<span class="kw">class</span> <span class="fn">ApiController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {
    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /users
     */</span>
    <span class="kw">public function</span> <span class="fn">getUsers</span>() {
        <span class="cmt"># This route becomes: GET /api/v1/users</span>
    }
}</code></pre>
                </div>

                <p>The base path is used for all routes in that controller.</p>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Use base paths to version your APIs. You can have /api/v1 and /api/v2 controllers separately.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="controller-structure">
                <div class="doc-section__label">Controllers & Responses</div>
                <h1 class="doc-section__h1">Controller Structure</h1>
                <p class="doc-section__lead">All controllers must extend <code>Aether\Router\Controller\Controller</code>. The base Controller class provides helper methods for rendering views and accessing services.</p>

                <p>Your controller methods can return:</p>
                <ul>
                    <li>Nothing (void) - output is sent directly</li>
                    <li>HTTP Response objects (for APIs)</li>
                    <li>View rendering (for web pages)</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="json-responses">
                <div class="doc-section__label">Controllers & Responses</div>
                <h1 class="doc-section__h1">JSON Responses</h1>
                <p class="doc-section__lead">For API endpoints, return JSON responses:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Returning JSON</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@method] => GET
 * [@route]  => /api/users
 */</span>
<span class="kw">public function</span> <span class="fn">getUsers</span>() {
    <span class="kw">$users</span> = [
        [<span class="str">'id'</span> => <span class="num">1</span>, <span class="str">'name'</span> => <span class="str">'John'</span>],
        [<span class="str">'id'</span> => <span class="num">2</span>, <span class="str">'name'</span> => <span class="str">'Jane'</span>]
    ];

    <span class="kw">return</span> <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>(<span class="kw">$users</span>, <span class="num">200</span>)-><span class="fn">_send</span>();
}</code></pre>
                </div>

                <p>The <code>_json()</code> method takes two parameters:</p>
                <ul>
                    <li>First: the data to encode (array or object)</li>
                    <li>Second: HTTP status code (200, 201, 404, etc.)</li>
                </ul>
                <p>Always call <code>->_send()</code> at the end to output the response.</p>

                <h2>Common status codes</h2>
                <div class="inline-tags">
                    <span class="method-tag method-tag--get">200 - OK</span>
                    <span class="method-tag method-tag--post">201 - Created</span>
                    <span class="method-tag method-tag--delete">400 - Bad Request</span>
                    <span class="method-tag method-tag--delete">404 - Not Found</span>
                    <span class="method-tag method-tag--delete">500 - Internal Server Error</span>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="response-formats">
                <div class="doc-section__label">Controllers & Responses</div>
                <h1 class="doc-section__h1">Other Response Formats</h1>
                <p class="doc-section__lead">Aether-PHP supports multiple response formats:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Different response types</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt"># HTML response</span>
<span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_html</span>(<span class="str">'&lt;h1&gt;Hello&lt;/h1&gt;'</span>, <span class="num">200</span>)-><span class="fn">_send</span>();

<span class="cmt"># XML response</span>
<span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_xml</span>(<span class="str">'&lt;root&gt;&lt;item&gt;data&lt;/item&gt;&lt;/root&gt;'</span>, <span class="num">200</span>)-><span class="fn">_send</span>();

<span class="cmt"># Plain text response</span>
<span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_text</span>(<span class="str">'Hello World'</span>, <span class="num">200</span>)-><span class="fn">_send</span>();

<span class="cmt"># PDF response</span>
<span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_pdf</span>(<span class="kw">$pdfContent</span>, <span class="num">200</span>)-><span class="fn">_send</span>();</code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        The framework automatically sets appropriate Content-Type headers for each format.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="rendering-views">
                <div class="doc-section__label">Controllers & Responses</div>
                <h1 class="doc-section__h1">Rendering Views</h1>
                <p class="doc-section__lead">For web pages, render views using the <code>_render()</code> method:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Controller rendering a view</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@method] => GET
 * [@route]  => /
 */</span>
<span class="kw">public function</span> <span class="fn">home</span>() {
    <span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">'home'</span>, [
        <span class="str">'title'</span> => <span class="str">'Welcome'</span>,
        <span class="str">'user'</span> => [<span class="str">'name'</span> => <span class="str">'John'</span>]
    ]);
}</code></pre>
                </div>

                <p>The first parameter is the view name (without .php extension). The second parameter is an array of variables to pass to the view. Views are located in <code>public/views/</code> directory.</p>

                <h2>View file</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">public/views/home.php</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">&lt;h1&gt;</span>&lt;?php echo <span class="kw">$title</span>; ?&gt;<span class="kw">&lt;/h1&gt;</span>
<span class="kw">&lt;p&gt;</span>Hello, &lt;?php echo <span class="kw">$user</span>[<span class="str">'name'</span>]; ?&gt;!<span class="kw">&lt;/p&gt;</span></code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Views use PHP's extract() function, so array keys become variable names.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-connecting">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">Connecting to Database</h1>
                <p class="doc-section__lead">Aether-PHP supports MySQL and SQLite databases. Access the database through the ServiceManager:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Database connections</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt"># MySQL connection</span>
<span class="kw">$db</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_mysql</span>(<span class="str">'database_name'</span>);

<span class="cmt"># SQLite connection</span>
<span class="kw">$db</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_sqlite</span>(<span class="str">'path/to/database.db'</span>);</code></pre>
                </div>

                <p>The database name for MySQL should match your database name. For SQLite, provide the full path to the .db file.</p>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Connections are cached, so calling _mysql() multiple times with the same database name returns the same connection.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-select">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">Basic SELECT Queries</h1>
                <p class="doc-section__lead">Use the QueryBuilder for type-safe database queries:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">SELECT query</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$users</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_select</span>(<span class="str">'*'</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This executes: <code>SELECT * FROM users</code>. The <code>_send()</code> method executes the query and returns results.</p>

                <h2>Select specific columns</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Specific columns</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$users</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_select</span>(<span class="str">'id'</span>, <span class="str">'name'</span>, <span class="str">'email'</span>)
    -><span class="fn">_send</span>();

<span class="cmt"># Or pass an array:</span>
<span class="kw">$users</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_select</span>([<span class="str">'id'</span>, <span class="str">'name'</span>, <span class="str">'email'</span>])
    -><span class="fn">_send</span>();</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-where">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">WHERE Clauses</h1>
                <p class="doc-section__lead">Add conditions using <code>_where()</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Single WHERE clause</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$user</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_select</span>(<span class="str">'*'</span>)
    -><span class="fn">_where</span>(<span class="str">'id'</span>, <span class="num">1</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This executes: <code>SELECT * FROM users WHERE id = 1</code>. Results are returned as an array of associative arrays.</p>

                <h2>Multiple WHERE clauses</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Chaining WHERE clauses</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$users</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_select</span>(<span class="str">'*'</span>)
    -><span class="fn">_where</span>(<span class="str">'status'</span>, <span class="str">'active'</span>)
    -><span class="fn">_where</span>(<span class="str">'role'</span>, <span class="str">'admin'</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This executes: <code>SELECT * FROM users WHERE status = 'active' AND role = 'admin'</code></p>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        All values are automatically parameterized to prevent SQL injection. In reality, such query would execute: <code>SELECT * FROM `users` WHERE status = :status AND role = :role</code>, with all key/value pairs inputted in prepared statements.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-insert">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">INSERT Queries</h1>
                <p class="doc-section__lead">Insert data using <code>_insert()</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">INSERT query</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_insert</span>(<span class="str">'name'</span>, <span class="str">'John Doe'</span>)
    -><span class="fn">_insert</span>(<span class="str">'email'</span>, <span class="str">'john@example.com'</span>)
    -><span class="fn">_insert</span>(<span class="str">'password'</span>, <span class="str">'hashed_password'</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This executes: <code>INSERT INTO users (name, email, password) VALUES (:name, :email, :password)</code>. Chain multiple <code>_insert()</code> calls to add multiple columns.</p>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        The framework uses prepared statements, so your data is safe from SQL injection.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-update">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">UPDATE Queries</h1>
                <p class="doc-section__lead">Update records using <code>_update()</code> and <code>_set()</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">UPDATE query</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_update</span>()
    -><span class="fn">_set</span>(<span class="str">'name'</span>, <span class="str">'Jane Doe'</span>)
    -><span class="fn">_set</span>(<span class="str">'email'</span>, <span class="str">'jane@example.com'</span>)
    -><span class="fn">_where</span>(<span class="str">'id'</span>, <span class="num">1</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This executes: <code>UPDATE users SET name = :set_name, email = :set_email WHERE id = :id</code></p>

                <div class="callout callout--warn">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <div class="callout__body">
                        Always include a <code>_where()</code> clause to avoid updating all rows!
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-delete">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">DELETE Queries</h1>
                <p class="doc-section__lead">Delete records using <code>_delete()</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">DELETE query</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_delete</span>()
    -><span class="fn">_where</span>(<span class="str">'id'</span>, <span class="num">1</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This executes: <code>DELETE FROM users WHERE id = :id</code></p>

                <div class="callout callout--warn">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <div class="callout__body">
                        Always include a <code>_where()</code> clause! Forgetting it will delete ALL rows in the table.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-exist">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">Checking Existence</h1>
                <p class="doc-section__lead">Check if a record exists using <code>_exist()</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Existence check</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$exists</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_exist</span>()
    -><span class="fn">_where</span>(<span class="str">'email'</span>, <span class="str">'test@example.com'</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This returns true if the record exists, false otherwise. Useful for validation before inserting new records.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-join">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">JOIN Queries</h1>
                <p class="doc-section__lead">Perform JOINs using <code>_join()</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">JOIN query</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$results</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_select</span>(<span class="str">'users.name'</span>, <span class="str">'posts.title'</span>)
    -><span class="fn">_join</span>(<span class="str">'posts'</span>, <span class="str">'users.id = posts.user_id'</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <p>This executes: <code>SELECT users.name, posts.title FROM users INNER JOIN posts ON users.id = posts.user_id</code></p>

                <p>You can chain multiple <code>_join()</code> calls for multiple JOINs.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-raw">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">Raw SQL Queries</h1>
                <p class="doc-section__lead">For complex queries, use <code>_raw()</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Raw SQL</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$results</span> = <span class="kw">$db</span>-><span class="fn">_raw</span>(<span class="str">'SELECT COUNT(*) as total FROM users WHERE created_at > DATE_SUB(NOW(), INTERVAL 1 MONTH)'</span>);</code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Use <code>_raw()</code> sparingly and only when the QueryBuilder can't handle your query. Always validate and sanitize any user input used in raw queries.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="auth-registration">
                <div class="doc-section__label">Authentication</div>
                <h1 class="doc-section__h1">User Registration</h1>
                <p class="doc-section__lead">Aether-PHP provides built-in authentication. To register a new user:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">User registration</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Auth</span>\<span class="fn">Gateway</span>\<span class="fn">RegisterAuthGateway</span>;

<span class="kw">$gateway</span> = <span class="kw">new</span> <span class="fn">RegisterAuthGateway</span>(<span class="kw">$username</span>, <span class="kw">$email</span>, <span class="kw">$password</span>);

<span class="kw">if</span> (<span class="kw">$gateway</span>-><span class="fn">_tryAuth</span>()) {
    <span class="cmt"># Registration successful</span>
    <span class="kw">echo</span> <span class="kw">$gateway</span>-><span class="fn">_getStatus</span>(); <span class="cmt"># "user successfully signed up."</span>
    <span class="cmt"># User is automatically logged in</span>
} <span class="kw">else</span> {
    <span class="cmt"># Registration failed</span>
    <span class="kw">echo</span> <span class="kw">$gateway</span>-><span class="fn">_getStatus</span>(); <span class="cmt"># "provided email is already used."</span>
}</code></pre>
                </div>

                <p>The RegisterAuthGateway:</p>
                <ul>
                    <li>Checks if the email is already in use</li>
                    <li>Hashes the password using Argon2ID</li>
                    <li>Inserts the user into the database</li>
                    <li>Automatically logs the user in, in a safe session environment</li>
                </ul>

                <p>Make sure your database has a 'users' table with columns:</p>
                <ul>
                    <li>uid (primary key)</li>
                    <li>username</li>
                    <li>email</li>
                    <li>password_hash (or password)</li>
                    <li>perms (JSON array of permissions)</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="auth-login">
                <div class="doc-section__label">Authentication</div>
                <h1 class="doc-section__h1">User Login</h1>
                <p class="doc-section__lead">To log in a user:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">User login</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Auth</span>\<span class="fn">Gateway</span>\<span class="fn">LoginAuthGateway</span>;

<span class="kw">$gateway</span> = <span class="kw">new</span> <span class="fn">LoginAuthGateway</span>(<span class="kw">$email</span>, <span class="kw">$password</span>);

<span class="kw">if</span> (<span class="kw">$gateway</span>-><span class="fn">_tryAuth</span>()) {
    <span class="cmt"># Login successful</span>
    <span class="kw">echo</span> <span class="kw">$gateway</span>-><span class="fn">_getStatus</span>(); <span class="cmt"># "user successfully logged in."</span>
} <span class="kw">else</span> {
    <span class="cmt"># Login failed</span>
    <span class="kw">echo</span> <span class="kw">$gateway</span>-><span class="fn">_getStatus</span>(); <span class="cmt"># "user login failed."</span>
}</code></pre>
                </div>

                <p>The LoginAuthGateway:</p>
                <ul>
                    <li>Checks if the email exists</li>
                    <li>Verifies the password hash</li>
                    <li>Creates a UserInstance and safely stores it in the session environment</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="auth-status">
                <div class="doc-section__label">Authentication</div>
                <h1 class="doc-section__h1">Checking Authentication Status</h1>
                <p class="doc-section__lead">Check if a user is logged in:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Checking login status</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Auth</span>\<span class="fn">User</span>\<span class="fn">UserFactory</span>;

<span class="kw">if</span> (<span class="fn">UserFactory</span>::<span class="fn">_isLoggedIn</span>()) {
    <span class="cmt"># User is logged in</span>
} <span class="kw">else</span> {
    <span class="cmt"># User is not logged in</span>
}</code></pre>
                </div>

                <p>Or use the ServiceManager (much appreciated):</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Using ServiceManager</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">if</span> (<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_auth</span>()-><span class="fn">_isLoggedIn</span>()) {
    <span class="cmt"># User is logged in</span>
}</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="auth-user">
                <div class="doc-section__label">Authentication</div>
                <h1 class="doc-section__h1">Getting Current User</h1>
                <p class="doc-section__lead">Retrieve the current logged-in user:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Getting user</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Auth</span>\<span class="fn">User</span>\<span class="fn">UserFactory</span>;

<span class="kw">$user</span> = <span class="fn">UserFactory</span>::<span class="fn">_fromSession</span>();

<span class="kw">if</span> (<span class="kw">$user</span>) {
    <span class="kw">echo</span> <span class="kw">$user</span>-><span class="fn">_getUid</span>();
    <span class="kw">echo</span> <span class="kw">$user</span>-><span class="fn">_getUsername</span>();
    <span class="kw">echo</span> <span class="kw">$user</span>-><span class="fn">_getEmail</span>();
}</code></pre>
                </div>

                <p>Or use the ServiceManager (much appreciated):</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Using ServiceManager</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$user</span> = <span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_auth</span>()-><span class="fn">_getUser</span>();

<span class="kw">if</span> (<span class="kw">$user</span>) {
    <span class="kw">echo</span> <span class="kw">$user</span>-><span class="fn">_getUid</span>();
    <span class="kw">echo</span> <span class="kw">$user</span>-><span class="fn">_getUsername</span>();
    <span class="kw">echo</span> <span class="kw">$user</span>-><span class="fn">_getEmail</span>();
}</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="auth-permissions">
                <div class="doc-section__label">Authentication</div>
                <h1 class="doc-section__h1">User Permissions</h1>
                <p class="doc-section__lead">Check user permissions:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Permission checks</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">if</span> (<span class="kw">$user</span>-><span class="fn">_hasPerm</span>(<span class="str">'PERM.ADMIN'</span>)) {
    <span class="cmt"># User has admin permission, same as $user->_isAdmin()</span>
}

<span class="cmt"># Add a permission:</span>
<span class="kw">$user</span>-><span class="fn">_addPerm</span>(<span class="str">'PERM.ADMIN'</span>);
<span class="kw">$user</span>-><span class="fn">_update</span>(); <span class="cmt"># Save to database and session</span>

<span class="cmt"># Remove a permission:</span>
<span class="kw">$user</span>-><span class="fn">_removePerm</span>(<span class="str">'PERM.ADMIN'</span>);
<span class="kw">$user</span>-><span class="fn">_update</span>();

<span class="cmt"># Check if user is admin:</span>
<span class="kw">if</span> (<span class="kw">$user</span>-><span class="fn">_isAdmin</span>()) {
    <span class="cmt"># User is admin</span>
}

<span class="cmt"># Get all permissions:</span>
<span class="kw">$permissions</span> = <span class="kw">$user</span>-><span class="fn">_getPerms</span>(); <span class="cmt"># Returns array</span></code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="auth-logout">
                <div class="doc-section__label">Authentication</div>
                <h1 class="doc-section__h1">User Logout</h1>
                <p class="doc-section__lead">To log out a user:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Logout</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Auth</span>\<span class="fn">Gateway</span>\<span class="fn">LogoutAuthGateway</span>;

<span class="kw">$gateway</span> = <span class="kw">new</span> <span class="fn">LogoutAuthGateway</span>();

<span class="kw">if</span> (<span class="kw">$gateway</span>-><span class="fn">_tryAuth</span>()) {
    <span class="cmt"># Logout successful</span>
    <span class="kw">echo</span> <span class="kw">$gateway</span>-><span class="fn">_getStatus</span>();
}</code></pre>
                </div>

                <p>This removes the user from the session.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="session-basics">
                <div class="doc-section__label">Sessions</div>
                <h1 class="doc-section__h1">Session Basics</h1>
                <p class="doc-section__lead">Aether-PHP provides secure session management. Sessions are automatically started when the framework initializes.</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Working with sessions</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt"># Store values in session:</span>
<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_get</span>()-><span class="fn">_setValue</span>(<span class="str">'key'</span>, <span class="str">'value'</span>);

<span class="cmt"># Retrieve values:</span>
<span class="kw">$value</span> = <span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_get</span>()-><span class="fn">_getValue</span>(<span class="str">'key'</span>);

<span class="cmt"># Check if a key exists:</span>
<span class="kw">if</span> (<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_get</span>()-><span class="fn">_valueExist</span>(<span class="str">'key'</span>)) {
    <span class="cmt"># Key exists</span>
}

<span class="cmt"># Remove a value:</span>
<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_get</span>()-><span class="fn">_removeValue</span>(<span class="str">'key'</span>);</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="session-security">
                <div class="doc-section__label">Sessions</div>
                <h1 class="doc-section__h1">Session Security</h1>
                <p class="doc-section__lead">Aether-PHP automatically:</p>

                <ul>
                    <li>Signs session data with HMAC</li>
                    <li>Encodes data in base64</li>
                    <li>Validates data integrity on retrieval</li>
                </ul>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Session security features</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt"># Get session ID:</span>
<span class="kw">$sessionId</span> = <span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_get</span>()-><span class="fn">_getSessId</span>();

<span class="cmt"># Regenerate session ID (useful after login):</span>
<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_get</span>()-><span class="fn">_regenerateId</span>();</code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Regenerate session ID after authentication to prevent session fixation attacks.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="http-reading">
                <div class="doc-section__label">HTTP Requests</div>
                <h1 class="doc-section__h1">Reading POST/PUT Data</h1>
                <p class="doc-section__lead">To read data from POST or PUT requests:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Reading request data</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Http</span>\<span class="fn">HttpParameterUnpacker</span>;

<span class="kw">$params</span> = <span class="kw">new</span> <span class="fn">HttpParameterUnpacker</span>();

<span class="kw">$email</span> = <span class="kw">$params</span>-><span class="fn">_getAttribute</span>(<span class="str">'email'</span>);
<span class="kw">$password</span> = <span class="kw">$params</span>-><span class="fn">_getAttribute</span>(<span class="str">'password'</span>);</code></pre>
                </div>

                <p>The HttpParameterUnpacker automatically handles:</p>
                <ul>
                    <li>JSON request bodies</li>
                    <li>Form-data</li>
                    <li>URL-encoded data</li>
                </ul>

                <h2>Check if attribute exists</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Validation</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$email</span> = <span class="kw">$params</span>-><span class="fn">_getAttribute</span>(<span class="str">'email'</span>);
<span class="kw">if</span> (<span class="kw">$email</span> === <span class="kw">false</span>) {
    <span class="cmt"># Attribute doesn't exist</span>
}</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="http-making">
                <div class="doc-section__label">HTTP Requests</div>
                <h1 class="doc-section__h1">Making HTTP Requests</h1>
                <p class="doc-section__lead">Make outgoing HTTP requests:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Outbound HTTP request</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Http</span>\<span class="fn">RequestFactory</span>;
<span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Http</span>\<span class="fn">Methods</span>\<span class="fn">HttpMethodEnum</span>;

<span class="kw">$request</span> = <span class="fn">RequestFactory</span>::<span class="fn">_create</span>();
<span class="kw">$request</span>-><span class="fn">_setDestination</span>(<span class="str">'https://api.example.com/users'</span>);
<span class="kw">$request</span>-><span class="fn">_setMethod</span>(<span class="fn">HttpMethodEnum</span>::GET);
<span class="kw">$response</span> = <span class="kw">$request</span>-><span class="fn">_send</span>();</code></pre>
                </div>

                <p>Supported methods: GET, POST, PUT, DELETE</p>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        This is useful for calling external APIs or webhooks.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="middleware-understanding">
                <div class="doc-section__label">Middleware</div>
                <h1 class="doc-section__h1">Understanding Middleware</h1>
                <p class="doc-section__lead">Middleware runs before your controller methods. Aether-PHP includes several built-in middlewares:</p>

                <ul>
                    <li><strong>RatelimitMiddleware:</strong> Limits requests per IP (100 requests per 60 seconds)</li>
                    <li><strong>CsrfMiddleware:</strong> Protects against CSRF attacks</li>
                    <li><strong>SecurityHeadersMiddleware:</strong> Adds security headers to responses</li>
                </ul>

                <p>Middlewares are registered in <code>app/App/App.php</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Middleware registration</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">private static</span> <span class="kw">$_middlewares</span> = [
    <span class="fn">RatelimitMiddleware</span>::<span class="kw">class</span>,
    <span class="fn">CsrfMiddleware</span>::<span class="kw">class</span>,
    <span class="fn">SecurityHeadersMiddleware</span>::<span class="kw">class</span>
];</code></pre>
                </div>

                <p>The order matters - middlewares execute in the order they're listed.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="middleware-csrf">
                <div class="doc-section__label">Middleware</div>
                <h1 class="doc-section__h1">CSRF Protection</h1>
                <p class="doc-section__lead">CSRF protection is automatic. For GET/HEAD/OPTIONS requests, the CSRF token is exposed in the X-CSRF-Token header.</p>

                <h2>In JavaScript (fetch API)</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">JavaScript example</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">// Get token from header (set automatically on GET requests)</span>
<span class="kw">const</span> token = response.headers.<span class="fn">get</span>(<span class="str">'X-CSRF-Token'</span>);

<span class="cmt">// Include in POST request</span>
<span class="fn">fetch</span>(<span class="str">'/api/users'</span>, {
    method: <span class="str">'POST'</span>,
    headers: {
        <span class="str">'X-CSRF-Token'</span>: token,
        <span class="str">'Content-Type'</span>: <span class="str">'application/json'</span>
    },
    body: <span class="fn">JSON.stringify</span>({ name: <span class="str">'John'</span> })
});</code></pre>
                </div>

                <h2>In HTML forms</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">HTML form</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">&lt;form method="POST"&gt;</span>
    <span class="kw">&lt;input type="hidden" name="csrf_token" value="&lt;?php echo $_SESSION['csrf_token']; ?&gt;"&gt;</span>
    <span class="cmt">&lt;!-- form fields --&gt;</span>
<span class="kw">&lt;/form&gt;</span></code></pre>
                </div>

                <p>The middleware automatically verifies the token and returns 403 if invalid.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="middleware-custom">
                <div class="doc-section__label">Middleware</div>
                <h1 class="doc-section__h1">Creating Custom Middleware</h1>
                <p class="doc-section__lead">Create your own middleware by implementing MiddlewareInterface:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Custom middleware</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Middleware</span>\<span class="fn">MiddlewareInterface</span>;

<span class="kw">class</span> <span class="fn">LoggingMiddleware</span> <span class="kw">implements</span> <span class="fn">MiddlewareInterface</span> {

    <span class="kw">public function</span> <span class="fn">_handle</span>(<span class="kw">callable</span> <span class="kw">$_next</span>) {
        <span class="cmt">// Code before controller execution</span>
        <span class="fn">error_log</span>(<span class="str">'Request: '</span> . <span class="kw">$_SERVER</span>[<span class="str">'REQUEST_URI'</span>]);

        <span class="kw">$_next</span>(); <span class="cmt">// Call next middleware or controller</span>

        <span class="cmt">// Code after controller execution</span>
        <span class="fn">error_log</span>(<span class="str">'Response sent'</span>);
    }
}</code></pre>
                </div>

                <p>Register it in <code>app/App/App.php</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Registration</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">private static</span> <span class="kw">$_middlewares</span> = [
    <span class="fn">LoggingMiddleware</span>::<span class="kw">class</span>,
    <span class="fn">RatelimitMiddleware</span>::<span class="kw">class</span>,
    <span class="cmt">// ... other middlewares</span>
];</code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Use middleware for cross-cutting concerns like logging, authentication checks, or data transformation.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="cache-apcu">
                <div class="doc-section__label">Caching</div>
                <h1 class="doc-section__h1">Using APCU Cache</h1>
                <p class="doc-section__lead">Aether-PHP supports APCU caching. Access the cache:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">APCU operations</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$cache</span> = <span class="fn">Aether</span>()-><span class="fn">_cache</span>()-><span class="fn">_apcu</span>();

<span class="cmt"># Store a value:</span>
<span class="kw">$cache</span>-><span class="fn">_set</span>(<span class="str">'key'</span>, <span class="str">'value'</span>, <span class="num">3600</span>); <span class="cmt"># TTL in seconds (1 hour)</span>

<span class="cmt"># Retrieve a value:</span>
<span class="kw">$value</span> = <span class="kw">$cache</span>-><span class="fn">_get</span>(<span class="str">'key'</span>, <span class="str">'default'</span>); <span class="cmt"># Returns 'default' if key doesn't exist</span>

<span class="cmt"># Check if key exists:</span>
<span class="kw">if</span> (<span class="kw">$cache</span>-><span class="fn">_has</span>(<span class="str">'key'</span>)) {
    <span class="cmt"># Key exists</span>
}

<span class="cmt"># Delete a key:</span>
<span class="kw">$cache</span>-><span class="fn">_delete</span>(<span class="str">'key'</span>);

<span class="cmt"># Clear all cache:</span>
<span class="kw">$cache</span>-><span class="fn">_clear</span>();</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="cache-patterns">
                <div class="doc-section__label">Caching</div>
                <h1 class="doc-section__h1">Cache Patterns</h1>
                <p class="doc-section__lead">Common cache pattern - cache-aside:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Cache-aside pattern</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$cache</span> = <span class="fn">Aether</span>()-><span class="fn">_cache</span>()-><span class="fn">_apcu</span>();
<span class="kw">$key</span> = <span class="str">'users_list'</span>;

<span class="cmt"># Try to get from cache</span>
<span class="kw">$users</span> = <span class="kw">$cache</span>-><span class="fn">_get</span>(<span class="kw">$key</span>);

<span class="kw">if</span> (<span class="kw">$users</span> === <span class="kw">null</span>) {
    <span class="cmt"># Not in cache, fetch from database</span>
    <span class="kw">$users</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)-><span class="fn">_select</span>(<span class="str">'*'</span>)-><span class="fn">_send</span>();

    <span class="cmt"># Store in cache for 5 minutes</span>
    <span class="kw">$cache</span>-><span class="fn">_set</span>(<span class="kw">$key</span>, <span class="kw">$users</span>, <span class="num">300</span>);
}

<span class="cmt"># Use $users</span></code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Cache expensive operations like database queries or API calls.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="file-reading">
                <div class="doc-section__label">File Operations</div>
                <h1 class="doc-section__h1">Reading and Writing Files</h1>
                <p class="doc-section__lead">Aether-PHP provides file operations through the IO service:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">File operations</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt"># Read a JSON file</span>
<span class="kw">$file</span> = <span class="fn">Aether</span>()-><span class="fn">_io</span>()-><span class="fn">_file</span>(<span class="str">'data.json'</span>, <span class="fn">IOTypeEnum</span>::JSON);
<span class="kw">$data</span> = <span class="kw">$file</span>-><span class="fn">_readDecoded</span>(); <span class="cmt"># Returns decoded JSON as array</span>

<span class="cmt"># Write a JSON file</span>
<span class="kw">$file</span>-><span class="fn">_write</span>([<span class="str">'key'</span> => <span class="str">'value'</span>]); <span class="cmt"># Automatically encodes to JSON</span></code></pre>
                </div>

                <h2>Supported file types</h2>
                <ul>
                    <li><strong>JSON:</strong> Automatically encodes/decodes JSON</li>
                    <li><strong>ENV:</strong> Parses .env format</li>
                    <li><strong>TEXT:</strong> Plain text files</li>
                    <li><strong>PHP:</strong> PHP files</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="file-folders">
                <div class="doc-section__label">File Operations</div>
                <h1 class="doc-section__h1">Working with Folders</h1>
                <p class="doc-section__lead">Create and manipulate folders:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Folder operations</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$folder</span> = <span class="fn">Aether</span>()-><span class="fn">_io</span>()-><span class="fn">_folder</span>(<span class="str">'path/to/folder'</span>);

<span class="cmt"># Check if exists</span>
<span class="kw">if</span> (!<span class="kw">$folder</span>-><span class="fn">_exist</span>()) {
    <span class="kw">$folder</span>-><span class="fn">_create</span>();
}

<span class="cmt"># List files</span>
<span class="kw">$files</span> = <span class="kw">$folder</span>-><span class="fn">_listFiles</span>(<span class="str">'*.php'</span>);

<span class="cmt"># Create a file in folder</span>
<span class="kw">$newFile</span> = <span class="kw">$folder</span>-><span class="fn">_createFile</span>(<span class="str">'newfile.php'</span>);</code></pre>
                </div>

                <h2>Set folder permissions</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Permissions</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$folder</span>-><span class="fn">_setPerm</span>(<span class="num">0755</span>); <span class="cmt"># Read, write, execute for owner; read, execute for others</span></code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="file-streams">
                <div class="doc-section__label">File Operations</div>
                <h1 class="doc-section__h1">Stream Operations</h1>
                <p class="doc-section__lead">For large files, use streams:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Stream operations</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$stream</span> = <span class="fn">Aether</span>()-><span class="fn">_io</span>()-><span class="fn">_stream</span>(<span class="str">'largefile.txt'</span>, <span class="fn">IOTypeEnum</span>::TEXT);

<span class="cmt"># Read line by line with callback</span>
<span class="kw">$stream</span>-><span class="fn">_readEachLine</span>(<span class="kw">function</span>(<span class="kw">$line</span>) {
    <span class="kw">echo</span> <span class="kw">$line</span> . <span class="fn">PHP_EOL</span>;
});</code></pre>
                </div>

                <p>Streams use file locking to prevent concurrent access issues.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="i18n-setup">
                <div class="doc-section__label">Internationalization</div>
                <h1 class="doc-section__h1">Setting Up Translations</h1>
                <p class="doc-section__lead">Aether-PHP includes an I18n module. Create translation files in <code>lang/{code}/{code}_{UPPERCASE}.json</code>:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">lang/en/en_EN.json</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code>{
    <span class="str">"welcome"</span>: <span class="str">"Welcome"</span>,
    <span class="str">"hello"</span>: <span class="str">"Hello, {name}!"</span>,
    <span class="str">"admin"</span>: {
        <span class="str">"users"</span>: <span class="str">"Users"</span>,
        <span class="str">"settings"</span>: <span class="str">"Settings"</span>
    }
}</code></pre>
                </div>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">lang/fr/fr_FR.json</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code>{
    <span class="str">"welcome"</span>: <span class="str">"Bienvenue"</span>,
    <span class="str">"hello"</span>: <span class="str">"Bonjour, {name}!"</span>,
    <span class="str">"admin"</span>: {
        <span class="str">"users"</span>: <span class="str">"Utilisateurs"</span>,
        <span class="str">"settings"</span>: <span class="str">"Paramètres"</span>
    }
}</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="i18n-using">
                <div class="doc-section__label">Internationalization</div>
                <h1 class="doc-section__h1">Using Translations</h1>
                <p class="doc-section__lead">Use the global <code>__()</code> function to translate:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Translation examples</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">echo</span> <span class="fn">__</span>(<span class="str">'welcome'</span>); <span class="cmt"># "Welcome" or "Bienvenue" depending on language</span>

<span class="cmt"># With parameters:</span>
<span class="kw">echo</span> <span class="fn">__</span>(<span class="str">'hello'</span>, [<span class="str">'name'</span> => <span class="str">'John'</span>]); <span class="cmt"># "Hello, John!" or "Bonjour, John!"</span>

<span class="cmt"># Nested keys:</span>
<span class="kw">echo</span> <span class="fn">__</span>(<span class="str">'admin.users'</span>); <span class="cmt"># "Users" or "Utilisateurs"</span>

<span class="cmt"># Force a specific language:</span>
<span class="kw">echo</span> <span class="fn">__</span>(<span class="str">'welcome'</span>, [], <span class="str">'fr'</span>); <span class="cmt"># Always returns French translation</span></code></pre>
                </div>

                <p>The framework automatically detects language from Accept-Language header, or falls back to the default language.</p>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        The I18n module must be registered in app/App/App.php for translations to work.
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="cli-commands">
                <div class="doc-section__label">CLI</div>
                <h1 class="doc-section__h1">Available Commands</h1>
                <p class="doc-section__lead">Aether-PHP includes a CLI tool. Run commands using:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Terminal</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code>php bin/aether [command]</code></pre>
                </div>

                <h2>Available commands</h2>
                <div class="cli-table">
                    <div class="cli-row cli-row--header">
                        <span>Command</span><span>Description</span>
                    </div>
                    <div class="cli-row">
                        <code>make:controller Name</code>
                        <span>Creates a new controller</span>
                    </div>
                    <div class="cli-row">
                        <code>make:file path/to/file.php</code>
                        <span>Creates a new file</span>
                    </div>
                    <div class="cli-row">
                        <code>make:folder path/to/folder</code>
                        <span>Creates a new folder</span>
                    </div>
                    <div class="cli-row">
                        <code>setup</code>
                        <span>Runs setup commands from Aetherfile</span>
                    </div>
                    <div class="cli-row">
                        <code>setup:dev</code>
                        <span>Runs setup commands from Aetherfile.dev</span>
                    </div>
                    <div class="cli-row">
                        <code>setup:prod</code>
                        <span>Runs setup commands from Aetherfile.prod</span>
                    </div>
                    <div class="cli-row">
                        <code>source:script path/to/script.php</code>
                        <span>Runs a custom script</span>
                    </div>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="cli-controllers">
                <div class="doc-section__label">CLI</div>
                <h1 class="doc-section__h1">Creating Controllers via CLI</h1>
                <p class="doc-section__lead">Generate a controller quickly:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Terminal</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code>php bin/aether make:controller UserController</code></pre>
                </div>

                <p>This creates <code>app/App/Controller/UserController.php</code> with basic structure.</p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="cli-setup">
                <div class="doc-section__label">CLI</div>
                <h1 class="doc-section__h1">Setup Files</h1>
                <p class="doc-section__lead">Create an Aetherfile in your project root with commands to run:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Aetherfile</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code>echo "Setting up project..."
# Database migrations
php scripts/migrate.php
# Seed data
php scripts/seed.php
echo "Setup complete!"</code></pre>
                </div>

                <p>Run it with: <code>php bin/aether setup</code></p>

                <p>Create environment-specific files:</p>
                <ul>
                    <li><code>Aetherfile.dev</code> for development</li>
                    <li><code>Aetherfile.prod</code> for production</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="cli-custom">
                <div class="doc-section__label">CLI</div>
                <h1 class="doc-section__h1">Custom Scripts</h1>
                <p class="doc-section__lead">Create custom CLI scripts by extending BaseScript:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Custom script</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Modules</span>\<span class="fn">AetherCLI</span>\<span class="fn">Script</span>\<span class="fn">BaseScript</span>;

<span class="kw">class</span> <span class="fn">MyScript</span> <span class="kw">extends</span> <span class="fn">BaseScript</span> {
    <span class="kw">public function</span> <span class="fn">_onLoad</span>() {
        <span class="kw">$this</span>-><span class="kw">_logger</span>-><span class="fn">_echo</span>(<span class="str">"Running custom script..."</span>);
    }

    <span class="kw">public function</span> <span class="fn">_onRun</span>() {
        <span class="cmt">// Your script logic here</span>
        <span class="kw">$this</span>-><span class="kw">_logger</span>-><span class="fn">_echo</span>(<span class="str">"Script completed!"</span>);
    }
}</code></pre>
                </div>

                <p>Run it with: <code>php bin/aether source:script path/to/MyScript.php</code></p>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="advanced-routing">
                <div class="doc-section__label">Routing</div>
                <h1 class="doc-section__h1">Advanced Routing</h1>
                <p class="doc-section__lead">Organize routes by feature or domain:</p>

                <h2>Route Organization</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">app/App/Controller/UserController.php</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@base] => /users
 */</span>
<span class="kw">class</span> <span class="fn">UserController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {
    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /
     */</span>
    <span class="kw">public function</span> <span class="fn">index</span>() { <span class="cmt">/* List users */</span> }

    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /{id}
     */</span>
    <span class="kw">public function</span> <span class="fn">show</span>(<span class="kw">$id</span>) { <span class="cmt">/* Show user */</span> }
}</code></pre>
                </div>

                <p>This creates routes:</p>
                <ul>
                    <li>GET /users</li>
                    <li>GET /users/{id}</li>
                </ul>

                <h2>RESTful API Structure</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">RESTful controller</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@base] => /api/v1/users
 */</span>
<span class="kw">class</span> <span class="fn">UserApiController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {
    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /
     */</span>
    <span class="kw">public function</span> <span class="fn">index</span>() { <span class="cmt">/* GET /api/v1/users */</span> }

    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /{id}
     */</span>
    <span class="kw">public function</span> <span class="fn">show</span>(<span class="kw">$id</span>) {
<span class="cmt">/* GET /api/v1/users/{id} */</span> }

    <span class="cmt">/**
     * [@method] => POST
     * [@route]  => /
     */</span>
    <span class="kw">public function</span> <span class="fn">store</span>() { <span class="cmt">/* POST /api/v1/users */</span> }

    <span class="cmt">/**
     * [@method] => PUT
     * [@route]  => /{id}
     */</span>
    <span class="kw">public function</span> <span class="fn">update</span>(<span class="kw">$id</span>) { <span class="cmt">/* PUT /api/v1/users/{id} */</span> }

    <span class="cmt">/**
     * [@method] => DELETE
     * [@route]  => /{id}
     */</span>
    <span class="kw">public function</span> <span class="fn">destroy</span>(<span class="kw">$id</span>) { <span class="cmt">/* DELETE /api/v1/users/{id} */</span> }
}</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="db-advanced">
                <div class="doc-section__label">Database</div>
                <h1 class="doc-section__h1">Advanced Database Operations</h1>
                <p class="doc-section__lead">Build complex queries by chaining methods:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Complex query example</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$results</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)
    -><span class="fn">_select</span>(<span class="str">'users.name'</span>, <span class="str">'users.email'</span>, <span class="str">'posts.title'</span>)
    -><span class="fn">_join</span>(<span class="str">'posts'</span>, <span class="str">'users.id = posts.user_id'</span>)
    -><span class="fn">_where</span>(<span class="str">'users.status'</span>, <span class="str">'active'</span>)
    -><span class="fn">_where</span>(<span class="str">'posts.published'</span>, <span class="kw">true</span>)
    -><span class="fn">_send</span>();</code></pre>
                </div>

                <h2>Database Transactions</h2>
                <p>Use raw SQL for transactions:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Transaction example</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">try</span> {
    <span class="kw">$db</span>-><span class="fn">_raw</span>(<span class="str">'START TRANSACTION'</span>);

    <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)-><span class="fn">_insert</span>(<span class="str">'name'</span>, <span class="str">'John'</span>)-><span class="fn">_send</span>();
    <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'posts'</span>)-><span class="fn">_insert</span>(<span class="str">'title'</span>, <span class="str">'Post'</span>)-><span class="fn">_send</span>();

    <span class="kw">$db</span>-><span class="fn">_raw</span>(<span class="str">'COMMIT'</span>);
} <span class="kw">catch</span> (<span class="fn">Exception</span> <span class="kw">$e</span>) {
    <span class="kw">$db</span>-><span class="fn">_raw</span>(<span class="str">'ROLLBACK'</span>);
    <span class="kw">throw</span> <span class="kw">$e</span>;
}</code></pre>
                </div>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        Consider wrapping transaction logic in a service class for reusability.
                    </div>
                </div>

                <h2>Multiple Databases</h2>
                <p>Work with multiple databases:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Multiple database connections</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">$mainDb</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_mysql</span>(<span class="str">'main_database'</span>);
<span class="kw">$analyticsDb</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_mysql</span>(<span class="str">'analytics_database'</span>);

<span class="kw">$users</span> = <span class="kw">$mainDb</span>-><span class="fn">_table</span>(<span class="str">'users'</span>)-><span class="fn">_select</span>(<span class="str">'*'</span>)-><span class="fn">_send</span>();
<span class="kw">$stats</span> = <span class="kw">$analyticsDb</span>-><span class="fn">_table</span>(<span class="str">'stats'</span>)-><span class="fn">_select</span>(<span class="str">'*'</span>)-><span class="fn">_send</span>();</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="auth-advanced">
                <div class="doc-section__label">Authentication</div>
                <h1 class="doc-section__h1">Advanced Authentication</h1>
                <p class="doc-section__lead">Create custom authentication methods by extending AuthInstance:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Custom authentication gateway</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Auth</span>\<span class="fn">AuthInstance</span>;
<span class="kw">use</span> <span class="fn">Aether</span>\<span class="fn">Auth</span>\<span class="fn">Gateway</span>\<span class="fn">AuthGatewayEventInterface</span>;

<span class="kw">class</span> <span class="fn">OAuthGateway</span> <span class="kw">extends</span> <span class="fn">AuthInstance</span> <span class="kw">implements</span> <span class="fn">AuthGatewayEventInterface</span> {
    <span class="kw">public function</span> <span class="fn">_tryAuth</span>(): <span class="kw">bool</span> {
        <span class="cmt"># Your authentication logic</span>
        <span class="cmt"># Return true on success, false on failure</span>
    }

    <span class="kw">public function</span> <span class="fn">_onSuccess</span>(<span class="kw">array</span> <span class="kw">$_data</span>): <span class="kw">string</span> {
        <span class="cmt"># Handle successful authentication</span>
        <span class="cmt"># Create UserInstance and store in session</span>
        <span class="kw">return</span> <span class="str">"Authentication successful"</span>;
    }

    <span class="kw">public function</span> <span class="fn">_onFailure</span>(): <span class="kw">string</span> {
        <span class="kw">return</span> <span class="str">"Authentication failed"</span>;
    }
}</code></pre>
                </div>

                <h2>Permission Management</h2>
                <p>Create a permission enum for type safety:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Permission enum</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">enum</span> <span class="fn">PermissionEnum</span>: <span class="kw">string</span> {
    <span class="kw">case</span> ADMIN = <span class="str">'PERM.ADMIN'</span>;
    <span class="kw">case</span> MODERATOR = <span class="str">'PERM.MODERATOR'</span>;
    <span class="kw">case</span> USER = <span class="str">'PERM.USER'</span>;
}

<span class="cmt"># Use it in your code:</span>
<span class="kw">if</span> (<span class="kw">$user</span>-><span class="fn">_hasPerm</span>(<span class="fn">PermissionEnum</span>::ADMIN-><span class="kw">value</span>)) {
    <span class="cmt"># Admin only code</span>
}</code></pre>
                </div>

                <h2>Protecting Routes</h2>
                <p>Create middleware to protect routes:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">Auth middleware</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">class</span> <span class="fn">AuthMiddleware</span> <span class="kw">implements</span> <span class="fn">MiddlewareInterface</span> {
    <span class="kw">public function</span> <span class="fn">_handle</span>(<span class="kw">callable</span> <span class="kw">$_next</span>) {
        <span class="kw">if</span> (!<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_auth</span>()-><span class="fn">_isLoggedIn</span>()) {
            <span class="fn">http_response_code</span>(<span class="num">401</span>);
            <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>([
                <span class="str">'error'</span> => <span class="str">'Unauthorized'</span>
            ], <span class="num">401</span>)-><span class="fn">_send</span>();
            <span class="kw">return</span>;
        }

        <span class="kw">$_next</span>();
    }
}</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="bp-organization">
                <div class="doc-section__label">Best Practices</div>
                <h1 class="doc-section__h1">Code Organization</h1>
                <p class="doc-section__lead">Organize your code following these principles:</p>

                <ul>
                    <li>Keep controllers thin - move business logic to service classes</li>
                    <li>Use repositories for database access patterns</li>
                    <li>Separate API controllers from web controllers</li>
                    <li>Group related routes in the same controller</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="bp-security">
                <div class="doc-section__label">Best Practices</div>
                <h1 class="doc-section__h1">Security</h1>
                <p class="doc-section__lead">Security best practices:</p>

                <ul>
                    <li>Always validate and sanitize user input</li>
                    <li>Use parameterized queries (QueryBuilder does this automatically)</li>
                    <li>Regenerate session ID after login</li>
                    <li>Use strong SESSION_HMAC key</li>
                    <li>Keep APP_ENV=prod in production</li>
                    <li>Never expose sensitive data in error messages</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="bp-performance">
                <div class="doc-section__label">Best Practices</div>
                <h1 class="doc-section__h1">Performance</h1>
                <p class="doc-section__lead">Performance tips:</p>

                <ul>
                    <li>Use caching for expensive operations</li>
                    <li>Optimize database queries (avoid N+1 problems)</li>
                    <li>Use indexes on frequently queried columns</li>
                    <li>Cache database connections (already done automatically)</li>
                    <li>Minimize middleware overhead</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="bp-testing">
                <div class="doc-section__label">Best Practices</div>
                <h1 class="doc-section__h1">Testing</h1>
                <p class="doc-section__lead">Testing recommendations:</p>

                <ul>
                    <li>Test controllers with different HTTP methods</li>
                    <li>Test authentication flows</li>
                    <li>Test database operations</li>
                    <li>Test error handling</li>
                    <li>Use a test database for integration tests</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="example-blog">
                <div class="doc-section__label">Examples</div>
                <h1 class="doc-section__h1">Simple Blog API</h1>
                <p class="doc-section__lead">Complete example - Blog API with authentication:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">app/App/Controller/Api/PostApiController.php</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="cmt">/**
 * [@base] => /api/v1/posts
 */</span>
<span class="kw">class</span> <span class="fn">PostApiController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {
    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /
     */</span>
    <span class="kw">public function</span> <span class="fn">index</span>() {
        <span class="kw">$db</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_mysql</span>(<span class="str">'blog'</span>);
        <span class="kw">$posts</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'posts'</span>)
            -><span class="fn">_select</span>(<span class="str">'*'</span>)
            -><span class="fn">_where</span>(<span class="str">'published'</span>, <span class="kw">true</span>)
            -><span class="fn">_send</span>();

        <span class="kw">return</span> <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>(<span class="kw">$posts</span>, <span class="num">200</span>)-><span class="fn">_send</span>();
    }

    <span class="cmt">/**
     * [@method] => POST
     * [@route]  => /
     */</span>
    <span class="kw">public function</span> <span class="fn">store</span>() {
        <span class="cmt"># Check authentication</span>
        <span class="kw">if</span> (!<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_auth</span>()-><span class="fn">_isLoggedIn</span>()) {
            <span class="kw">return</span> <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>([
                <span class="str">'error'</span> => <span class="str">'Unauthorized'</span>
            ], <span class="num">401</span>)-><span class="fn">_send</span>();
        }

        <span class="cmt"># Get request data</span>
        <span class="kw">$params</span> = <span class="kw">new</span> <span class="fn">HttpParameterUnpacker</span>();
        <span class="kw">$title</span> = <span class="kw">$params</span>-><span class="fn">_getAttribute</span>(<span class="str">'title'</span>);
        <span class="kw">$content</span> = <span class="kw">$params</span>-><span class="fn">_getAttribute</span>(<span class="str">'content'</span>);

        <span class="cmt"># Validate</span>
        <span class="kw">if</span> (!<span class="kw">$title</span> || !<span class="kw">$content</span>) {
            <span class="kw">return</span> <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>([
                <span class="str">'error'</span> => <span class="str">'Title and content required'</span>
            ], <span class="num">400</span>)-><span class="fn">_send</span>();
        }

        <span class="cmt"># Insert</span>
        <span class="kw">$db</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_mysql</span>(<span class="str">'blog'</span>);
        <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'posts'</span>)
            -><span class="fn">_insert</span>(<span class="str">'title'</span>, <span class="kw">$title</span>)
            -><span class="fn">_insert</span>(<span class="str">'content'</span>, <span class="kw">$content</span>)
            -><span class="fn">_insert</span>(<span class="str">'user_id'</span>, <span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_auth</span>()-><span class="fn">_getUser</span>()-><span class="fn">_getUid</span>())
            -><span class="fn">_insert</span>(<span class="str">'published'</span>, <span class="kw">false</span>)
            -><span class="fn">_send</span>();

        <span class="kw">return</span> <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>([
            <span class="str">'message'</span> => <span class="str">'Post created'</span>
        ], <span class="num">201</span>)-><span class="fn">_send</span>();
    }
}</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="example-dashboard">
                <div class="doc-section__label">Examples</div>
                <h1 class="doc-section__h1">User Dashboard</h1>
                <p class="doc-section__lead">Complete example - User dashboard with views:</p>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">app/App/Controller/DashboardController.php</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">class</span> <span class="fn">DashboardController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {
    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /dashboard
     */</span>
    <span class="kw">public function</span> <span class="fn">index</span>() {
        <span class="cmt"># Check authentication</span>
        <span class="kw">if</span> (!<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_auth</span>()-><span class="fn">_isLoggedIn</span>()) {
            <span class="fn">header</span>(<span class="str">'Location: /login'</span>);
            <span class="kw">exit</span>;
        }

        <span class="kw">$user</span> = <span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_auth</span>()-><span class="fn">_getUser</span>();
        <span class="kw">$db</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_mysql</span>(<span class="str">'app'</span>);

        <span class="cmt"># Get user's posts</span>
        <span class="kw">$posts</span> = <span class="kw">$db</span>-><span class="fn">_table</span>(<span class="str">'posts'</span>)
            -><span class="fn">_select</span>(<span class="str">'*'</span>)
            -><span class="fn">_where</span>(<span class="str">'user_id'</span>, <span class="kw">$user</span>-><span class="fn">_getUid</span>())
            -><span class="fn">_send</span>();

        <span class="cmt"># Render view</span>
        <span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">'dashboard'</span>, [
            <span class="str">'user'</span> => <span class="kw">$user</span>,
            <span class="str">'posts'</span> => <span class="kw">$posts</span>
        ]);
    }
}</code></pre>
                </div>

                <h2>View file</h2>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title">public/views/dashboard.php</span>
                        <div class="code-card__dots"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">&lt;h1&gt;</span>Welcome, &lt;?php echo <span class="kw">$user</span>-><span class="fn">_getUsername</span>(); ?&gt;!<span class="kw">&lt;/h1&gt;</span>

<span class="kw">&lt;h2&gt;</span>Your Posts<span class="kw">&lt;/h2&gt;</span>
&lt;?php <span class="kw">foreach</span> (<span class="kw">$posts</span> <span class="kw">as</span> <span class="kw">$post</span>): ?&gt;
    <span class="kw">&lt;div class="post"&gt;</span>
        <span class="kw">&lt;h3&gt;</span>&lt;?php echo <span class="fn">htmlspecialchars</span>(<span class="kw">$post</span>[<span class="str">'title'</span>]); ?&gt;<span class="kw">&lt;/h3&gt;</span>
        <span class="kw">&lt;p&gt;</span>&lt;?php echo <span class="fn">htmlspecialchars</span>(<span class="kw">$post</span>[<span class="str">'content'</span>]); ?&gt;<span class="kw">&lt;/p&gt;</span>
    <span class="kw">&lt;/div&gt;</span>
&lt;?php <span class="kw">endforeach</span>; ?&gt;</code></pre>
                </div>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="troubleshooting">
                <div class="doc-section__label">Troubleshooting</div>
                <h1 class="doc-section__h1">Common Issues</h1>
                <p class="doc-section__lead">Common issues and solutions:</p>

                <h2>Routes not working</h2>
                <p><strong>Solutions:</strong></p>
                <ul>
                    <li>Check that controller is in app/App/Controller/ or app/App/Controller/Api/</li>
                    <li>Verify annotations are correct: [@method] and [@route]</li>
                    <li>Check web server is pointing to /index.php directory</li>
                    <li>Ensure autoload.php is loading correctly</li>
                </ul>

                <h2>Database connection fails</h2>
                <p><strong>Solutions:</strong></p>
                <ul>
                    <li>Verify .env file has correct database credentials</li>
                    <li>Check database server is running</li>
                    <li>Ensure database exists</li>
                    <li>Check PHP PDO extension is installed</li>
                </ul>

                <h2>CSRF token errors</h2>
                <p><strong>Solutions:</strong></p>
                <ul>
                    <li>Include CSRF token in POST/PUT/DELETE requests</li>
                    <li>Get token from X-CSRF-Token header on GET requests</li>
                    <li>Ensure session is working correctly</li>
                </ul>

                <h2>Views not rendering</h2>
                <p><strong>Solutions:</strong></p>
                <ul>
                    <li>Check view file exists in public/views/</li>
                    <li>Verify file has .php extension</li>
                    <li>Check variables are passed correctly to _render()</li>
                </ul>
            </section>

            <div class="doc-divider"></div>

            <section class="doc-section" id="getting-help">
                <div class="doc-section__label">Troubleshooting</div>
                <h1 class="doc-section__h1">Getting Help</h1>
                <p class="doc-section__lead">If you encounter issues:</p>

                <ul>
                    <li>Check the error messages (in dev mode)</li>
                    <li>Review the framework source code</li>
                    <li>Check PHP error logs</li>
                    <li>Verify all requirements are met</li>
                    <li>Visit the GitHub repository for updates and issues</li>
                </ul>

                <div class="callout callout--info">
                    <div class="callout__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="callout__body">
                        The framework is designed to be readable and understandable. Don't hesitate to explore the source code to understand how things work.
                    </div>
                </div>
            </section>

        </div>
    </main>

</div>

<script src="/public/js/docs.js"></script>
</body>
</html>