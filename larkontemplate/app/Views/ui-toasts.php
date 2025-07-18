<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Toasts")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Toasts")) ?>
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
                                <h5 class="card-title mb-1 anchor" id="basic_examples">
                                    Basic Examples<a class="anchor-link" href="#basic_examples">#</a>
                                </h5>
                                <p class="text-muted">
                                    Toasts are as flexible as you need and have very little required markup. At a minimum, we require a
                                    single element to contain your “toasted” content and strongly encourage a dismiss button.
                                </p>

                                <div class="mb-3">
                                    <div class="toast fade d-block opacity-100" role="alert" aria-live="assertive" aria-atomic="true" data-bs-toggle="toast">
                                        <div class="toast-header d-block">
                                            <div class="float-end">
                                                <small>11 mins ago</small>
                                                <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="auth-logo">
                                                <img class="logo-dark" src="/images/logo-dark.png" alt="logo-dark" height="18" />
                                                <img class="logo-light" src="/images/logo-light.png" alt="logo-light" height="18" />
                                            </div>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
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
                                            <code>
                                                &lt;!-- Basic Toast --&gt;
                                                &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; 
                                                    data-bs-toggle=&quot;toast&quot;&gt;
                                                    &lt;div class=&quot;toast-header d-block&quot;&gt;
                                                        &lt;div class=&quot;float-end&quot;&gt;
                                                            &lt;small&gt;11 mins ago&lt;/small&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; 
                                                                aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;auth-logo&quot;&gt;
                                                            &lt;img class=&quot;logo-dark&quot; src=&quot;assets/images/logo-dark.png&quot; 
                                                                alt=&quot;logo-dark&quot; height=&quot;18&quot; /&gt;
                                                            &lt;img class=&quot;logo-light&quot; src=&quot;assets/images/logo-light.png&quot; 
                                                                alt=&quot;logo-light&quot; height=&quot;18&quot; /&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;toast-body&quot;&gt;
                                                        Hello, world! This is a toast message.
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
                                <h5 class="card-title mb-1 anchor" id="live_example">
                                    Live example<a class="anchor-link" href="#live_example">#</a>
                                </h5>
                                <p class="text-muted">Click the button below to show a toast (positioned with our utilities in the lower right corner) that has been hidden by default.</p>

                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary" id="liveToastDefaultBtn">Show live toast</button>

                                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                        <div id="liveToastDefault" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <div class="auth-logo me-auto">
                                                    <img class="logo-dark" src="/images/logo-dark.png" alt="logo-dark" height="18" />
                                                    <img class="logo-light" src="/images/logo-light.png" alt="logo-light" height="18" />
                                                </div>
                                                <small>11 mins ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
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
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveToastDefaultBtn&quot;&gt;Show live toast&lt;/button&gt;

                                                &lt;div class=&quot;toast-container position-fixed bottom-0 end-0 p-3&quot;&gt;
                                                    &lt;div id=&quot;liveToastDefault&quot; class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-header&quot;&gt;
                                                            &lt;div class=&quot;auth-logo me-auto&quot;&gt;
                                                                &lt;img class=&quot;logo-dark&quot; src=&quot;assets/images/logo-dark.png&quot; alt=&quot;logo-dark&quot; height=&quot;18&quot; /&gt;
                                                                &lt;img class=&quot;logo-light&quot; src=&quot;assets/images/logo-light.png&quot; alt=&quot;logo-light&quot; height=&quot;18&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;small&gt;11 mins ago&lt;/small&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
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
                                <h5 class="card-title mb-1 anchor" id="default_buttons">
                                    Default Buttons<a class="anchor-link" href="#default_buttons">#</a>
                                </h5>
                                <p class="text-muted">
                                    Toasts are as flexible as you need and have very little required markup. At a minimum, we require a
                                    single element to contain your “toasted” content and strongly encourage a dismiss button.
                                </p>

                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
                                    <button type="button" class="btn btn-primary" id="liveToastBtn2">Show live toast</button>


                                    <div class="toast-container position-fixed end-0 top-0 p-3">
                                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <div class="auth-logo me-auto">
                                                    <img class="logo-dark" src="/images/logo-dark.png" alt="logo-dark" height="18" />
                                                    <img class="logo-light" src="/images/logo-light.png" alt="logo-light" height="18" />
                                                </div>
                                                <small class="text-muted">just now</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                See? Just like this.
                                            </div>
                                        </div>

                                        <div id="liveToast2" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <div class="auth-logo me-auto">
                                                    <img class="logo-dark" src="/images/logo-dark.png" alt="logo-dark" height="18" />
                                                    <img class="logo-light" src="/images/logo-light.png" alt="logo-light" height="18" />
                                                </div>
                                                <small class="text-muted">2 seconds ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Heads up, toasts will stack automatically
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
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveToastBtn&quot;&gt;Show live toast&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveToastBtn2&quot;&gt;Show live toast&lt;/button&gt;

                                                &lt;div class=&quot;toast-container position-fixed end-0 top-0 p-3&quot;&gt;
                                                    &lt;div id=&quot;liveToast&quot; class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-header&quot;&gt;
                                                            &lt;div class=&quot;auth-logo me-auto&quot;&gt;
                                                                &lt;img class=&quot;logo-dark&quot; src=&quot;assets/images/logo-dark.png&quot; alt=&quot;logo-dark&quot; height=&quot;18&quot; /&gt;
                                                                &lt;img class=&quot;logo-light&quot; src=&quot;assets/images/logo-light.png&quot; alt=&quot;logo-light&quot; height=&quot;18&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;small class=&quot;text-muted&quot;&gt;just now&lt;/small&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            See? Just like this.
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div id=&quot;liveToast2&quot; class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-header&quot;&gt;
                                                            &lt;div class=&quot;auth-logo me-auto&quot;&gt;
                                                                &lt;img class=&quot;logo-dark&quot; src=&quot;assets/images/logo-dark.png&quot; alt=&quot;logo-dark&quot; height=&quot;18&quot; /&gt;
                                                                &lt;img class=&quot;logo-light&quot; src=&quot;assets/images/logo-light.png&quot; alt=&quot;logo-light&quot; height=&quot;18&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;small class=&quot;text-muted&quot;&gt;2 seconds ago&lt;/small&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Heads up, toasts will stack automatically
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
                                <h5 class="card-title mb-1 anchor" id="custom_content">
                                    Custom Content<a class="anchor-link" href="#custom_content">#</a>
                                </h5>
                                <p class="text-muted">
                                    Alternatively, you can also add additional controls and components to toasts.
                                </p>


                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="toast fade show align-items-center mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="d-flex">
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="toast fade show align-items-center text-bg-primary mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="d-flex">
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="toast fade show mb-3 mb-md-0" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                    <div class="mt-2 pt-2 border-top">
                                                        <button type="button" class="btn btn-primary btn-sm me-1">Take action</button>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="toast fade show text-bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                    <div class="mt-2 pt-2 border-top">
                                                        <button type="button" class="btn btn-light btn-sm me-1">Take action</button>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                                    </div>
                                                </div>
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
                                            <code id="outlinetButtons">
                                                &lt;div class=&quot;toast fade align-items-center&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                    &lt;div class=&quot;d-flex&quot;&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                        &lt;/div&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;toast fade align-items-center text-bg-primary&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                    &lt;div class=&quot;d-flex&quot;&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                        &lt;/div&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;toast fade&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                    &lt;div class=&quot;toast-body&quot;&gt;
                                                        Hello, world! This is a toast message.
                                                        &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm me-1&quot;&gt;Take action&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;toast fade text-bg-primary&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                    &lt;div class=&quot;toast-body&quot;&gt;
                                                        Hello, world! This is a toast message.
                                                        &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-sm me-1&quot;&gt;Take action&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
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
                                <h5 class="card-title mb-1 anchor" id="pranscluentPlacement">
                                    Transcluent<a class="anchor-link" href="#pranscluentPlacement">#</a>
                                </h5>
                                <p class="text-muted">
                                    Toasts are slightly translucent, too, so they blend over whatever they might appear over.
                                    For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the elements under a toast.
                                </p>


                                <div class="mb-3">
                                    <div class="p-3 bg-light">
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-toggle="toast">
                                            <div class="toast-header d-block">
                                                <div class="float-end">
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="auth-logo">
                                                    <img class="logo-dark me-1" src="/images/logo-dark.png" alt="logo-dark" height="18" />
                                                    <img class="logo-light" src="/images/logo-light.png" alt="logo-light" height="18" />
                                                </div>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
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
                                            <code id="outlinetButtons">
                                                &lt;div class=&quot;toast fade&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-toggle=&quot;toast&quot;&gt;
                                                    &lt;div class=&quot;toast-header d-block&quot;&gt;
                                                        &lt;div class=&quot;float-end&quot;&gt;
                                                            &lt;small&gt;11 mins ago&lt;/small&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;auth-logo&quot;&gt;
                                                            &lt;img class=&quot;logo-dark me-1&quot; src=&quot;assets/images/logo-dark.png&quot; alt=&quot;logo-dark&quot; height=&quot;18&quot; /&gt;
                                                            &lt;img class=&quot;logo-light&quot; src=&quot;assets/images/logo-light.png&quot; alt=&quot;logo-light&quot; height=&quot;18&quot; /&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;toast-body&quot;&gt;
                                                        Hello, world! This is a toast message.
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
                                <h5 class="card-title mb-1 anchor" id="placement">
                                    Placement<a class="anchor-link" href="#placement">#</a>
                                </h5>
                                <p class="text-muted">
                                    Place toasts with custom CSS as you need them. The top right is often used for notifications,
                                    as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles
                                    right on the <code>.toast.</code>
                                </p>


                                <div class="mb-3">

                                    <div aria-live="polite" aria-atomic="true" class=" bg-light position-relative" style="min-height: 350px;">
                                        <div class="toast-container position-absolute p-3" id="toastPlacement">
                                            <div class="toast show mb-2">
                                                <div class="toast-header d-block">
                                                    <div class="float-end">
                                                        <small>11 mins ago</small>
                                                        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                    <div class="auth-logo">
                                                        <img class="logo-dark me-1" src="/images/logo-dark.png" alt="logo-dark" height="18" />
                                                        <img class="logo-light" src="/images/logo-light.png" alt="logo-light" height="18" />
                                                    </div>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form>
                                        <div class="my-3">
                                            <label for="selectToastPlacement" class="form-label">Toast placement</label>
                                            <select class="form-select mt-2" data-choices id="selectToastPlacement">
                                                <option value="" selected>Select a position...</option>
                                                <option value="top-0 start-0">Top left (<code class="text-danger">.top-0 .start-0</code>)</option>
                                                <option value="top-0 start-50 translate-middle-x">Top center</option>
                                                <option value="top-0 end-0">Top right</option>
                                                <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                                <option value="top-50 start-50 translate-middle">Middle center</option>
                                                <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                                <option value="bottom-0 start-0">Bottom left</option>
                                                <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                                <option value="bottom-0 end-0">Bottom right</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="highlight">
                                    <div class="highlight-toolbar">
                                        <small class="text-uppercase">html</small>
                                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    </div>

                                    <div class="code">
                                        <pre class="language-html">
                                            <code id="outlinetButtons">
                                                &lt;form&gt;
                                                    &lt;div class=&quot;mb-3&quot;&gt;
                                                        &lt;label for=&quot;selectToastPlacement&quot; class=&quot;form-label&quot;&gt;Toast placement&lt;/label&gt;
                                                        &lt;select class=&quot;form-select mt-2&quot; data-choices id=&quot;selectToastPlacement&quot;&gt;
                                                            &lt;option value=&quot;&quot; selected&gt;Select a position...&lt;/option&gt;
                                                            &lt;option value=&quot;top-0 start-0&quot;&gt;Top left (&lt;code class=&quot;text-danger&quot;&gt;.top-0 .start-0&lt;/code&gt;)&lt;/option&gt;
                                                            &lt;option value=&quot;top-0 start-50 translate-middle-x&quot;&gt;Top center&lt;/option&gt;
                                                            &lt;option value=&quot;top-0 end-0&quot;&gt;Top right&lt;/option&gt;
                                                            &lt;option value=&quot;top-50 start-0 translate-middle-y&quot;&gt;Middle left&lt;/option&gt;
                                                            &lt;option value=&quot;top-50 start-50 translate-middle&quot;&gt;Middle center&lt;/option&gt;
                                                            &lt;option value=&quot;top-50 end-0 translate-middle-y&quot;&gt;Middle right&lt;/option&gt;
                                                            &lt;option value=&quot;bottom-0 start-0&quot;&gt;Bottom left&lt;/option&gt;
                                                            &lt;option value=&quot;bottom-0 start-50 translate-middle-x&quot;&gt;Bottom center&lt;/option&gt;
                                                            &lt;option value=&quot;bottom-0 end-0&quot;&gt;Bottom right&lt;/option&gt;
                                                        &lt;/select&gt;
                                                    &lt;/div&gt;
                                                &lt;/form&gt;
                                                &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot; bg-light position-relative&quot; style=&quot;min-height: 350px;&quot;&gt;
                                                    &lt;div class=&quot;toast-container position-absolute p-3&quot; id=&quot;toastPlacement&quot;&gt;
                                                        &lt;div class=&quot;toast show mb-2&quot;&gt;
                                                            &lt;div class=&quot;toast-header d-block&quot;&gt;
                                                                &lt;div class=&quot;float-end&quot;&gt;
                                                                    &lt;small&gt;11 mins ago&lt;/small&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;auth-logo&quot;&gt;
                                                                    &lt;img class=&quot;logo-dark me-1&quot; src=&quot;assets/images/logo-dark.png&quot; alt=&quot;logo-dark&quot; height=&quot;18&quot; /&gt;
                                                                    &lt;img class=&quot;logo-light&quot; src=&quot;assets/images/logo-light.png&quot; alt=&quot;logo-light&quot; height=&quot;18&quot; /&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;toast-body&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
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
                            <div class="">
                                <div class="">
                                    <ul class="nav bg-transparent flex-column">
                                        <li class="nav-item">
                                            <a href="#basic_examples" class="nav-link">Basic Examples</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#live_example" class="nav-link">Live example</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#default_buttons" class="nav-link">Default Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#custom_content" class="nav-link">Custom Content</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#transcluent" class="nav-link">Transcluent</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#placement" class="nav-link">Placement</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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

<script>
    // Default Example
    const toastDefaultTrigger = document.getElementById('liveToastDefaultBtn')
    const toastDefaultLiveExample = document.getElementById('liveToastDefault')
    if (toastDefaultTrigger) {
        toastDefaultTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastDefaultLiveExample)

            toast.show()
        })
    }

    // Stacking Example
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
    }

    const toastTrigger2 = document.getElementById('liveToastBtn2')
    const toastLiveExample2 = document.getElementById('liveToast2')
    if (toastTrigger2) {
        toastTrigger2.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample2)
            toast.show()
        })
    }
</script>