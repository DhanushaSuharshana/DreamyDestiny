<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$VENDOR = new Vendor($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Venue</title>
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
                                <h1>Add New Venue Listing</h1>
                            </div>
                            <form class="form-horizontal"  method="post" action="post-and-get/venue.php" enctype="multipart/form-data" id="form-venue"> 
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <a role="button" data-toggle="collapse" aria-expanded="true">
                                            <div class="panel-heading tab-panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    Your Venue Details
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
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Please Enter Name">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="bottom-top">
                                                        <label for="Address">Address</label>
                                                    </div>
                                                    <div class="formrow">
                                                        <input type="text" id="address" name="address" class="form-control" placeholder="Please Enter Your Address">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="bottom-top">
                                                        <label for="Email">Email</label>
                                                    </div>
                                                    <div class="formrow">
                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Please Enter Your Email Address">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="bottom-top">
                                                        <label for="Phone">Phone</label>
                                                    </div>
                                                    <div class="formrow">
                                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Please Enter Your Phone Number">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="bottom-top">
                                                        <label for="Website">Website</label>
                                                    </div>
                                                    <div class="formrow">
                                                        <input type="text" id="website" name="website" class="form-control" placeholder="Please Enter Your Website">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="bottom-top">
                                                        <label for="Website">Map</label>
                                                    </div>
                                                    <div class="formrow">
                                                        <input type="text" id="map" name="map" class="form-control" placeholder="Please Enter Your Map Link">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="bottom-top">
                                                        <label for="Venue_type">Venue Type</label>
                                                    </div>
                                                    <div class="formrow">
                                                        <select class="form-control" autocomplete="off" type="text" id="type" autocomplete="off" name="type" required="TRUE">
                                                            <option value=""> -- Please Select -- </option>
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
                                                        <input type="text" autocomplete="off" id="city" placeholder="please select your city" class="form-control">
                                                        <div id="suggesstion-box">
                                                            <ul id="city-list" class="city-list"></ul>
                                                        </div>
                                                        <input type="hidden" name="city" value="" id="city-id"/>
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
                                        <a class="collapsed" role="button" data-toggle="collapse"  aria-expanded="false">
                                            <div class="panel-heading tab-panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    Venues Photos
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
                                                                    <input type="file" name="venue-picture" id="venue-picture">
                                                                    <input type="hidden" name="upload-venue-image" id="upload-venue-image" value="TRUE"/>
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
                                                <div class="col-md-6 col-xs6 col-sm-6 text-right">
                                                    <a role="button" id="step-2" class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true">
                                                        Next >>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel panel-default">
                                        <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false">
                                            <div class="panel-heading tab-panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    Venue Facilities
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Name</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Name</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                <?php
                                                                $ACCOMODATION_GENERAL_FACILITY = new VenueGeneralFacilities(NULL);
                                                                $ACCOMODATION_FACILITY_DETAILS = new VenueFacilityDetails(NULL);
                                                                foreach ($ACCOMODATION_GENERAL_FACILITY->all() as $key => $venue_general_facility) {
                                                                    ?>
                                                                    <tr id="row_<?php echo $venue_general_facility['id']; ?>">
                                                                        <td><?php echo $venue_general_facility['sort']; ?></td> 
                                                                        <td><?php echo $venue_general_facility['name']; ?></td> 
                                                                        <td> 
                                                                            <input  id="facility-check" value="<?php echo $venue_general_facility['id']; ?>" name="facility[]" type="checkbox">
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                                ?>   
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-sm-6 text-left">
                                                    <a role="button" id="step-prev-2" class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                                        << Previous
                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-sm-6 text-right">
                                                    <a role="button" id="step-3"class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true">
                                                        Next >>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel panel-default">
                                        <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false">
                                            <div class="panel-heading tab-panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    Description
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="bottom-top">
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    <div class="formrow">
                                                        <textarea id="description" name="description" class="form-control" rows="5"></textarea> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-sm-6 text-left">
                                                    <a role="button" id="step-prev-3" class="btn btn-info tab-next-button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                                        << Previous
                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-sm-6 text-right">
                                                    <div class="">
                                                        <input type="hidden" id="member" name="vendor" value="<?php echo $_SESSION['id']; ?>"/>
                                                        <button name="create" id="create" type="submit" class="btn btn-info tab-next-create">Save All Details</button>

                                                    </div>
                                                </div> 
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
