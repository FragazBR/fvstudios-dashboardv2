<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Swiper Slider")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Swiper Slider")) ?>
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
                                    Overview <a class="btn btn-sm btn-outline-success rounded-2 float-end" href="https://swiperjs.com/get-started" target="_blank"> Official Website </a>
                                </h5>
                                <p class="text-muted mb-3">Swiper is the most modern slider with hardware accelerated transitions and amazing native behavior.</p>

                                <h5 class="mt-2">Usage</h5>
                                <p class="mb-0">Swiper Slider's CSS and Javascript files are bundled in the <code>vender.min.css</code> and <code>vendor.js</code> and globally included in all pages.</p>
                            </div><!-- end card-body -->
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="default">
                                    Default Swiper <a class="anchor-link" href="#default">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="default"</code> attribute to set a default swiper.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <!-- Default Swiper -->
                                        <div class="swiper rounded" data-swiper="default">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-1.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-2.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid" />
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
                                                <code>
                                                    &lt;!-- Default Swiper --&gt;
                                                    &lt;div class=&quot;swiper rounded&quot; data-swiper=&quot;default&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-1.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-2.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
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
                                <h5 class="card-title mb-1 anchor" id="navigation">
                                    Navigation & Pagination Swiper <a class="anchor-link" href="#navigation">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="navigation"</code> attribute to set a swiper with navigation and pagination.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Navigation & Pagination Swiper -->
                                        <div class="swiper rounded" data-swiper="navigation">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-6.jpg" alt="" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
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
                                                    &lt;!-- Navigation &amp; Pagination Swiper --&gt;
                                                    &lt;div class=&quot;swiper rounded&quot; data-swiper=&quot;navigation&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-6.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
                                                        &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="pagination-dynamic">
                                    Pagination Dynamic Swiper <a class="anchor-link" href="#pagination-dynamic">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="dynamic"</code> attribute to set a swiper with dynamic and pagination.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Pagination Dynamic Swiper -->
                                        <div class="swiper rounded" data-swiper="dynamic">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-6.jpg" alt="" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="swiper-pagination dynamic-pagination"></div>
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
                                                    &lt;!-- Pagination Dynamic Swiper --&gt;
                                                    &lt;div class=&quot;swiper rounded&quot; data-swiper=&quot;dynamic&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-6.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination dynamic-pagination&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="effect-fade">
                                    Effect Fade Swiper <a class="anchor-link" href="#effect-fade">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="effect-fade"</code> attribute to set a swiper with fade effect.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Effect Fade Swiper -->
                                        <div class="swiper rounded" data-swiper="effect-fade">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
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
                                                    &lt;!-- Effect Fade Swiper --&gt;
                                                    &lt;div class=&quot;swiper rounded&quot; data-swiper=&quot;effect-fade&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="effect-creative">
                                    Effect Creative Swiper <a class="anchor-link" href="#effect-creative">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="creative"</code> attribute to set a swiper with creative custom effect.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Effect Creative Swiper -->
                                        <div class="swiper" data-swiper="creative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
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
                                                    &lt;!-- Effect Creative Swiper --&gt;
                                                    &lt;div class=&quot;swiper&quot; data-swiper=&quot;creative&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="effect-flip">
                                    Effect Flip Swiper <a class="anchor-link" href="#effect-flip">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="flip"</code> attribute to set a swiper with flip custom effect.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Effect Flip Swiper -->
                                        <div class="swiper" data-swiper="flip">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
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
                                                    &lt;!-- Effect Flip Swiper --&gt;
                                                    &lt;div class=&quot;swiper&quot; data-swiper=&quot;flip&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="scrollbar">
                                    Scrollbar Swiper <a class="anchor-link" href="#scrollbar">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="scrollbar"</code> attribute to set a swiper with scrollbar pagination.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Scrollbar Swiper Swiper -->
                                        <div class="swiper" data-swiper="scrollbar">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-scrollbar"></div>
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
                                                    &lt;!-- Scrollbar Swiper Swiper --&gt;
                                                    &lt;div class=&quot;swiper&quot; data-swiper=&quot;scrollbar&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
                                                        &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
                                                        &lt;div class=&quot;swiper-scrollbar&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="vertical">
                                    Vertical Swiper <a class="anchor-link" href="#vertical">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="vertical"</code> attribute to set a swiper with vertical pagination.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Vertical Swiper -->
                                        <div class="swiper" data-swiper="vertical" style="height: 320px;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
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
                                                    &lt;!-- Vertical Swiper --&gt;
                                                    &lt;div class=&quot;swiper&quot; data-swiper=&quot;vertical&quot; style=&quot;height: 320px;&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="mousewheel">
                                    Mousewheel Control Swiper <a class="anchor-link" href="#mousewheel">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="mousewheel"</code> attribute to set a swiper with mousewheel scroll.</p>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">

                                        <!-- Mousewheels Swiper -->
                                        <div class="swiper rounded" data-swiper="mousewheel" style="height: 324px;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
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
                                                    &lt;!-- Mousewheels Swiper --&gt;
                                                    &lt;div class=&quot;swiper rounded&quot; data-swiper=&quot;mousewheel&quot; style=&quot;height: 324px;&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1 anchor" id="responsive">
                                    Responsive Breakpoints Swiper <a class="anchor-link" href="#overview">#</a>
                                </h5>
                                <p class="text-muted">Use <code>data-swiper="responsive"</code> attribute to set a responsive swiper.</p>
                                <div class="mb-3">
                                    <!-- Responsive Breakpoints Swiper -->
                                    <div class="swiper rounded gallery-light pb-4" data-swiper="responsive">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/images/small/img-1.jpg" alt="" class="img-fluid rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/small/img-2.jpg" alt="" class="img-fluid rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/small/img-6.jpg" alt="" class="img-fluid rounded" />
                                            </div>
                                        </div>
                                        <div class="swiper-pagination swiper-pagination-dark"></div>
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
                                                    &lt;!-- Responsive Breakpoints Swiper --&gt;
                                                    &lt;div class=&quot;swiper rounded gallery-light pb-4&quot; data-swiper=&quot;responsive&quot;&gt;
                                                        &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-1.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-2.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-3.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-4.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-5.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;swiper-slide&quot;&gt;
                                                                &lt;img src=&quot;/images/small/img-6.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid rounded&quot; /&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;swiper-pagination swiper-pagination-dark&quot;&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                    </div>
                                </div>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-3">
                        <div class="card docs-nav">
                            <ul class="nav bg-transparent flex-column">
                                <li class="nav-item">
                                    <a href="#overview" class="nav-link">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#default" class="nav-link">Default Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#navigation" class="nav-link">Navigation & Pagination Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pagination-dynamic" class="nav-link">Pagination Dynamic Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#effect-fade" class="nav-link">Effect Fade Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#effect-creative" class="nav-link">Effect Creative Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#effect-flip" class="nav-link">Effect Flip Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#scrollbar" class="nav-link">Scrollbar Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#vertical" class="nav-link">Vertical Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#mousewheel" class="nav-link">Mousewheel Control Swiper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#responsive" class="nav-link">Responsive Breakpoints Swiper</a>
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