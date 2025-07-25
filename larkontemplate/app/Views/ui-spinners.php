<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Spinners")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Spinners")) ?>
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
                                <h5 class="card-title mb-1 anchor" id="border_spinner">
                                    Border Spinners<a class="anchor-link" href="#border_spinner">#</a>
                                </h5>
                                <p class="text-muted">
                                    Use the border spinners for a lightweight loading indicator.
                                </p>

                                <div class="mb-3">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="borderSpinner">
                                                    &lt;!-- Border Spinners --&gt;
                                                    &lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="color_spinners">
                                    Color Spinners <a class="anchor-link" href="#color_spinners">#</a>
                                </h5>
                                <p class="text-muted">You can use any of our text color utilities on the standard spinner.</p>

                                <div class="mb-3">
                                    <div class="spinner-border text-primary me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-secondar me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-success me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-info me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-warning me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-danger me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="colorSpinner">
                                                    &lt;!-- Color Spinners --&gt;
                                                    &lt;div class=&quot;spinner-border text-primary me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-border text-secondar me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-border text-success me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-border text-info me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-border text-warning me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-border text-danger me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="growing_spinners">
                                    Growing Spinners <a class="anchor-link" href="#growing_spinners">#</a>
                                </h5>
                                <p class="text-muted">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>

                                <div class="mb-3">
                                    <div class="spinner-grow text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="growingSpinner">
                                                    &lt;!-- Growing Spinners --&gt;
                                                    &lt;div class=&quot;spinner-grow text-primary&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="color_growing">
                                    Color Growing Spinners <a class="anchor-link" href="#color_growing">#</a>
                                </h5>
                                <p class="text-muted">You can use any of our text color utilities on the standard spinner.</p>

                                <div class="mb-3">
                                    <div class="spinner-grow text-primary me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-success me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="colorGrowingSpinner">
                                                    &lt;!-- Color Spinners --&gt;
                                                    &lt;div class=&quot;spinner-grow text-primary me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-grow text-secondary me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-grow text-success me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-grow text-info me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-grow text-warning me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;spinner-grow text-danger me-3&quot; role=&quot;status&quot;&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="alignment">
                                    Alignment <a class="anchor-link" href="#alignment">#</a>
                                </h5>
                                <p class="text-muted">
                                    Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly
                                    where you need them in any situation.
                                </p>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-center border p-2">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
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
                                                <code id="alignment">
                                                    &lt;!-- Alignment Spinners --&gt;
                                                    &lt;div class=&quot;d-flex justify-content-center border p-2&quot;&gt;
                                                        &lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
                                                            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
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
                                <h5 class="card-title mb-1 anchor" id="size">
                                    Size <a class="anchor-link" href="#size">#</a>
                                </h5>
                                <p class="text-muted">
                                    Add <code>.spinner-border-sm</code> and <code>.spinner-border.sm-**</code> to make a smaller spinner
                                    that can quickly be used within other components.
                                </p>

                                <div class="mb-3">
                                    <div class="spinner-border text-primary spinner-border-sm me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-primary spinner-grow-sm me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-primary spinner-border me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-primary spinner-grow me-3" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between bg-light border-top border-bottom py-1 px-3">
                                    <h6 class="text-muted text-uppercase">html</h6>
                                    <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy" data-clipboard-target="#size">Copy</button>
                                </div>

                                <div class="code">
                                    <pre class="language-html">
                                            <code id="size">
                                                &lt;!-- Size Spinners --&gt;
                                                &lt;div class=&quot;spinner-border text-primary spinner-border-sm me-3&quot; role=&quot;status&quot;&gt;
                                                    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;spinner-grow text-primary spinner-grow-sm me-3&quot; role=&quot;status&quot;&gt;
                                                    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;spinner-border text-primary spinner-border me-3&quot; role=&quot;status&quot;&gt;
                                                    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;spinner-grow text-primary spinner-grow me-3&quot; role=&quot;status&quot;&gt;
                                                    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="placement">
                                    Placement <a class="anchor-link" href="#placement">#</a>
                                </h5>
                                <p class="text-muted">
                                    Use <code>flexbox utilities</code>, <code>float utilities</code>, or <code>text alignment</code> utilities to place spinners
                                    exactly where you need them in any situation.
                                </p>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center border p-2">
                                        <strong>Loading...</strong>
                                        <div class="spinner-border text-primary ms-auto" role="status" aria-hidden="true"></div>
                                    </div>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="placement">
                                                    &lt;!-- placement Spinners --&gt;
                                                    &lt;div class=&quot;d-flex align-items-center border p-2&quot;&gt;
                                                        &lt;strong&gt;Loading...&lt;/strong&gt;
                                                        &lt;div class=&quot;spinner-border text-primary ms-auto&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="button_spinner">
                                    Buttons Spinner <a class="anchor-link" href="#button_spinner">#</a>
                                </h5>
                                <p class="text-muted">
                                    Use spinners within buttons to indicate an action is currently processing or taking place.
                                    You may also swap the text out of the spinner element and utilize button text as needed.
                                </p>

                                <div class="mb-3">
                                    <button class="btn btn-primary me-1" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                    <button class="btn btn-primary" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm me-1" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                                <code id="buttonsSpinner">
                                                    &lt;!-- Buttons Spinners --&gt;
                                                    &lt;button class=&quot;btn btn-primary me-1&quot; type=&quot;button&quot; disabled&gt;
                                                        &lt;span class=&quot;spinner-border spinner-border-sm me-1&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        Loading...
                                                    &lt;/button&gt;
                                                    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
                                                        &lt;span class=&quot;spinner-grow spinner-grow-sm me-1&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        Loading...
                                                    &lt;/button&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div>


                    <div class="col-xl-3">
                        <div class="card docs-nav">
                            <ul class="nav bg-transparent flex-column">
                                <li class="nav-item">
                                    <a href="#border_spinner" class="nav-link">Border spinner</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#color_spinners" class="nav-link">Color Spinners</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#growing_spinners" class="nav-link">Growing Spinners</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#color_growing" class="nav-link">Color Growing Spinners</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#alignment" class="nav-link">Alignment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#size" class="nav-link">Size</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#placement" class="nav-link">Placement</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#button_spinner" class="nav-link">Buttons Spinner</a>
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