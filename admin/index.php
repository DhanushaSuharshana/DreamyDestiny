<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>CMS : Sri Lanka Youth Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="NYSC" name="author" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body  >

        <!-- Begin page -->
        <div  >

            <?php
            include './top-header.php';
            ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include './navigation.php'; ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Dashboard</h4>

<!--                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Vertical</a></li>
                                            <li class="breadcrumb-item active">Dark Sidebar</li>
                                        </ol>
                                    </div>-->

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row pt-3">
                            <div class="col-xl-4">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <p class="text-white font-size-18">You can manage the <b>Course</b> section from this CMS  <i class="mdi mdi-arrow-right"></i></p>
                                                <div class="mt-4">
                                                    <a href="manage-courses.php" class="btn btn-success waves-effect waves-light">Manage Course</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card--> 
                            </div> <!-- end Col -->

                            <div class="col-xl-4">
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <p class="text-white font-size-18">You can manage the <b>Centers</b> from this CMS  <i class="mdi mdi-arrow-right"></i></p>
                                                <div class="mt-4">
                                                    <a href="manage-center.php" class="btn btn-success waves-effect waves-light">Manage Centers</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card--> 
                            </div> <!-- end Col -->

                            <div class="col-xl-4">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <p class="text-white font-size-18">You can manage the <b>Events</b> section from this CMS  <i class="mdi mdi-arrow-right"></i></p>
                                                <div class="mt-4">
                                                    <a href="manage-applications.php" class="btn btn-info  waves-effect waves-light">Manage Applications</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <img src="manage-event.php" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card--> 
                            </div> <!-- end Col -->
                        </div> 
                        <?php
                        if ($_SESSION['type'] == 1) {
                            ?>
                            <div class="row pt-3">
                                <div class="col-lg-4">
                                    <div class="card card-body">
                                        <h4 class="card-title ">Manage Advertisements</h4>
                                        <p class="card-text">You can add edit and delete the advertisement by this section..</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Advertisement</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 ">
                                    <div class="card card-body text-center">
                                        <h4 class="card-title ">Manage Divisions</h4>
                                        <p class="card-text">You can add edit and delete the divisions by this section..</p>
                                        <a href="manage-devision.php" class="btn btn-primary waves-effect waves-light">Divisions</a>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-body text-end">
                                        <h4 class="card-title ">Manage Gallery</h4>
                                        <p class="card-text">You can add edit and delete the gallary images by this section..</p>
                                        <a href="create-photo-album.php" class="btn btn-primary waves-effect waves-light">Photo-Albums</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <?php include './footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>