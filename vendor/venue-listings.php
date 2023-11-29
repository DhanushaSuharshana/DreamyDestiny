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
                                <h1>My Venue Listings</h1>
                            </div>

                            <div class="row">
                                <div class="col-md-12 my-listing-dashboard">
                                    <div class="table-head">
                                        <div class="row">
                                            <div class="col-md-2"><span class="th-title">Image</span></div>
                                            <div class="col-md-4"><span class="th-title">Title</span></div>
                                            <div class="col-md-2"><span class="th-title">City</span></div>
                                            <div class="col-md-2"><span class="th-title">Action</span></div>
                                        </div>
                                    </div>
                                    <?php
                                    foreach ($venues as $key => $venue) {
                                        $city = new City($venue['city']);
                                        ?>
                                        <div class="listing-row">
                                            <!-- listing row -->
                                            <div class="row">
                                                <div class="col-md-2 listing-thumb">
                                                    <?php
                                                    if (count($VENUE_PHOTO) > 0) {
                                                        foreach ($VENUE_PHOTO->getVenuePhotosById($venue['id']) as $key => $venue_p) {
                                                            if ($key == 1) {
                                                                break;
                                                            }
                                                            ?>
                                                            <img src="../upload/venue/thumb/<?php echo $venue_p['image_name']; ?>" alt="" class="img-responsive">
                                                            <?php
                                                        }
                                                    } else {
                                                        ?> 
                                                        <b style="padding-left: 15px;">No Accommodation Image.</b> 
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-4 listing-title">
                                                    <h2><?php echo $venue['name']; ?></h2> </div>

                                                <div class="col-md-2 listing-price"><?php echo substr($city->name, 0, 30); ?></div>
                                                <div class="col-md-2 listing-action"><a href="edit-venue-listing.php?id=<?php echo $venue['id']; ?>" class="btn btn-primary  btn-xs">EdIT</a> <a href="#" class="btn btn-danger btn-xs">Delete</a></div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
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
