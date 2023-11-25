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


<div class="tp-dashboard-head">
    <!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 profile-header">
                <div class="profile-pic col-md-2">
                    <?php
                    $VENDOR = new Vendor($_SESSION["id"]);
                    if (empty($VENDOR->profile_picture)) {
                        ?> 
                        <img src="../upload/vendor/vendor.png" class="img img-responsive img-thumbnail" id="profil_pic1">
                        <?php
                    } else {

                        if ($VENDOR->googleID && substr($VENDOR->profile_picture, 0, 5) === "https") {
                            ?>
                            <img src="<?php echo $VENDOR->profile_picture; ?>" class="img img-responsive img-thumbnail" id="profil_pic1">
                            <?php
                        } else {
                            ?>
                            <img src="../upload/vendor/<?php echo $VENDOR->profile_picture; ?>" class="img img-responsive img-thumbnail" id="profil_pic1">
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="profile-info col-md-9">
                    <h1 class="profile-title"><?php echo $VENDOR->name; ?><small></small></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page header -->
<div class="tp-dashboard-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12 dashboard-nav">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="index.php"><i class="fa fa-dashboard db-icon"></i>My Dashboard</a></li>
                    <li><a href="profile.php"><i class="fa fa-user db-icon"></i>My Profile</a></li>
                    <li><a href="venue-listings.php"><i class="fa fa-list db-icon"></i>Venue Listing</a></li>
                    <li><a href="services-listings.php"><i class="fa fa-plus-square db-icon"></i>Services Listing</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>