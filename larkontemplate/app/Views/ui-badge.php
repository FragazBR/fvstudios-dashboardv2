<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Badge")) ?>

    <?= $this->include("partials/head-css") ?>

</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Badge")) ?>
        <?= $this->include('partials/main-nav') ?>

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container">

                <!-- start badges -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="heading">
                                    Heading <a class="anchor-link" href="#heading">#</a>
                                </h5>
                                <p class="text-muted">
                                    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
                                    messages. Alerts are available for any length of text, as well as an optional dismiss button.
                                </p>
                                <div class="mb-3">
                                    <h1>h1.Example heading <span class="badge bg-primary">New</span></h1>
                                    <h2>h2.Example heading <span class="badge bg-secondary">New</span></h2>
                                    <h3>h3.Example heading <span class="badge bg-success">New</span></h3>
                                    <h4>h4.Example heading <span class="badge bg-info">New</span></h4>
                                    <h5>h5.Example heading <span class="badge bg-warning">New</span></h5>
                                    <h6 class="mb-0">h6.Example heading <span class="badge bg-danger">New</span></h6>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="headingBadge">
                                                    &lt;h1&gt;h1.Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
                                                    &lt;h2&gt;h2.Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
                                                    &lt;h3&gt;h3.Example heading &lt;span class=&quot;badge bg-success&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
                                                    &lt;h4&gt;h4.Example heading &lt;span class=&quot;badge bg-info&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
                                                    &lt;h5&gt;h5.Example heading &lt;span class=&quot;badge bg-warning&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
                                                    &lt;h6&gt;h6.Example heading &lt;span class=&quot;badge bg-danger&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="default_pill_badges">
                                    Default & Pill Badges <a class="anchor-link" href="#default_pill_badges">#</a>
                                </h5>
                                <p class="text-muted">
                                    Use our background utility classes to quickly change the appearance of a badge.
                                    And use the <code>.rounded-pill</code> class to make badges more rounded.
                                </p>
                                <div class="mb-3">
                                    <!-- Default Badges -->
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-1">Primary</span>
                                        <span class="badge bg-secondary me-1">Secondary</span>
                                        <span class="badge bg-success me-1">Success</span>
                                        <span class="badge bg-info me-1">Info</span>
                                        <span class="badge bg-warning me-1">Warning</span>
                                        <span class="badge bg-danger me-1">Danger</span>
                                        <span class="badge bg-dark me-1">Dark</span>
                                        <span class="badge bg-purple me-1">Purple</span>
                                        <span class="badge bg-pink me-1">Pink</span>
                                        <span class="badge bg-orange me-1">Orange</span>
                                    </div>
                                    <!-- Pill Badges -->
                                    <div>
                                        <span class="badge bg-primary rounded-pill me-1">Primary</span>
                                        <span class="badge bg-secondary rounded-pill me-1">Secondary</span>
                                        <span class="badge bg-success rounded-pill me-1">Success</span>
                                        <span class="badge bg-info rounded-pill me-1">Info</span>
                                        <span class="badge bg-warning rounded-pill me-1">Warning</span>
                                        <span class="badge bg-danger rounded-pill me-1">Danger</span>
                                        <span class="badge bg-dark rounded-pill me-1">Dark</span>
                                        <span class="badge bg-purple rounded-pill me-1">Purple</span>
                                        <span class="badge bg-pink rounded-pill me-1">Pink</span>
                                        <span class="badge bg-orange rounded-pill me-1">Orange</span>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="defaultPillBadge">
                                                    &lt;!-- Default Badges --&gt;
                                                    &lt;span class=&quot;badge bg-primary me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-secondary me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-success me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-info me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-warning me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-danger me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-dark me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-purple me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-pink me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-orange me-1&quot;&gt;Orange&lt;/span&gt;
                                                    &lt;!-- Pill Badges --&gt;
                                                    &lt;span class=&quot;badge bg-primary rounded-pill me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-secondary rounded-pill me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-success rounded-pill me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-info rounded-pill me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-warning rounded-pill me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-danger rounded-pill me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-dark rounded-pill me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-purple rounded-pill me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-pink rounded-pill me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-orange rounded-pill me-1&quot;&gt;Orange&lt;/span&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="outline_badges">
                                    Outline & Outline Pill Badges <a class="anchor-link" href="#outline_badges">#</a>
                                </h5>
                                <p class="text-muted">
                                    Using the <code>.badge-outline-**</code> to quickly create a bordered badges.
                                </p>

                                <div class="mb-3">
                                    <!-- Outline Badges -->
                                    <div class="mb-2">
                                        <span class="badge badge-outline-primary me-1">Primary</span>
                                        <span class="badge badge-outline-secondary me-1">Secondary</span>
                                        <span class="badge badge-outline-success me-1">Success</span>
                                        <span class="badge badge-outline-info me-1">Info</span>
                                        <span class="badge badge-outline-warning me-1">Warning</span>
                                        <span class="badge badge-outline-danger me-1">Danger</span>
                                        <span class="badge badge-outline-dark me-1">Dark</span>
                                        <span class="badge badge-outline-purple me-1">Purple</span>
                                        <span class="badge badge-outline-pink me-1">Pink</span>
                                        <span class="badge badge-outline-orange me-1">Orange</span>
                                    </div>
                                    <!-- Outline Pill Badges -->
                                    <div>
                                        <span class="badge badge-outline-primary rounded-pill me-1">Primary</span>
                                        <span class="badge badge-outline-secondary rounded-pill me-1">Secondary</span>
                                        <span class="badge badge-outline-success rounded-pill me-1">Success</span>
                                        <span class="badge badge-outline-info rounded-pill me-1">Info</span>
                                        <span class="badge badge-outline-warning rounded-pill me-1">Warning</span>
                                        <span class="badge badge-outline-danger rounded-pill me-1">Danger</span>
                                        <span class="badge badge-outline-dark rounded-pill me-1">Dark</span>
                                        <span class="badge badge-outline-purple rounded-pill me-1">Purple</span>
                                        <span class="badge badge-outline-pink rounded-pill me-1">Pink</span>
                                        <span class="badge badge-outline-orange rounded-pill me-1">Orange</span>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="outline&PillBadge">
                                                    &lt;!-- Outline Badges --&gt;
                                                    &lt;span class=&quot;badge badge-outline-primary me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-secondary me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-success me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-info me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-warning me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-danger me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-dark me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-purple me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-pink me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-orange me-1&quot;&gt;Orange&lt;/span&gt;
                                                    &lt;!-- Outline Pill Badges --&gt;
                                                    &lt;span class=&quot;badge badge-outline-primary rounded-pill me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-secondary rounded-pill me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-success rounded-pill me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-info rounded-pill me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-warning rounded-pill me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-danger rounded-pill me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-dark rounded-pill me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-purple rounded-pill me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-pink rounded-pill me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-orange rounded-pill me-1&quot;&gt;Orange&lt;/span&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="soft_badges">
                                    Soft & Soft Pill Badges <a class="anchor-link" href="#soft_badges">#</a>
                                </h5>
                                <p class="text-muted">
                                    Using the <code>.badge-soft-**</code> modifier class, you can have more soften variation.
                                </p>

                                <div class="mb-3">
                                    <!--  Soft Badges -->
                                    <div class="mb-2">
                                        <span class="badge badge-soft-primary me-1">Primary</span>
                                        <span class="badge badge-soft-secondary me-1">Secondary</span>
                                        <span class="badge badge-soft-success me-1">Success</span>
                                        <span class="badge badge-soft-info me-1">Info</span>
                                        <span class="badge badge-soft-warning me-1">Warning</span>
                                        <span class="badge badge-soft-danger me-1">Danger</span>
                                        <span class="badge badge-soft-dark me-1">Dark</span>
                                        <span class="badge badge-soft-purple me-1">Purple</span>
                                        <span class="badge badge-soft-pink me-1">Pink</span>
                                        <span class="badge badge-soft-orange me-1">Orange</span>
                                    </div>
                                    <!--  Soft Pill Badges -->
                                    <div>
                                        <span class="badge badge-soft-primary rounded-pill me-1">Primary</span>
                                        <span class="badge badge-soft-secondary rounded-pill me-1">Secondary</span>
                                        <span class="badge badge-soft-success rounded-pill me-1">Success</span>
                                        <span class="badge badge-soft-info rounded-pill me-1">Info</span>
                                        <span class="badge badge-soft-warning rounded-pill me-1">Warning</span>
                                        <span class="badge badge-soft-danger rounded-pill me-1">Danger</span>
                                        <span class="badge badge-soft-dark rounded-pill me-1">Dark</span>
                                        <span class="badge badge-soft-purple rounded-pill me-1">Purple</span>
                                        <span class="badge badge-soft-pink rounded-pill me-1">Pink</span>
                                        <span class="badge badge-soft-orange rounded-pill me-1">Orange</span>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="soft&PillBadges">
                                                    &lt;!-- Soft Badges --&gt;
                                                    &lt;span class=&quot;badge badge-soft-primary me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-secondary me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-success me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-info me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-warning me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-danger me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-dark me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-purple me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-pink me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-orange me-1&quot;&gt;Orange&lt;/span&gt;
                                                    &lt;!-- Soft Pill Badges --&gt;
                                                    &lt;span class=&quot;badge badge-soft-primary rounded-pill me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-secondary rounded-pill me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-success rounded-pill me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-info rounded-pill me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-warning rounded-pill me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-danger rounded-pill me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-dark rounded-pill me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-purple rounded-pill me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-pink rounded-pill me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-orange rounded-pill me-1&quot;&gt;Orange&lt;/span&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="component_badges">
                                    Buttons & Position <a class="anchor-link" href="#component_badges">#</a>
                                </h5>
                                <p class="text-muted">
                                    Alerts can also contain additional HTML elements like headings, paragraphs and dividers.
                                </p>

                                <div class="mb-3">
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-primary me-1 mb-1">
                                            Notifications <span class="badge bg-danger ms-1">4</span>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary me-1 mb-1">
                                            Notifications <span class="badge bg-primary ms-1">new</span>
                                        </button>
                                        <button type="button" class="btn btn-soft-primary me-1 mb-1">
                                            Notifications <span class="badge bg-primary ms-1">11</span>
                                        </button>
                                        <a href="javascript:void(0);" class="btn me-1 mb-1">
                                            Notifications <span class="badge bg-primary ms-1">90+</span>
                                        </a>
                                    </div>

                                    <div>
                                        <button type="button" class="btn btn-primary position-relative me-3">
                                            Inbox
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light">99+</span>
                                        </button>
                                        <button type="button" class="btn btn-primary position-relative">
                                            Profile
                                            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="buttonBadge">
                                                    &lt;!-- Buttons --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-1&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-danger ms-1&quot;&gt;4&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary me-1&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-primary ms-1&quot;&gt;new&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-primary&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-primary ms-1&quot;&gt;11+&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; type=&quot;button&quot; class=&quot;btn&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-primary ms-1&quot;&gt;90+&lt;/span&gt;
                                                    &lt;/a&gt;

                                                    &lt;!-- Position --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary position-relative me-3&quot;&gt;
                                                        Inbox
                                                        &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light&quot;&gt;99+&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary position-relative&quot;&gt;
                                                        Profile
                                                        &lt;span class=&quot;position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle&quot;&gt;&lt;/span&gt;
                                                    &lt;/button&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-xl-3">
                        <div class="card docs-nav">
                            <ul class="nav bg-transparent flex-column">
                                <li class="nav-item">
                                    <a href="#heading" class="nav-link">Heading</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#default_pill_badges" class="nav-link">Default & Pill Badges</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#outline_badges" class="nav-link">Outline & Outline Pill Badges</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#soft_badges" class="nav-link">Soft & Soft Pill Badges</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#component_badges" class="nav-link">Buttons & Position</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end row -->
                <!-- end badges -->

            </div>
            <!-- End Container Fluid -->

            <?= $this->include("partials/footer") ?>

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->

    <?= $this->include("partials/vendor-scripts") ?>


</body>

</html>