<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$VENUE = new Venue(NULL);
$venues = NULL;
if (isset($_GET['member'])) {
    $venues = $VENUE->getAccommodationByMemberId($_GET['member']);
} else {
    $venues = $VENUE->all();
}
?> 
﻿<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Manage Venues</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


        <!--         JQuery DataTable Css 
                <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">-->

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     


        <!-- Bootstrap Core Css -->
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />

        <!--         JQuery DataTable Css 
                <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">-->
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>
        <section class="content">
            <div class="container-fluid"> 
                <?php
                $vali = new Validator();

                $vali->show_message();
                ?>
                <!-- Manage Districts -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage Venue
                                    <?php
                                    if (isset($_GET['member'])) {
                                        $MEM = new Member($_GET['member']);
                                        echo ': ' . $MEM->name;
                                    }
                                    ?>
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-venue.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <!-- <div class="table-responsive">-->
                                <div>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th> 
                                                <th>Type</th>
                                                <th>City</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            foreach ($venues as $key => $venue) {
                                                $venue_type = new VenueType($venue['type']);
                                                $city = new City($venue['city']);
                                                $key++;
                                                ?>
                                                <tr id="row_<?php echo $venue['id']; ?>">
                                                    <td><?php echo $key ?></td> 
                                                    <td><?php echo substr($venue['name'], 0, 30); ?></td> 
                                                    <td><?php echo substr($venue_type->name, 0, 30); ?></td> 
                                                    <td><?php echo substr($city->name, 0, 30); ?></td>
                                                    <td><?php echo $venue['phone']; ?></td> 
                                                    <td><?php echo $venue['email']; ?></td> 
                                                    <td> 
                                                        <a href="edit-venue.php?id=<?php echo $venue['id']; ?>" class="op-link btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil"></i></a>  
                                                        <a href="#" class="delete-venue btn btn-sm btn-danger" data-id="<?php echo $venue['id']; ?>">
                                                            <i class="glyphicon glyphicon-trash" data-type="cancel"></i>
                                                        </a>
                                                        <a href="view-venue-photos.php?id=<?php echo $venue['id']; ?>" class="op-link btn btn-sm btn-default"><i class="glyphicon glyphicon-picture"></i></a>
                                                        <a href="create-venue-packages.php?id=<?php echo $venue['id']; ?>" class="op-link btn btn-sm btn-default"><i class="glyphicon glyphicon-bed"></i></a> 
                                                        <a href="view-venue-facilities.php?id=<?php echo $venue['id']; ?>" class="op-link btn btn-sm btn-default"><i class="glyphicon glyphicon-ok"></i></a> 
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?> 
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Manage District -->

            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="plugins/node-waves/waves.js"></script>


        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/datatables.init.js"></script>


        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <!-- Custom Js -->
        <script src="js/admin.js"></script>
<!--        <script src="js/pages/tables/jquery-datatable.js"></script>-->


        <!-- Demo Js -->
        <script src="js/demo.js"></script>
        <script src="delete/js/accommodation.js" type="text/javascript"></script>
    </body>

</html> 