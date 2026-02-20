<?php
/** @var string $lang */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Aether PHP :: The Divine Lightweight PHP Framework </title>
        <meta name="description" content="Under 1MB. Zero dependencies. Pure PHP 8.3+. Built from scratch. No bloat. Explicit security.">
        <link rel="stylesheet" href="/public/css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300&family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
    </head>

<body>
<?php require_once "models/nav.md.php"; ?>

<main>
    <section class="hero" id="hero">
        <div class="hero__watermark hidephone" aria-hidden="true">ÆTHER</div>

        <div class="hero__inner">
            <div class="hero__status hidephone">
                <span class="hero__status-dot" aria-hidden="true"></span>
                <span class="hero__status-text"><?= __("home.hero.status"); ?></span>
            </div>

            <div class="hero__title-block">
                <h1 class="hero__h1">
                    <span class="hero__h1-name"><?= __("home.main_title"); ?></span>
                    <span class="hero__h1-desc"><?= __("home.main_description"); ?></span>
                </h1>
            </div>

            <div class="hero__strip">
                <div class="hero__strip-rule"></div>
                <div class="hero__strip-body">

                    <div class="hero__strip-cell">
                        <div class="hero__strip-label"><?= __("home.hero.about_label"); ?></div>
                        <p class="hero__strip-p"><?= __("home.hero.about_text"); ?></p>
                    </div>

                    <div class="hero__strip-sep" aria-hidden="true"></div>

                    <div class="hero__strip-cell hero__strip-cell--cta">
                        <div class="hero__strip-label"><?= __("home.hero.start_label"); ?></div>
                        <div class="hero__strip-actions">
                            <a href="https://github.com/Aether-PHP/Aether-PHP" class="btn btn--primary" target="_blank" rel="noopener">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.165 6.839 9.489.5.092.682-.217.682-.483 0-.237-.009-.868-.013-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.607.069-.607 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.202 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.741 0 .269.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z"/></svg>
                                <?= __("home.hero.btn_github"); ?>
                            </a>
                            <a href="/<?= $lang; ?>/download" class="btn btn--secondary"><?= __("home.hero.btn_get_started"); ?></a>
                            <a href="/<?= $lang; ?>/docs" class="btn btn--ghost"><?= __("home.hero.btn_docs"); ?></a>
                        </div>
                    </div>

                    <div class="hero__strip-sep" aria-hidden="true"></div>

                    <div class="hero__strip-cell hero__strip-cell--specs">
                        <div class="hero__strip-label"><?= __("home.hero.specs_label"); ?></div>
                        <div class="hero__specs">
                            <div class="hero__spec"><span><?= __("home.hero.spec_size"); ?></span><span><?= __("home.hero.spec_size_value"); ?></span></div>
                            <div class="hero__spec"><span><?= __("home.hero.spec_deps"); ?></span><span><?= __("home.hero.spec_deps_value"); ?></span></div>
                            <div class="hero__spec"><span><?= __("home.hero.spec_php"); ?></span><span><?= __("home.hero.spec_php_value"); ?></span></div>
                            <div class="hero__spec"><span><?= __("home.hero.spec_arch"); ?></span><span><?= __("home.hero.spec_arch_value"); ?></span></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="philosophy" id="philosophy">
        <div class="section__inner">
            <div class="section__label"><?= __("home.philosophy.label"); ?></div>
            <div class="philosophy__layout">
                <div class="philosophy__left">
                    <h2 class="section__title"><?= __("home.philosophy.title"); ?></h2>
                </div>
                <div class="philosophy__right">
                    <p class="philosophy__lead"><?= __("home.philosophy.lead"); ?></p>
                    <div class="pillars">
                        <div class="pillar">
                            <div class="pillar__num"><?= __("home.philosophy.pillar_1_num"); ?></div>
                            <div class="pillar__body">
                                <h3 class="pillar__title"><?= __("home.philosophy.pillar_1_title"); ?></h3>
                                <p class="pillar__text"><?= __("home.philosophy.pillar_1_text"); ?></p>
                            </div>
                        </div>
                        <div class="pillar">
                            <div class="pillar__num"><?= __("home.philosophy.pillar_2_num"); ?></div>
                            <div class="pillar__body">
                                <h3 class="pillar__title"><?= __("home.philosophy.pillar_2_title"); ?></h3>
                                <p class="pillar__text"><?= __("home.philosophy.pillar_2_text"); ?></p>
                            </div>
                        </div>
                        <div class="pillar">
                            <div class="pillar__num"><?= __("home.philosophy.pillar_3_num"); ?></div>
                            <div class="pillar__body">
                                <h3 class="pillar__title"><?= __("home.philosophy.pillar_3_title"); ?></h3>
                                <p class="pillar__text"><?= __("home.philosophy.pillar_3_text"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="examples" id="examples">
        <div class="section__inner">
            <div class="section__label"><?= __("home.examples.label"); ?></div>
            <h2 class="section__title section__title--center"><?= __("home.examples.title"); ?></h2>
            <p class="section__subtitle"><?= __("home.examples.subtitle"); ?></p>

            <div class="examples__grid">
                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title"><?= __("home.examples.card_1_title"); ?></span>
                        <div class="code-card__dots" aria-hidden="true">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <pre class="code-block"><code><span class="kw">class</span> <span class="fn">AppController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {

    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /
     */</span>
    <span class="kw">public function</span> <span class="fn">home</span>(){
        <span class="kw">$this</span>-><span class="fn">_render</span>(<span class="str">"home"</span>, [
            <span class="str">"welcome"</span> => <span class="str">"Welcome on the page !"</span>
        ]);
    }
}</code></pre>
                </div>

                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title"><?= __("home.examples.card_2_title"); ?></span>
                        <div class="code-card__dots" aria-hidden="true">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <pre class="code-block"><code><span class="kw">class</span> <span class="fn">ApiController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {

    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /api/endpoint
     */</span>
    <span class="kw">public function</span> <span class="fn">api</span>(){
        <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>([
            <span class="str">"message"</span> => <span class="str">"api fetched"</span>
        ], <span class="num">200</span>)-><span class="fn">_send</span>();
    }
}</code></pre>
                </div>

                <div class="code-card code-card--wide">
                    <div class="code-card__header">
                        <span class="code-card__title"><?= __("home.examples.card_3_title"); ?></span>
                        <div class="code-card__dots" aria-hidden="true">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <pre class="code-block"><code><span class="kw">class</span> <span class="fn">UserController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {

    <span class="cmt">/**
     * [@method] => GET
     * [@route]  => /api/users
     */</span>
    <span class="kw">public function</span> <span class="fn">fetchUsers</span>(){
        <span class="kw">if</span> (!<span class="fn">Aether</span>()-><span class="fn">_session</span>()-><span class="fn">_isLoggedIn</span>())
            <span class="kw">return</span> <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>([<span class="str">"You need to be logged in."</span>, <span class="num">401</span>])-><span class="fn">_send</span>();

        <span class="kw">$usersList</span> = <span class="fn">Aether</span>()-><span class="fn">_db</span>()-><span class="fn">_mysql</span>(<span class="str">"mydatabase"</span>)
            -><span class="fn">_table</span>(<span class="str">"users"</span>)
            -><span class="fn">_select</span>(<span class="str">'*'</span>)
            -><span class="fn">_send</span>();

        <span class="kw">return</span> <span class="fn">Aether</span>()-><span class="fn">_http</span>()-><span class="fn">_response</span>()-><span class="fn">_json</span>([<span class="kw">$usersList</span>, <span class="num">200</span>])-><span class="fn">_send</span>();
    }
}</code></pre>
                </div>
            </div>
        </div>
    </section>

    <section class="security" id="security">
        <div class="section__inner">
            <div class="section__label"><?= __("home.security.label"); ?></div>
            <div class="security__header">
                <h2 class="section__title"><?= __("home.security.title"); ?></h2>
                <p class="security__intro"><?= __("home.security.intro"); ?></p>
            </div>

            <div class="security__grid">
                <div class="sec-card">
                    <div class="sec-card__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="sec-card__title"><?= __("home.security.card_1_title"); ?></h3>
                    <p class="sec-card__text"><?= __("home.security.card_1_text"); ?></p>
                </div>
                <div class="sec-card">
                    <div class="sec-card__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                    </div>
                    <h3 class="sec-card__title"><?= __("home.security.card_2_title"); ?></h3>
                    <p class="sec-card__text"><?= __("home.security.card_2_text"); ?></p>
                </div>
                <div class="sec-card">
                    <div class="sec-card__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/><line x1="15" y1="15" x2="21" y2="21"/></svg>
                    </div>
                    <h3 class="sec-card__title"><?= __("home.security.card_3_title"); ?></h3>
                    <p class="sec-card__text"><?= __("home.security.card_3_text"); ?></p>
                </div>
                <div class="sec-card">
                    <div class="sec-card__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <h3 class="sec-card__title"><?= __("home.security.card_4_title"); ?></h3>
                    <p class="sec-card__text"><?= __("home.security.card_4_text"); ?></p>
                </div>
            </div>

            <div class="security__code">
                <div class="code-card">
                    <div class="code-card__header">
                        <span class="code-card__title"><?= __("home.security.code_title"); ?></span>
                        <div class="code-card__dots" aria-hidden="true"><span></span><span></span><span></span></div>
                    </div>
                    <pre class="code-block"><code><span class="kw">if</span> (<span class="fn">UserInstance</span>::<span class="fn">_isLoggedIn</span>()
            && <span class="fn">SessionInstance</span>::<span class="fn">_getUser</span>()-><span class="fn">_isAdmin</span>()) {

            <span class="cmt">// Access granted — no guessing, no magic</span>
            <span class="kw">echo</span> <span class="str">"Admin access granted."</span>;
        }</code></pre>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="section__inner">
            <div class="section__label"><?= __("home.features.label"); ?></div>
            <h2 class="section__title"><?= __("home.features.title"); ?></h2>
            <div class="features__grid">
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f1_title"); ?></h3>
                        <p><?= __("home.features.f1_text"); ?></p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f2_title"); ?></h3>
                        <p><?= __("home.features.f2_text"); ?></p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f3_title"); ?></h3>
                        <p><?= __("home.features.f3_text"); ?></p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f4_title"); ?></h3>
                        <p><?= __("home.features.f4_text"); ?></p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f5_title"); ?></h3>
                        <p><?= __("home.features.f5_text"); ?></p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f6_title"); ?></h3>
                        <p><?= __("home.features.f6_text"); ?></p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f7_title"); ?></h3>
                        <p><?= __("home.features.f7_text"); ?></p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-item__line" aria-hidden="true"></div>
                    <div class="feature-item__content">
                        <h3><?= __("home.features.f8_title"); ?></h3>
                        <p><?= __("home.features.f8_text"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why" id="why">
        <div class="section__inner">
            <div class="why__inner">
                <div class="section__label"><?= __("home.vision.label"); ?></div>
                <blockquote class="why__quote">
                    <p><?= __("home.vision.quote"); ?></p>
                </blockquote>
                <div class="why__body">
                    <p><?= __("home.vision.body_1"); ?></p>
                    <p><?= __("home.vision.body_2"); ?></p>
                </div>
                <div class="why__tags">
                    <span class="tag"><?= __("home.vision.tag_1"); ?></span>
                    <span class="tag"><?= __("home.vision.tag_2"); ?></span>
                    <span class="tag"><?= __("home.vision.tag_3"); ?></span>
                    <span class="tag"><?= __("home.vision.tag_4"); ?></span>
                    <span class="tag"><?= __("home.vision.tag_5"); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="start" id="start">
        <div class="section__inner">
            <div class="section__label"><?= __("home.start.label"); ?></div>
            <div class="start__layout">
                <div class="start__left">
                    <h2 class="section__title"><?= __("home.start.title"); ?></h2>
                    <p class="start__desc"><?= __("home.start.desc"); ?></p>
                    <a href="https://github.com/Aether-PHP/Aether-PHP" class="btn btn--primary" target="_blank" rel="noopener">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.165 6.839 9.489.5.092.682-.217.682-.483 0-.237-.009-.868-.013-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.607.069-.607 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.202 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.741 0 .269.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z"/></svg>
                        <?= __("home.start.btn_github"); ?>
                    </a>
                </div>
                <div class="start__right">
                    <div class="start__steps">
                        <div class="step">
                            <div class="step__num">01</div>
                            <div class="step__body">
                                <h3><?= __("home.start.step_1_title"); ?></h3>
                                <pre class="code-block code-block--inline"><code>$ git clone https://github.com/Aether-PHP/Aether-PHP
$ cd Aether-PHP</code></pre>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step__num">02</div>
                            <div class="step__body">
                                <h3><?= __("home.start.step_2_title"); ?></h3>
                                <pre class="code-block code-block--inline"><code>$ cp .env.example .env
<span class="cmt"># <?= __("home.start.step_2_comment"); ?></span></code></pre>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step__num">03</div>
                            <div class="step__body">
                                <h3><?= __("home.start.step_3_title"); ?></h3>
                                <pre class="code-block code-block--inline"><code>$ php bin/aether make:controller HomeController</code></pre>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step__num">04</div>
                            <div class="step__body">
                                <h3><?= __("home.start.step_4_title"); ?></h3>
                                <p><?= __("home.start.step_4_text"); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="requirements">
                        <div class="requirements__title"><?= __("home.start.requirements_title"); ?></div>
                        <div class="requirements__list">
                            <span><?= __("home.start.req_php"); ?></span>
                            <span><?= __("home.start.req_pdo"); ?></span>
                            <span><?= __("home.start.req_url"); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once "models/footer.md.php"; ?>

<script src="/public/js/home.js"></script>
<script src="/public/js/langSwitcher.js"></script>
</body>
</html>