<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Cards")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Cards")) ?>
        <?= $this->include('partials/main-nav') ?>

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container -->
            <div class="container">

                <!-- start cards -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-3 mb-xl-0">
                            <img class="card-img-top img-fluid" src="/images/small/img-1.jpg" alt="img-1">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Card title</h5>
                                <p class="card-text text-muted">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content. With supporting text below as
                                    a natural lead-in to additional content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary">Button</a>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="/images/small/img-2.jpg" alt="img-2">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Card title</h5>
                                <p class="card-text text-muted">Some quick example text to build on the card title.</p>
                            </div> <!-- end card body -->
                            <ul class="list-group list-group-flush text-muted">
                                <li class="list-group-item text-muted">Dapibus ac facilisis in</li>
                            </ul>
                            <div class="card-body">
                                <a href="javascript:void(0);" class="card-link text-primary">Card link</a>
                                <a href="javascript:void(0);" class="card-link text-primary">Another link</a>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-3 mb-xl-0">
                            <img class="card-img-top img-fluid" src="/images/small/img-4.jpg" alt="img-4">
                            <div class="card-body">
                                <p class="card-text text-muted">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content. With supporting text below as
                                    a natural lead-in to additional content.
                                </p>
                                <a href="javascript:void(0);" class="btn btn-primary">Button</a>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-3 mb-xl-0">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Card title</h5>
                            </div>
                            <img class="img-fluid" src="/images/small/img-5.jpg" alt="img-5">
                            <div class="card-body">
                                <p class="card-text text-muted">Some quick example text to build on the card title.</p>
                                <a href="javascript:void(0);" class="card-link text-primary">Card link</a>
                                <a href="javascript:void(0);" class="card-link text-primary">Another link</a>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card mb-3 mb-xl-0&quot;&gt;
                                    &lt;img class=&quot;card-img-top img-fluid&quot; src=&quot;/images/small/img-1.jpg&quot; alt=&quot;img-1&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                        &lt;p class=&quot;card-text text-muted&quot;&gt;
                                            Some quick example text to build on the card title and make
                                            up the bulk of the card's content. With supporting text below as
                                            a natural lead-in to additional content.
                                        &lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card body --&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;

                                &lt;div class=&quot;card mb-3&quot;&gt;
                                    &lt;img class=&quot;card-img-top img-fluid&quot; src=&quot;/images/small/img-2.jpg&quot; alt=&quot;img-2&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                        &lt;p class=&quot;card-text text-muted&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
                                    &lt;/div&gt; &lt;!-- end card body --&gt;
                                    &lt;ul class=&quot;list-group list-group-flush text-muted&quot;&gt;
                                        &lt;li class=&quot;list-group-item text-muted&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
                                    &lt;/ul&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;card-link text-primary&quot;&gt;Card link&lt;/a&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;card-link text-primary&quot;&gt;Another link&lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;
                                &lt;div class=&quot;card mb-3 mb-xl-0&quot;&gt;
                                    &lt;img class=&quot;card-img-top img-fluid&quot; src=&quot;/images/small/img-4.jpg&quot; alt=&quot;img-4&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;p class=&quot;card-text text-muted&quot;&gt;
                                            Some quick example text to build on the card title and make
                                            up the bulk of the card's content. With supporting text below as
                                            a natural lead-in to additional content.
                                        &lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card body --&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;

                                &lt;div class=&quot;card mb-3 mb-xl-0&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-0&quot;&gt;Card title&lt;/h5&gt;
                                    &lt;/div&gt;
                                    &lt;img class=&quot;img-fluid&quot; src=&quot;/images/small/img-5.jpg&quot; alt=&quot;img-5&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;p class=&quot;card-text text-muted&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;card-link text-primary&quot;&gt;Card link&lt;/a&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;card-link text-primary&quot;&gt;Another link&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card body --&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;
                            </code>
                        </pre>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card card-body">
                            <h5 class="card-title mb-1">Special title treatment</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-sm-6">
                        <div class="card card-body">
                            <h5 class="card-title mb-1">Special title treatment</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card card-body&quot;&gt;
                                    &lt;h5 class=&quot;card-title mb-1&quot;&gt;Special title treatment&lt;/h5&gt;
                                    &lt;p class=&quot;card-text&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                    &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;

                                &lt;div class=&quot;card card-body&quot;&gt;
                                    &lt;h5 class=&quot;card-title mb-1&quot;&gt;Special title treatment&lt;/h5&gt;
                                    &lt;p class=&quot;card-text&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                    &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;                                                      
                            </code>
                        </pre>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Featured</div>
                            <div class="card-body">
                                <h5 class="card-title mb-1">Special title treatment</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Quote</div>
                            <div class="card-body">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite>Source Title</cite></footer>
                                </blockquote>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Featured</div>
                            <div class="card-body">
                                <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">2 days ago</div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;div class=&quot;card-header&quot;&gt;Featured&lt;/div&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-1&quot;&gt;Special title treatment&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;div class=&quot;card-header&quot;&gt;Quote&lt;/div&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;blockquote&gt;
                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                            &lt;footer&gt;Someone famous in &lt;cite&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
                                        &lt;/blockquote&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;div class=&quot;card-header&quot;&gt;Featured&lt;/div&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card-footer text-muted&quot;&gt;2 days ago&lt;/div&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;                                                          
                            </code>
                        </pre>
                    </div>
                </div>

                <!-- Color Card Start -->
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title mb-3">Card Colored</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-bg-primary">
                            <div class="card-body">
                                <h5 class="card-title text-white  mb-2">Special title treatment</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="javascript: void(0);" class="btn btn-light btn-sm">Button</a>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-4">
                        <div class="card bg-secondary text-white">
                            <div class="card-body">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-4">
                        <div class="card text-bg-success">
                            <div class="card-body">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-4">
                        <div class="card text-bg-info">
                            <div class="card-body">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-4">
                        <div class="card text-bg-warning">
                            <div class="card-body">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-4">
                        <div class="card text-bg-danger">
                            <div class="card-body">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card text-bg-primary&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title text-white  mb-2&quot;&gt;Special title treatment&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-light btn-sm&quot;&gt;Button&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                
                                &lt;div class=&quot;card bg-secondary text-white&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;blockquote&gt;
                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
                                        &lt;/blockquote&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                
                                &lt;div class=&quot;card text-bg-success&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;blockquote&gt;
                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
                                        &lt;/blockquote&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                
                                &lt;div class=&quot;card text-bg-info&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;blockquote&gt;
                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
                                        &lt;/blockquote&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                
                                &lt;div class=&quot;card text-bg-warning&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;blockquote&gt;
                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
                                        &lt;/blockquote&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                
                                &lt;div class=&quot;card text-bg-danger&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;blockquote&gt;
                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
                                        &lt;/blockquote&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;                                                    
                            </code>
                        </pre>
                    </div>
                </div>
                <!-- Color Card End -->

                <!-- Card Border Start -->
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title mb-3">Card Bordered</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-primary border">
                            <div class="card-body">
                                <h5 class="card-title text-primary mb-2">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Button</a>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-4">
                        <div class="card border-secondary border">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Button</a>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-4">
                        <div class="card border-success border">
                            <div class="card-body">
                                <h5 class="card-title mb-2 text-success">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <a href="javascript: void(0);" class="btn btn-success btn-sm">Button</a>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card border-primary border&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title text-primary mb-2&quot;&gt;Special title treatment&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to
                                            additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Button&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                
                                &lt;div class=&quot;card border-secondary border&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Special title treatment&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to
                                            additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-secondary btn-sm&quot;&gt;Button&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;
                                
                                &lt;div class=&quot;card border-success border&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2 text-success&quot;&gt;Special title treatment&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to
                                            additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;btn btn-success btn-sm&quot;&gt;Button&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;                                                 
                            </code>
                        </pre>
                    </div>
                </div>
                <!-- Card Border End -->

                <!-- Horizontal Card Start -->
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title mb-3">Horizontal Card</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/small/img-1.jpg" class="img-fluid rounded-start h-100" alt="img-1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div> <!-- end card-body -->
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <img src="/images/small/img-2.jpg" class="img-fluid rounded-end h-100" alt="img-2">
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;div class=&quot;row g-0&quot;&gt;
                                        &lt;div class=&quot;col-md-4&quot;&gt;
                                            &lt;img src=&quot;/images/small/img-1.jpg&quot; class=&quot;img-fluid rounded-start h-100&quot; alt=&quot;img-1&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-md-8&quot;&gt;
                                            &lt;div class=&quot;card-body&quot;&gt;
                                                &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                                &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                                                &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                            &lt;/div&gt; &lt;!-- end card-body--&gt;
                                        &lt;/div&gt; &lt;!-- end col --&gt;
                                    &lt;/div&gt; &lt;!-- end row--&gt;
                                &lt;/div&gt; &lt;!-- end card--&gt;

                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;div class=&quot;row g-0&quot;&gt;
                                        &lt;div class=&quot;col-md-8&quot;&gt;
                                            &lt;div class=&quot;card-body&quot;&gt;
                                                &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                                &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                                                &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                        &lt;/div&gt; &lt;!-- end col --&gt;
                                        &lt;div class=&quot;col-md-4&quot;&gt;
                                            &lt;img src=&quot;/images/small/img-2.jpg&quot; class=&quot;img-fluid rounded-end h-100&quot; alt=&quot;img-2&quot;&gt;
                                        &lt;/div&gt; &lt;!-- end col --&gt;
                                    &lt;/div&gt; &lt;!-- end row--&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;                                                          
                            </code>
                        </pre>
                    </div>
                </div>
                <!-- Horizontal Card End  -->

                <!-- Stretched Link Start -->

                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title mb-3">Stretched link</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img src="/images/small/img-1.jpg" class="card-img-top" alt="img-1">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Card with stretched link</h5>
                                <a href="javascript:void(0);" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img src="/images/small/img-2.jpg" class="card-img-top" alt="img-2">
                            <div class="card-body">
                                <h5 class="card-title mb-2"><a href="javascript:void(0);" class="text-primary stretched-link">Card with stretched link</a></h5>
                                <p class="card-text">
                                    Some quick example text to build on the card up the bulk of the card's content.
                                </p>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img src="/images/small/img-3.jpg" class="card-img-top" alt="img-3">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Card with stretched link</h5>
                                <a href="javascript:void(0);" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img src="/images/small/img-4.jpg" class="card-img-top" alt="img-4">
                            <div class="card-body">
                                <h5 class="card-title mb-2"><a href="javascript:void(0);" class="stretched-link">Card with stretched link</a></h5>
                                <p class="card-text">
                                    Some quick example text to build on the card up the bulk of the card's content.
                                </p>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img src=&quot;/images/small/img-1.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;img-1&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card with stretched link&lt;/h5&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-primary mt-2 stretched-link&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card-body --&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;
                                
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img src=&quot;/images/small/img-2.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;img-2&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;&lt;a href=&quot;javascript:void(0);&quot; class=&quot;text-primary stretched-link&quot;&gt;Card with stretched link&lt;/a&gt;&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;
                                            Some quick example text to build on the card up the bulk of the card's content.
                                        &lt;/p&gt;
                                    &lt;/div&gt; &lt;!-- end card-body --&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;
                                
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img src=&quot;/images/small/img-3.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;img-3&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card with stretched link&lt;/h5&gt;
                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-primary mt-2 stretched-link&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt; &lt;!-- end card-body --&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;
                                
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img src=&quot;/images/small/img-4.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;img-4&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;&lt;a href=&quot;javascript:void(0);&quot; class=&quot;stretched-link&quot;&gt;Card with stretched link&lt;/a&gt;&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;
                                            Some quick example text to build on the card up the bulk of the card's content.
                                        &lt;/p&gt;
                                    &lt;/div&gt; &lt;!-- end card-body --&gt;
                                &lt;/div&gt; &lt;!-- end card --&gt;                                                             
                            </code>
                        </pre>
                    </div>
                </div>
                <!-- Stretched Link End -->

                <!-- Card Group Start -->
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title mb-3">Card Group</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card-group mb-3">
                            <div class="card d-block">
                                <img class="card-img-top" src="/images/small/img-1.jpg" alt="img-1">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit
                                        longer.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                            <div class="card d-block">
                                <img class="card-img-top" src="/images/small/img-2.jpg" alt="img-2">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                            <div class="card d-block">
                                <img class="card-img-top" src="/images/small/img-3.jpg" alt="img-3">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This card has even longer content
                                        than the first to show that equal height action.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end card-group-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card-group&quot;&gt;
                                    &lt;div class=&quot;card d-block&quot;&gt;
                                        &lt;img class=&quot;card-img-top&quot; src=&quot;/images/small/img-1.jpg&quot; alt=&quot;img-1&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;
                                                &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
                                            &lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card d-block&quot;&gt;
                                        &lt;img class=&quot;card-img-top&quot; src=&quot;/images/small/img-2.jpg&quot; alt=&quot;img-2&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This card has supporting text below as a natural
                                                lead-in to additional content.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;
                                                &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
                                            &lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card d-block&quot;&gt;
                                        &lt;img class=&quot;card-img-top&quot; src=&quot;/images/small/img-3.jpg&quot; alt=&quot;img-3&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This card has even longer content
                                                than the first to show that equal height action.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;
                                                &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
                                            &lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt; &lt;!-- end card-group--&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!-- Card Group End -->

                <!-- Card Decks Start -->
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title mb-3">Card Decks</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="card">
                                    <img src="/images/small/img-4.jpg" class="card-img-top" alt="img-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as
                                            a natural lead-in to additional content. This content is a little
                                            bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="/images/small/img-3.jpg" class="card-img-top" alt="img-3">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as
                                            a natural lead-in to additional content. This content is a little
                                            bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="/images/small/img-2.jpg" class="card-img-top" alt="img-2">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as
                                            a natural lead-in to additional content. This content is a little
                                            bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="card highlight">
                    <div class="highlight-toolbar">
                        <small class="text-uppercase">html</small>
                        <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                    </div>
                    <div class="code">
                        <pre class="language-html">
                            <code id="defaultButtons">
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img src=&quot;/images/small/img-4.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;img-4&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;This is a longer card with supporting text below as
                                            a natural lead-in to additional content. This content is a little
                                            bit longer.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
                                        &lt;/p&gt;
                                    &lt;/div&gt;&lt;!-- end card-body --&gt;
                                &lt;/div&gt;&lt;!-- end card --&gt;

                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img src=&quot;/images/small/img-3.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;img-3&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;This is a longer card with supporting text below as
                                            a natural lead-in to additional content. This content is a little
                                            bit longer.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
                                        &lt;/p&gt;
                                    &lt;/div&gt;&lt;!-- end card-body --&gt;
                                &lt;/div&gt;&lt;!-- end card --&gt;

                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img src=&quot;/images/small/img-2.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;img-2&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h5 class=&quot;card-title mb-2&quot;&gt;Card title&lt;/h5&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;This is a longer card with supporting text below as
                                            a natural lead-in to additional content. This content is a little
                                            bit longer.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
                                        &lt;/p&gt;
                                    &lt;/div&gt;&lt;!-- end card-body --&gt;
                                &lt;/div&gt;&lt;!-- end card --&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <!-- Card Decks End -->

            </div>

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