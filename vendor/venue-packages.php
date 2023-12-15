<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$VENDOR = new Vendor($_SESSION['id']);

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


$VENUE = new Venue($id);

$PACKAGES = VenuePackage::getPackagesByVenueId($id);
$PACKAGES_PHOTO = new VenuePackagePhoto(NULL);

$PACKAGES_GENERAL_FACILITY = new VenueGeneralFacilities(NULL);
$PACKAGES_FACILITY_DETAILS = new VenueFacilityDetails(NULL);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manage Venue Package</title>
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
                                <h1>Venue Packages</h1>

                            </div>
                            <?php
                            $vali = new Validator();
                            $vali->show_message();
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-pencil"></i>Add Package - <?php echo $VENUE->name; ?></div>
                                <div class="panel-body">
                                    <div class="body">
                                        <div class="userccount">
                                            <div class="formpanel"> 
                                                <form class="form-horizontal"  method="post" action="post-and-get/venue-package.php" enctype="multipart/form-data" id="form-package"> 
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                                                        <div class="panel-group"  role="tablist" aria-multiselectable="true">
                                                                            <div class="panel panel-default">
                                                                                <a role="button" data-toggle="collapse" aria-expanded="true">
                                                                                    <div class="panel-heading tab-panel-heading" role="tab" id="headingOne">
                                                                                        <h4 class="panel-title">
                                                                                            Your Package Details
                                                                                        </h4>
                                                                                    </div>
                                                                                </a>
                                                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                                    <div class="panel-body">
                                                                                        <div class="">
                                                                                            <div class="bottom-top">
                                                                                                <label for="Name">Name</label>
                                                                                            </div>
                                                                                            <div class="formrow">
                                                                                                <input type="text" id="name" class="form-control" placeholder="Enter Name" autocomplete="off" name="name" required="true">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="">
                                                                                            <div class="bottom-top">
                                                                                                <label for="Name">Number of Pax</label>
                                                                                            </div>
                                                                                            <div class="formrow">
                                                                                                <input type="number" id="pax" class="form-control" placeholder="Enter Pax" autocomplete="off" name="pax" required="true">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="">
                                                                                            <div class="bottom-top">
                                                                                                <label for="Name">Price</label>
                                                                                            </div>
                                                                                            <div class="formrow">
                                                                                                <input type="number" id="price" class="form-control" placeholder="Enter Price" autocomplete="off" name="price" required="true">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-12 text-right">
                                                                                            <a role="button" id="step-1" class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                                                                Next >>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel panel panel-default">
                                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"  aria-expanded="false">
                                                                                    <div class="panel-heading tab-panel-heading" role="tab" id="headingTwo">
                                                                                        <h4 class="panel-title">
                                                                                            Package Photos
                                                                                        </h4>
                                                                                    </div>
                                                                                </a>
                                                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                                    <div class="panel-body">
                                                                                        <div class="row">
                                                                                            <div class="bottom-top col-md-2">
                                                                                                <div class="formrow">
                                                                                                    <div class="uploadphotobx" id="uploadphotobx"> 
                                                                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                                                                        <label class="uploadBox">Click here to Upload photo
                                                                                                            <input type="file" name="package-picture" id="package-picture">
                                                                                                            <input type="hidden" name="upload-package-image" id="upload-package-image" value="TRUE"/>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div id="image-list">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-6 col-sm-6 text-left">
                                                                                            <a role="button" id="step-prev-1" class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                                                                                << Previous
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-6 col-sm-6 text-right">
                                                                                            <a role="button" id="step-2" class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                                                                Next >>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel panel panel-default">
                                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
                                                                                    <div class="panel-heading tab-panel-heading" role="tab" id="headingFour">
                                                                                        <h4 class="panel-title">
                                                                                            Description
                                                                                        </h4>
                                                                                    </div>
                                                                                </a>
                                                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                                                    <div class="panel-body">
                                                                                        <div class="col-md-12">

                                                                                            <div class="formrow">
                                                                                                <textarea id="description" name="description" class="form-control" rows="10"></textarea> 
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-6 col-sm-6 text-left">
                                                                                            <a role="button" id="step-prev-3" class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                                                                                << Previous
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-6 col-sm-6 text-right">
                                                                                            <div class="">
                                                                                                <input type="hidden" value="<?php echo $id ?>" name="id" />
                                                                                                <input name="create" id="create" type="submit" class="btn btn-info tab-next-create" value="Save All Details">
                                                                                            </div>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <?php
                                                                    foreach ($PACKAGES as $key => $packages) {
                                                                        ?>
                                                                        <div class="col-md-4">
                                                                            <div class="vendor-list-block mb30">
                                                                                <!-- vendor list block -->
                                                                                <div class="vendor-img">
                                                                                    <?php
                                                                                    if (count($PACKAGES_PHOTO) > 0) {
                                                                                        foreach ($PACKAGES_PHOTO->getPackagePhotosById($packages['id']) as $key => $packages_p) {
                                                                                            if ($key == 1) {
                                                                                                break;
                                                                                            }
                                                                                            ?>
                                                                                            <img src="" alt="" class="img-responsive">
                                                                                            <a href="#"><img src="../upload/venue/packages/<?php echo $packages_p['image_name']; ?>" alt="wedding packages" class="img-responsive"></a>

                                                                                            <?php
                                                                                        }
                                                                                    } else {
                                                                                        ?> 
                                                                                        <b style="padding-left: 15px;">No Venue Image.</b> 
                                                                                    <?php } ?>

                                                                                    <div class="category-badge"><a href="#" class="category-link">ghgh</a></div>

                                                                                    <div class="favorite-action"> 
                                                                                        <div class="fav-icon">
                                                                                            <div class="dropdown">
                                                                                                <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                                                                                <div class="dropdown-content text-left">
                                                                                                    <a href="edit-venue-package.php?id=<?php echo $packages['id']; ?>"><i class="hover-menu-icon fa fa-pencil"></i>Edit</a>
                                                                                                    <a href="add-venue-package-photo.php?id=<?php echo $packages['id']; ?>"><i class="hover-menu-icon fa fa-photo"></i>Manage Photos</a>
                                                                                                    <a href="#" class="menu-hover-delete-font delete-accommodation" data-id="<?php echo $packages['id']; ?>"><i class="hover-menu-icon fa fa-trash-o"></i>Delete</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vendor-detail">
                                                                                    <!-- vendor details -->
                                                                                    <div class="caption">
                                                                                        <h2><a href="#" class="title"><?php echo $packages['name']; ?></a></h2>

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

        <script src="plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="plugins/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>

        <script src="js/add-new-venue-package.js" type="text/javascript"></script>
        <script src="js/post-venue-package-image.js" type="text/javascript"></script>
        <script>
            tinymce.init({
                selector: "#description",
                height: 380,
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
