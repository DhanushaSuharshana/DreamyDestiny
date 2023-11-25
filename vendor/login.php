<?php
include_once(dirname(__FILE__) . '/../class/include.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dreamy Destiny</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template style.css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/fontello.css">
        <!-- Font used in template -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
        <!--font awesome icon -->
        <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="collapse" id="searcharea">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn tp-btn-primary" type="button">Search</button>
                </span> </div>
        </div>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 top-message">
                        <p>Welcome to Wedding Vendor.</p>
                    </div>
                    <div class="col-md-6 top-links">
                        <ul class="listnone">
                            <li><a href="faq.html"> Help </a></li>
                            <li><a href="pricing-plan.html">Pricing</a></li>
                            <li><a href="signup-couple.html" class=" ">I m couple</a></li>
                            <li><a href="signup-vendor.html">Are you vendor?</a></li>
                            <li><a href="login-page.html">Log in</a></li>
                            <li>
                                <a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo">
                        <div class="navbar-brand">
                            <a href="index.html"><img src="images/logo.png" alt="Wedding Vendors" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="navigation" id="navigation">
                            <ul>
                                <li class="active"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html" title="Home" class="animsition-link">Home</a></li>
                                        <li><a href="index-2.html" title="Home v.2" class="animsition-link">Home v.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Listing</a>
                                    <ul>
                                        <li><a href="vendor-listing-row-map.html" title="Home" class="animsition-link">List / Half Map</a></li>
                                        <li><a href="vendor-listing-sidebar.html" title="Home" class="animsition-link">List / Sidebar Left</a></li>
                                        <li><a href="vendor-listing-no-sidebar.html" title="Home" class="animsition-link">List / No Sidebar</a></li>
                                        <li><a href="vendor-listing-top-map.html" title="Home" class="animsition-link">Top Map / List</a></li>
                                        <li><a href="vendor-list-4-colmun.html" title="Home" class="animsition-link">4 Column List</a></li>
                                        <li><a href="vendor-list-3-colmun.html" title="Home" class="animsition-link">3 Column List</a></li>
                                        <li><a href="vendor-list-horizontal.html" title="Home" class="animsition-link">Horizontal List </a></li>
                                        <li><a href="vendor-list-new.html" title="Home" class="animsition-link">List Variations </a></li>
                                        <li><a href="vendor-listing-bubba.html">Bubba Style Listing</a></li>
                                        <li><a href="vendor-listing-ocean.html">Ocean Style Listing</a></li>
                                    </ul>
                                </li>
                                <li><a href="vendor-details.html">Vendor</a>
                                    <ul>
                                        <li><a href="vendor-details.html">Vendor Simple</a></li>
                                        <li><a href="vendor-details-tabbed.html">Vendor Tabbed</a></li>
                                        <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                    </ul>
                                </li>
                                <li><a href="venue-listing.html" title="Home" class="animsition-link">Suppliers</a>
                                    <ul>
                                        <li><a href="venue-listing.html">Venue List</a></li>
                                        <li><a href="photography-listing.html">Photographer List</a></li>
                                        <li><a href="dresses-listing.html">Dresses List</a></li>
                                        <li><a href="florist-listing.html">Florist List</a></li>
                                        <li><a href="videography-listing.html">Videography List</a></li>
                                        <li><a href="cake-listing.html">Cake List</a></li>
                                        <li><a href="music-listing.html">Music List</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Planning Tools</a>
                                    <ul>
                                        <li><a href="planning-to-do.html">To Do List</a></li>
                                        <li><a href="planning-budget.html">Budget Planner</a></li>
                                        <li><a href="couple-landing-page.html">Couple Signup (LP)</a></li>
                                        <li><a href="couple-dashboard.html">Couple Admin</a></li>
                                        <li><a href="dashboard-vendor.html">Vendor Admin</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Features</a>
                                    <ul>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Listing</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="contact-us.html">Contact us</a></li>
                                        <li><a href="pricing-plan.html">Pricing Table</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="404-error.html">404 Error</a></li>
                                        <li><a href="#">Shortcodes</a>
                                            <ul>
                                                <li><a href="shortcode-columns.html">Column</a></li>
                                                <li><a href="shortcode-accordion.html">Accordion</a></li>
                                                <li><a href="shortcode-tabs.html">Tabs</a></li>
                                                <li><a href="shortcode-pagination.html">Paginations</a></li>
                                                <li><a href="shortcode-typography.html">Typography</a></li>
                                                <li><a href="shortcode-accordion.html">Accordion</a></li>
                                                <li><a href="shordcods-alerts.html">Alert</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="wedding-guideline.html">Template Guideline</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Real Weddings</a>
                                    <ul>
                                        <li><a href="real-wedding-listing.html">Listing</a></li>
                                        <li><a href="real-wedding-single.html">Real Wedding Single</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-page-head">
            <!-- page header -->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="page-header text-center">
                            <div class="icon-circle">
                                <i class="icon icon-size-60 icon-curtains icon-white"></i>
                            </div>
                            <h1>Are you Supplier - Start Business</h1>
                            <p>Wedding Vendor works with thousands of wedding vendors Sri Lanka.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Sing Up Vendor</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="well-box">
                            <form method="post" id="register"> 
                                <h2>Vendor Registration</h2>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="name">User Name<span class="required">*</span></label>
                                    <input id="name" type="text" name="name" placeholder="Enter Your Name" autocomplete="off" type="text" class="form-control input-md">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                    <input id="email" type="text" name="email" placeholder="Enter Your Email" autocomplete="off" class="form-control input-md">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Confirm E-mail<span class="required">*</span></label>
                                    <input id="cnfemail" type="text" name="cnfemail" placeholder="Confirm Email" autocomplete="off" class="form-control input-md">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Contact Number<span class="required">*</span></label>
                                    <input id="contact_no" type="text" placeholder="Contact Number" name="contact_number" autocomplete="off" class="form-control input-md">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Password<span class="required">*</span></label>
                                    <input id="password" name="password" placeholder="Enter Password" autocomplete="off" type="password" class="form-control input-md">
                                </div>
                                <div class="form-group">
                                    <div class="error-msg">
                                        <div class="text-danger" id="message"></div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group">

                                    <input type="hidden" name="save" value="save"/>
                                    <button name="submit" id="btnSubmit" class="btn btn-primary btn-lg">create an account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="well-box">

                            <?php
                            if (isset($_GET['message'])) {

                                $MESSAGE = New Message($_GET['message']);
                                ?>
                                <div class="alert alert-<?php echo $MESSAGE->status; ?>" role = "alert">
                                    <?php echo $MESSAGE->description; ?>
                                </div>
                                <?php
                            }
                            ?>
                           

                            <h3>Vendor Login</h3>
                            <form action="post-and-get/vendor.php" method="POST">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="email">E-mail</label>
                                    <input id="email" type="email" name="useremail" placeholder="E-Mail" class="form-control input-md" required>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input id="password" name="password" type="text" placeholder="Password" class="form-control input-md" required>
                                </div>
                                <!-- Button -->
                                <div class="form-group">
                                    <input class="btn btn-sm member-login-btn" name="login" value="Login"type="submit">
                                    <a href="forget-password.html" class="pull-right"> <small>Forgot Password ?</small></a>
                                </div>
                            </form>

                            <div class="well-box social-login text-center">

                                <a href="#" class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a href="#" class="btn google-btn"><i class="fa fa-google-plus-square"></i>Google+</a> </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <!-- Footer -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ft-aboutus">
                        <h2>Wedding.Vendor</h2>
                        <p>At Wedding Vendor our purpose is to help people find great online network connecting wedding suppliers and wedding couples who use those suppliers. <a href="#">Start Find Vendor!</a></p>
                        <a href="#" class="btn btn-default">Find a Vendor</a> </div>
                    <div class="col-md-3 ft-link">
                        <h2>Useful links</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 newsletter">
                        <h2>Subscribe for Newsletter</h2>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter E-Mail Address" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Submit</button>
                                </span> </div>
                            <!-- /input-group -->
                            <!-- /.col-lg-6 -->
                        </form>
                        <div class="social-icon">
                            <h2>Be Social &amp; Stay Connected</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Footer -->
        <div class="tiny-footer">
            <!-- Tiny footer -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">Copyright © 2014. All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>

    <script src="js/add-member.js" type="text/javascript"></script>
    <script src="plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
</body>
</html>