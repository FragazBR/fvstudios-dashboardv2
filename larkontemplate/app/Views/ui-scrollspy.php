<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Scrollspy")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Scrollspy")) ?>
        <?= $this->include('partials/main-nav') ?>

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card p-3">
                            <div class="mb-3">
                                <nav id="navbar-example2" class="navbar bg-light px-3 mb-3">
                                    <a class="navbar-brand" href="#">Navbar</a>
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#scrollspyHeading1">First</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="scrollspy-example bg-light bg-opacity-50 p-3 rounded-2" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
                                    <h4 id="scrollspyHeading1">First heading</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                                        appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding
                                        some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="scrollspyHeading2">Second heading</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                                        appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding
                                        some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="scrollspyHeading3">Third heading</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                                        appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding
                                        some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="scrollspyHeading4">Fourth heading</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                                        appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding
                                        some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="scrollspyHeading5">Fifth heading</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                                        appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding
                                        some more example copy here to emphasize the scrolling and highlighting.</p>
                                </div>
                            </div>

                            <div class="highlight">
                                <div class="highlight-toolbar">
                                    <small class="text-uppercase">html</small>
                                    <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                </div>

                                <div class="code">
                                    <pre class="language-html">
                                            <code id="heightProgress">
                                                &lt;nav id=&quot;navbar-example2&quot; class=&quot;navbar bg-light px-3 mb-3&quot;&gt;
                                                    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
                                                    &lt;ul class=&quot;nav nav-pills&quot;&gt;
                                                        &lt;li class=&quot;nav-item&quot;&gt;
                                                            &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyHeading1&quot;&gt;First&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;nav-item&quot;&gt;
                                                            &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyHeading2&quot;&gt;Second&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;nav-item dropdown&quot;&gt;
                                                            &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
                                                            &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspyHeading3&quot;&gt;Third&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspyHeading4&quot;&gt;Fourth&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;hr class=&quot;dropdown-divider&quot;&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspyHeading5&quot;&gt;Fifth&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/nav&gt;
                                                &lt;div class=&quot;scrollspy-example bg-light p-3 rounded-2&quot; data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example2&quot; data-bs-root-margin=&quot;0px 0px -40%&quot; data-bs-smooth-scroll=&quot;true&quot; tabindex=&quot;0&quot;&gt;
                                                    &lt;h4 id=&quot;scrollspyHeading1&quot;&gt;First heading&lt;/h4&gt;
                                                    &lt;p&gt;...&lt;/p&gt;
                                                    &lt;h4 id=&quot;scrollspyHeading2&quot;&gt;Second heading&lt;/h4&gt;
                                                    &lt;p&gt;...&lt;/p&gt;
                                                    &lt;h4 id=&quot;scrollspyHeading3&quot;&gt;Third heading&lt;/h4&gt;
                                                    &lt;p&gt;...&lt;/p&gt;
                                                    &lt;h4 id=&quot;scrollspyHeading4&quot;&gt;Fourth heading&lt;/h4&gt;
                                                    &lt;p&gt;...&lt;/p&gt;
                                                    &lt;h4 id=&quot;scrollspyHeading5&quot;&gt;Fifth heading&lt;/h4&gt;
                                                    &lt;p&gt;...&lt;/p&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <!-- end spinners-->

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