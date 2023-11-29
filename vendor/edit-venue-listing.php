<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$VENDOR = new Vendor($_SESSION['id']);

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$VENUE = new Venue($id);
$a_type = new VenueType($VENUE->type);
$city_name = new City($VENUE->city);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Venue</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template style.css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/flaticon.html">
        <!-- Font used in template -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <!--font awesome icon -->
        <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
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
                                <h1>Edit Venue Listing</h1>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"> 
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content text-left">
                                            <a href="edit-venue-listing.php?id=<?php echo $VENUE->id; ?>"><i class="hover-menu-icon fa fa-pencil"></i>Edit</a>
                                            <a href="add-venue-listing-photo.php?id=<?php echo $VENUE->id; ?>"><i class="hover-menu-icon fa fa-photo"></i>Manage Photos</a>
                                            <a href="venue-facilities.php?id=<?php echo $VENUE->id; ?>"><i class="hover-menu-icon fa fa-check-square"></i>Manage Facilities</a>
                                            <a href="venue-packages.php?id=<?php echo $VENUE->id; ?>"><i class="hover-menu-icon fa fa-bed"></i>Manage Packages</a>
                                            <a href="#" class="menu-hover-delete-font delete-accommodation" data-id="<?php echo $VENUE->id; ?>"><i class="hover-menu-icon fa fa-trash-o"></i>Delete</a>
                                        </div>
                                    </div> 
                                        <?php echo '     ' . $VENUE->name; ?> </div>
                                <div class="panel-body">
                                    <div class="body">
                                        <div class="userccount">
                                            <div class="formpanel"> 
                                                <?php
                                                $vali = new Validator();

                                                $vali->show_message();
                                                ?>
                                                <form class="form-horizontal"  method="post" action="post-and-get/venue.php" enctype="multipart/form-data"> 
                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="Name">Name</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <input type="text" id="name" value="<?php echo $VENUE->name; ?>" name="name" class="form-control" placeholder="Please Enter Name">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="Address">Address</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <input type="text" id="address" value="<?php echo $VENUE->address; ?>" name="address" class="form-control" placeholder="Please Enter Your Address">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="Email">Email</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <input type="email" id="email" name="email" value="<?php echo $VENUE->email; ?>" class="form-control" placeholder="Please Enter Your Email Address">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="Phone">Phone</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <input type="text" id="phone" name="phone" value="<?php echo $VENUE->phone; ?>" class="form-control" placeholder="Please Enter Your Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="Website">Website</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <input type="text" id="website" name="website" value="<?php echo $VENUE->website; ?>" class="form-control" placeholder="Please Enter Your Website">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="Map">Map</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <input type="text" id="map" name="map" value="<?php echo $VENUE->map; ?>" class="form-control" placeholder="Please Enter Your Map">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="Accomodation_type">Venue Type</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <select class="form-control" autocomplete="off" type="text" id="type" value="<?php echo $VENUE->type; ?>" autocomplete="off" name="type" required="TRUE">
                                                                    <option value="<?php echo $VENUE->type ?>"><?php echo $a_type->name ?></option>
                                                                    <?php foreach (VenueType::all() as $key => $type) {
                                                                        ?>
                                                                        <option value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option><?php
                                                                    }
                                                                    ?>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="city">City</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <input type="text" autocomplete="off" id="city" value="<?php echo $city_name->name; ?>" placeholder="please select city" class="form-control">
                                                                <div id="suggesstion-box">
                                                                    <ul id="city-list" class="city-list"></ul>
                                                                </div>
                                                                <input type="hidden" name="city" value="<?php echo $city_name->name; ?>" id="city-id"/>

                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <div class="bottom-top">
                                                                <label for="description">Description</label>
                                                            </div>
                                                            <div class="formrow">
                                                                <textarea type="text" id="description" name="description" class="form-control" placeholder="Please Enter Description"><?php echo $VENUE->description ?></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="top-bott50">
                                                            <div class="bottom-top">
                                                                <input type="hidden" id="vendor" name="member" value="<?php echo $_SESSION['id']; ?>"/>
                                                                <input type="hidden" id="id" name="id" value="<?php echo $VENUE->id ?>"/>
                                                                <button name="update" type="submit" class="btn btn-info center-block">Update</button>

                                                            </div>
                                                        </div> 
                                                    </div>  
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
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
        <script src="js/city-select.js" type="text/javascript"></script>
        <!-- Flex Nav Script -->
        <script src="js/jquery.flexnav.js" type="text/javascript"></script>
        <script src="js/navigation.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/header-sticky.js"></script>
        <script src="js/post-venue-image.js" type="text/javascript"></script>
        <script src="js/add-new-venue.js" type="text/javascript"></script>
        <script src="plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="plugins/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>

        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });
        </script>
    </body>
</html>
