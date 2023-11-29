<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$VENDOR = new Vendor($_SESSION['id']);

$VENUE = new Venue(NULL);
$venues = $VENUE->getVenueByVendorId($_SESSION['id']);
$VENUE_PHOTO = new VenuePhoto(NULL);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Venue Listings</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template style.css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/flaticon.html">
        <!-- Font used in template -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--font awesome icon -->

        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <?php
        include './top-bar.php';
        ?> 

        <?php
        include './header.php';
        ?> 

        <?php
        include './dashboard-head.php';
        ?> 


        <div class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard-page-head">

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

                            <div class="page-header">
                                <h1>My Listings</h1>
                            </div>


                            <div class="venue-details">
                             
                                    <div class="st-tabs">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#myListing" title="Gallery" aria-controls="myListing" role="tab" data-toggle="tab"> <i class="fa fa-map-marker"></i><span class="tab-title"> Venue Listing</span></a>
                                            </li>
                                            <li role="presentation"> <a href="#about" title="about info" aria-controls="about" role="tab" data-toggle="tab"><i class="fa fa-list"></i> <span class="tab-title"> Services Listings</span> </a> </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <!-- tab content start-->
                                            <div role="tabpanel" class="tab-pane fade in active" id="myListing">
                                                <div class="row">
                                                    <?php
                                                    foreach ($venues as $key => $venue) {
                                                        $type = new VenueType($venue['type']);
                                                        $city = new City($venue['city']);
                                                        ?>
                                                        <div class="col-md-4">
                                                            <div class="vendor-list-block mb30">
                                                                <!-- vendor list block -->
                                                                <div class="vendor-img">
                                                                    <?php
                                                                    if (count($VENUE_PHOTO) > 0) {
                                                                        foreach ($VENUE_PHOTO->getVenuePhotosById($venue['id']) as $key => $venue_p) {
                                                                            if ($key == 1) {
                                                                                break;
                                                                            }
                                                                            ?>
                                                                            <img src="" alt="" class="img-responsive">
                                                                            <a href="#"><img src="../upload/venue/<?php echo $venue_p['image_name']; ?>" alt="wedding venue" class="img-responsive"></a>

                                                                            <?php
                                                                        }
                                                                    } else {
                                                                        ?> 
                                                                        <b style="padding-left: 15px;">No Venue Image.</b> 
                                                                    <?php } ?>

                                                                    <div class="category-badge"><a href="#" class="category-link"><?php echo substr($type->name, 0, 30); ?></a></div>

                                                                    <div class="favorite-action"> 
                                                                        <div class="fav-icon">
                                                                            <div class="dropdown">
                                                                                <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                                                                <div class="dropdown-content text-left">
                                                                                    <a href="edit-venue-listing.php?id=<?php echo $venue['id']; ?>"><i class="hover-menu-icon fa fa-pencil"></i>Edit</a>
                                                                                    <a href="add-venue-listing-photo.php?id=<?php echo $venue['id']; ?>"><i class="hover-menu-icon fa fa-photo"></i>Manage Photos</a>
                                                                                    <a href="venue-facilities.php?id=<?php echo $venue['id']; ?>"><i class="hover-menu-icon fa fa-check-square"></i>Manage Facilities</a>
                                                                                    <a href="venue-packages.php?id=<?php echo $venue['id']; ?>"><i class="hover-menu-icon fa fa-bed"></i>Manage Packages</a>
                                                                                    <a href="#" class="menu-hover-delete-font delete-accommodation" data-id="<?php echo $venue['id']; ?>"><i class="hover-menu-icon fa fa-trash-o"></i>Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                                <div class="vendor-detail">
                                                                    <!-- vendor details -->
                                                                    <div class="caption">
                                                                        <h2><a href="#" class="title"><?php echo $venue['name']; ?></a></h2>
                                                                        <div class="vendor-meta"> <span class="location"> <i class="fa fa-map-marker map-icon"></i><?php echo substr($city->name, 0, 30); ?></span> <span class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.vendor details -->
                                                            </div>
                                                            <!-- /.vendor list block -->
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="about">
                                                <div class="venue-details">
                                                    <h2>About Venue Title of Heading</h2>
                                                    <p>Latin words combined with a handful of model sentence structures, to generate Lorem Ipsum which one looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour or non characteristic words etc.</p>
                                                    <p>Quisque laoreet mi libero, et tempus lacus venenatis eget. Nulla vitaeipsum inturpis blandit congue ofer ornare inleo. Nulla nibhmi sagittis necaliquet pharetra vitae turpis. Nam tristique mauris necultricies its tristiqu. orbilitelit molestie eget tincidunt luctus consequat sitameturna.</p>
                                                    <p>Aenean sapienest, rutrum malesuada quamuis tristique tincinibh hasellusut elementum not semlass and aptent taciti sociosqu ad litorarutrum malesuada quamuis tristique torquent per conubia nostra permite inceptos our its it himenaeos aecsed laoreet diam. Crasut auctor ipsusque commodo suscipit onet tristiques viverrarcu idaugue blandit ultricies nibhrhoncus rutrum malesuada tristique.</p>
                                                    <p>Latin words combined with a handful of model sentence structures to generate Loremere Ipsum which looks reasonable. The generated lorem Ipsum is therefore always free fromes combined with a handful of model repetition injected humour or non characteristic words etc.</p>
                                                    <h2>Why Our Wedding Venue </h2>
                                                    <ul class="check-circle">
                                                        <li>Wedding parties have exclusive use of the venue for the day</li>
                                                        <li>Last Minute Offer £3,800 inc VAT for any wedding booked in the next 8 weeks.</li>
                                                        <li>Licensed for civil ceremonies, civil partnerships and outside ceremonies with stunning views.</li>
                                                        <li>This venue is a superb location for a Wedding Reception catering from 30 to 650 guests.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab content start-->
                                    </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php
        include './footer.php';
        ?> 

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Flex Nav Script -->
        <script src="js/jquery.flexnav.js" type="text/javascript"></script>
        <script src="js/navigation.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/header-sticky.js"></script>
    </body>
</html>
