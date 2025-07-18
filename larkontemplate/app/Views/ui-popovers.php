<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Popovers")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Popovers")) ?>
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
                                <div>
                                    <h5 class="card-title mb-1 anchor" id="live-demo">
                                        Live demo<a class="anchor-link" href="#live-demo">#</a>
                                    </h5>
                                    <p class="text-muted">We use JavaScript similar to the snippet above to render the following live popover. Titles are set via <code>data-bs-title</code> and body content is set via <code>data-bs-content</code>.</p>

                                    <div class="mb-3">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                                    </div>

                                    <div class="highlight">
                                        <div class="highlight-toolbar">
                                            <small class="text-uppercase">html</small>
                                            <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                        </div>

                                        <div class="code">
                                            <pre class="language-html">
                                                <code id="defaultpopover">
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Popover title&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;Click to toggle popover&lt;/button&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="popover-directions">
                                    Popover Directions <a class="anchor-link" href="#popover-directions">#</a>
                                </h5>
                                <p class="text-muted"> Four options are available: top, right, bottom, and left aligned.</p>

                                <div class="mb-3">
                                    <div class="d-flex flex-wrap gap-2">
                                        <!-- Top Position -->
                                        <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Popover on top
                                        </button>

                                        <!-- Bottom Position -->
                                        <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Popover on bottom
                                        </button>

                                        <!-- Left Position -->
                                        <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">
                                            Popover on left
                                        </button>

                                        <!-- Right Position -->
                                        <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Popover on right
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
                                            <code id="popoverdirections">
                                                &lt;!-- Top Position --&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                    Popover on top
                                                &lt;/button&gt;

                                                &lt;!-- Bottom Position --&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                    Popover on bottom
                                                &lt;/button&gt;


                                                &lt;!-- Left Position --&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;Popover title&quot;&gt;
                                                    Popover on left
                                                &lt;/button&gt;

                                                &lt;!-- Right Position --&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                    Popover on right
                                                &lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="dismiss">
                                    Dismiss on Next Click <a class="anchor-link" href="#dismiss">#</a>
                                </h5>
                                <p class="text-muted">Use the <code>focus</code> trigger to dismiss popovers
                                    on the user’s next click of a different element than the toggle element.</p>

                                <div class="mb-3">
                                    <button type="button" tabindex="0" class="btn btn-success" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="And here's some amazing content. It's very engaging. Right?" title="Dismissible popover">
                                        Dismissible popover
                                    </button>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="dismiss-popover">
                                                &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;focus&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot; title=&quot;Dismissible popover&quot;&gt;
                                                    Dismissible popover
                                                &lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="hover">
                                    Hover <a class="anchor-link" href="#hover">#</a>
                                </h5>
                                <p class="text-muted">Use the <code>data-bs-trigger="hover"</code> trigger Hover to show popover.</p>

                                <div class="mb-3">
                                    <button type="button" tabindex="0" class="btn btn-dark" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="And here's some amazing content. It's very engaging. Right?" title="Ohh Wow !">
                                        Please Hover Me
                                    </button>
                                </div>
                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="hover-popover">
                                                &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot; title=&quot;Ohh Wow !&quot;&gt;
                                                    Please Hover Me
                                                &lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="custom-popovers">
                                    Custom Popovers <a class="anchor-link" href="#custom-popovers">#</a>
                                </h5>
                                <p class="text-muted"> ou can customize the appearance of popovers using CSS variables. We set a custom class with
                                    <code>data-bs-custom-class="primary-popover"</code> to scope our custom appearance and use it to override some of the
                                    local CSS variables.
                                </p>

                                <div class="mb-3">
                                    <div class="button-list">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="top" data-bs-custom-class="primary-popover" data-bs-title="Primary popover" data-bs-content="This popover is themed via CSS variables.">
                                            Primary popover
                                        </button>

                                        <button type="button" class="btn btn-success" data-bs-toggle="popover" data-bs-placement="top" data-bs-custom-class="success-popover" data-bs-title="Success popover" data-bs-content="This popover is themed via CSS variables.">
                                            Success popover
                                        </button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="popover" data-bs-placement="top" data-bs-custom-class="danger-popover" data-bs-title="Danger popover" data-bs-content="This popover is themed via CSS variables.">
                                            Danger popover
                                        </button>

                                        <button type="button" class="btn btn-info" data-bs-toggle="popover" data-bs-placement="top" data-bs-custom-class="info-popover" data-bs-title="Info popover" data-bs-content="This popover is themed via CSS variables.">
                                            Info popover
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
                                            <code id="custom-popover">
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;primary-popover&quot; data-bs-title=&quot;Primary popover&quot; data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                    Primary popover
                                                &lt;/button&gt;

                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;success-popover&quot; data-bs-title=&quot;Success popover&quot; data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                    Success popover
                                                &lt;/button&gt;

                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;danger-popover&quot; data-bs-title=&quot;Danger popover&quot; data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                    Danger popover
                                                &lt;/button&gt;

                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;info-popover&quot; data-bs-title=&quot;Info popover&quot; data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                    Info popover
                                                &lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="disabled">
                                    Disabled Elements <a class="anchor-link" href="#disabled">#</a>
                                </h5>
                                <p class="text-muted">Elements with the <code>disabled</code> attribute
                                    aren’t interactive, meaning users cannot hover or click them to trigger a
                                    popover (or tooltip). As a workaround, you’ll want to trigger the popover from a
                                    wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> and override the
                                    <code>pointer-events</code> on the disabled element.
                                </p>

                                <div class="mb-3">
                                    <span class="d-inline-block" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Disabled popover">
                                        <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                                    </span>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="disable-popover">
                                                &lt;span class=&quot;d-inline-block&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-content=&quot;Disabled popover&quot;&gt;
                                                    &lt;button class=&quot;btn btn-primary&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
                                                &lt;/span&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card body -->
                    </div> <!-- end card -->

                    <div class="col-xl-3">
                        <div class="card docs-nav">
                            <ul class="nav bg-transparent flex-column">
                                <li class="nav-item">
                                    <a href="#live-demo" class="nav-link">Live demo</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#popover-directions" class="nav-link">Popover Directions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#dismiss" class="nav-link">Dismiss on Next Click</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#hover" class="nav-link">Hover</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#custom-popovers" class="nav-link">Custom Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#disabled" class="nav-link">Disabled</a>
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