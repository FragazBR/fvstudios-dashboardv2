<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Alerts")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Alerts")) ?>
        <?= $this->include('partials/main-nav') ?>

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->

        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container">

                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="overview">
                                    Basic Example <a class="anchor-link" href="#overview">#</a>
                                </h5>
                                <p class="text-muted">
                                    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
                                    messages. Alerts are available for any length of text, as well as an optional dismiss button.
                                </p>
                                <div class="mb-3">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple info alert—check it out!
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        A simple light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark mb-0" role="alert">
                                        A simple dark alert—check it out!
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="defaultAlerts">
                                                &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                    A simple primary alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                    A simple secondary alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                    A simple success alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                    A simple danger alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
                                                    A simple warning alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
                                                    A simple info alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
                                                    A simple light alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-dark mb-0&quot; role=&quot;alert&quot;&gt;
                                                    A simple dark alert&mdash;check it out!
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="alert-dismissible">
                                    Dismissible Alerts Example <a class="anchor-link" href="#alert-dismissible">#</a>
                                </h5>
                                <p class="text-muted">
                                    Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding to the right of the alert and
                                    positions the <code>.btn-close</code> button.
                                </p>
                                <div class="mb-3">
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple info alert—check it out!
                                    </div>
                                    <div class="alert alert-light alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        A simple dark alert—check it out!
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="dismissingAlerts">
                                                &lt;div class=&quot;alert alert-primary alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple primary alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-secondary alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple secondary alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-success alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple success alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-danger alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple danger alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-warning alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple warning alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-info alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple info alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-light alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple light alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-dark alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    A simple dark alert&mdash;check it out!
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="alert-link">
                                    Alert Link Example <a class="anchor-link" href="#alert-link">#</a>
                                </h5>
                                <p class="text-muted">
                                    Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.
                                </p>

                                <div class="mb-3">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-danger mb-0" role="alert">
                                        A simple danger alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="alertsLink">
                                                &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                    A simple primary alert with &lt;a href=&quot;javascript:void(0);&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                    A simple secondary alert with &lt;a href=&quot;javascript:void(0);&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                    A simple success alert with &lt;a href=&quot;javascript:void(0);&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-danger mb-0&quot; role=&quot;alert&quot;&gt;
                                                    A simple danger alert with &lt;a href=&quot;javascript:void(0);&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="alert-icon">
                                    Icons Alert Example <a class="anchor-link" href="#alert-icon">#</a>
                                </h5>
                                <p class="text-muted">
                                    You can also include additional elements like icons, heading, etc along side the actual message.
                                </p>

                                <div class="mb-3">
                                    <div class="alert alert-primary alert-icon" role="alert">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm rounded bg-primary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                                <i class="bx bx-info-circle text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                A simple primary alert—check it out!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-secondary alert-icon" role="alert">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm rounded bg-secondary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                                <i class="bx bx-x-circle text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                A simple secondary alert—check it out!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-success alert-icon" role="alert">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm rounded bg-success d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                                <i class="bx bx-check-shield text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                A simple success alert—check it out!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger alert-icon mb-0" role="alert">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                                <i class="bx bx-info-circle text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                A simple danger alert—check it out!
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="alertWithIcon">
                                                &lt;div class=&quot;alert alert-primary alert-icon&quot; role=&quot;alert&quot;&gt;
                                                    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                        &lt;div class=&quot;avatar-sm rounded bg-primary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                            &lt;i class=&quot;bx bx-info-circle text-white&quot;&gt;&lt;/i&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                            A simple primary alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-secondary alert-icon&quot; role=&quot;alert&quot;&gt;
                                                    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                        &lt;div class=&quot;avatar-sm rounded bg-secondary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                            &lt;i class=&quot;bx bx-x-circle text-white&quot;&gt;&lt;/i&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                            A simple secondary alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-success alert-icon&quot; role=&quot;alert&quot;&gt;
                                                    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                        &lt;div class=&quot;avatar-sm rounded bg-success d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                            &lt;i class=&quot;bx bx-check-shield text-white&quot;&gt;&lt;/i&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                            A simple success alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-danger alert-icon mb-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                        &lt;div class=&quot;avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                            &lt;i class=&quot;bx bx-info-circle text-white&quot;&gt;&lt;/i&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                            A simple danger alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;    
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="alert-additional">
                                    Additional Content Alert Example <a class="anchor-link" href="#alert-additional">#</a>
                                </h5>
                                <p class="text-muted">
                                    Alerts can also contain additional HTML elements like headings, paragraphs and dividers.
                                </p>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="alert alert-primary mb-3 p-3 mb-xl-0" role="alert">
                                                <h4 class="alert-heading">Well done!</h4>
                                                <p class="mb-0">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                <hr>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="alert alert-secondary p-3 mb-0" role="alert">
                                                <h4 class="alert-heading">Well done!</h4>
                                                <p class="mb-0">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                <hr>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>
                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="additionalContent">
                                                &lt;div class=&quot;alert alert-primary mb-3 p-3 mb-xl-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
                                                    &lt;p class=&quot;mb-0&quot;&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
                                                    &lt;hr&gt;
                                                    &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-secondary p-3 mb-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
                                                    &lt;p class=&quot;mb-0&quot;&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
                                                    &lt;hr&gt;
                                                    &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
                                                &lt;/div&gt;
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
                                    <a href="#overview" class="nav-link">Basic Example</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#alert-dismissible" class="nav-link">Alert Dismissible</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#alert-link" class="nav-link">Alert Link</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#alert-icon" class="nav-link">Icons Alert</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#alert-additional" class="nav-link">Additional Content Alert</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end row -->

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