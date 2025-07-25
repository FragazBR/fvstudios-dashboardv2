<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Apex Pie Charts")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Pie Charts")) ?>
        <?= $this->include('partials/main-nav') ?>

        <!-- ==================================================== -->
        <!-- Start Page Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Content-->
            <div class="container">

                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title anchor mb-1" id="overview">
                                    Overview
                                </h5>
                                <p>Apexcharts's CSS and Javascript files are bundled in the <code>vender.min.css</code> and <code>vendor.js</code> and globally included in all pages.</p>

                                <p class="mb-0"><span class="fw-medium">Find the JS file for the following chart at:</span> <code> /js/components/apexchart-pie.js</code></p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3  anchor" id="simple_pie">Simple Pie Chart</h4>
                                <div dir="ltr">
                                    <div id="simple-pie" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3  anchor" id="simple_donut">Simple Donut Chart</h4>
                                <div dir="ltr">
                                    <div id="simple-donut" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="monochrome">Monochrome Pie Chart</h4>
                                <div dir="ltr">
                                    <div id="monochrome-pie" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="gradient">Gradient Donut Chart</h4>
                                <div dir="ltr">
                                    <div id="gradient-donut" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="patterned">Patterned Donut Chart</h4>
                                <div dir="ltr">
                                    <div id="patterned-donut" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="image">Pie Chart with Image fill</h4>
                                <div dir="ltr">
                                    <div id="image-pie" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="update">Donut Update</h4>
                                <div dir="ltr">
                                    <div id="update-donut" class="apex-charts"></div>
                                </div>

                                <div class="text-center mt-2">
                                    <button class="btn btn-sm btn-primary" id="randomize">RANDOMIZE</button>
                                    <button class="btn btn-sm btn-primary" id="add">ADD</button>
                                    <button class="btn btn-sm btn-primary" id="remove">REMOVE</button>
                                    <button class="btn btn-sm btn-primary" id="reset">RESET</button>
                                </div>

                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-xl-3">
                        <div class="card docs-nav">
                            <ul class="nav bg-transparent flex-column">
                                <li class="nav-item">
                                    <a href="#overview" class="nav-link">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#simple_pie" class="nav-link">Simple Pie Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#simple_donut" class="nav-link">Simple Donut Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#monochrome" class="nav-link">Monochrome Pie Area</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#gradient" class="nav-link">Gradient Donut Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#patterned" class="nav-link">Patterned Donut Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#image" class="nav-link">Pie Chart with Image fill</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#update" class="nav-link">Donut Update</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- container -->

            <?= $this->include("partials/footer") ?>

        </div>
        <!-- ==================================================== -->
        <!-- End Page content -->
        <!-- ==================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include("partials/vendor-scripts") ?>

    <!-- Apex Chart Pie Demo js -->
    <script src="/js/components/apexchart-pie.js"></script>

</body>

</html>