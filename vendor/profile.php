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
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>My Profile</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template style.css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/flaticon.html">
        <!-- Font used in template -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--font awesome icon -->
        <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
                            <div class="page-header">
                                <h1>Vendor Profile <small>Edit and Update your profile.</small></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 profile-dashboard">
                        <div class="row">
                            <div class="col-md-7 dashboard-form">

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
                                <?php
                                $vali = new Validator();

                                $vali->show_message();
                                ?>

                                <div class="bg-white pinside40 mb30">





                                    <div class="form-horizontal">
                                        <!-- Form Name -->
                                        <h2 class="form-title">Upload Profile Photo</h2>
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <div class="col-md-4">

                                                <?php
                                                $VENDOR = new Vendor($_SESSION["id"]);
                                                if (empty($VENDOR->profile_picture)) {
                                                    ?> 
                                                    <img src="../upload/vendor/vendor.png" class="img img-responsive img-thumbnail" id="profil_pic">
                                                    <?php
                                                } else {

                                                    if ($VENDOR->googleID && substr($VENDOR->profile_picture, 0, 5) === "https") {
                                                        ?>
                                                        <img src="<?php echo $VENDOR->profile_picture; ?>" class="img img-responsive img-thumbnail" id="profil_pic">
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="../upload/vendor/<?php echo $VENDOR->profile_picture; ?>" class="img img-responsive img-thumbnail" id="profil_pic">
                                                        <?php
                                                    }
                                                }
                                                ?>


                                            </div>
                                            <div class="col-md-8 upload-file">

                                                <form class="form-horizontal"  method="post" enctype="multipart/form-data" id="upForm">
                                                    <input type="file" name="pro-picture" id="pro-picture" />
                                                    <input type="hidden" name="upload-profile-image" id="upload-profile-image"/>
                                                    <input type="hidden" name="vendor" id="vendor" value="<?php echo $VENDOR->id; ?>"/>
                                                </form>


                                            </div>
                                        </div>

                                    </div>
                                    <form method="post" action="post-and-get/vendor.php" class="form-horizontal">
                                        <!-- Text input-->
                                        <h2 class="form-title">Profile Vendor</h2>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">Name</label>
                                            <div class="col-md-8">
                                                <input id="name" name="name" type="text" placeholder="Vendor Name" class="form-control input-md" value="<?php echo $VENDOR->name; ?>" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">Email</label>
                                            <div class="col-md-8">
                                                <input id="email" name="email" type="text" placeholder="Email" value="<?php echo $VENDOR->email; ?>" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">Phone</label>
                                            <div class="col-md-8">
                                                <input id="contact_number" name="contact_number" type="text" placeholder="Phone" value="<?php echo $VENDOR->contact_number; ?>" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">Date of Birth</label>
                                            <div class="col-md-8">
                                                <input id="date_of_birthday" name="date_of_birthday" type="text" placeholder="Date of Birth" value="<?php echo $VENDOR->date_of_birthday; ?>" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">Address</label>
                                            <div class="col-md-8">
                                                <input id="home_address" name="home_address" type="text" placeholder="Vendor Address" value="<?php echo $VENDOR->home_address; ?>" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">District</label>
                                            <div class="col-md-8">
                                                <select class="form-control place-select1 show-tick" autocomplete="off" type="text" id="district" autocomplete="off" name="district" required="TRUE">
                                                    <option value=""> -- Please Select -- </option>
                                                    <?php foreach (District::all() as $key => $district) {
                                                        ?>
                                                        <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option><?php
                                                }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">City</label>
                                            <div class="col-md-8">
                                                <select class="form-control place-select1 show-tick" type="text" id="city-bar" id="city" name="city">

                                                    <?php
                                                    foreach (City::all() as $key => $city) {
                                                        if ($city[id] == $VENDOR->city) {
                                                            ?>
                                                            <option value="<?php echo $city['id']; ?>" selected="true"><?php echo $city['name']; ?></option>
                                                            <?php
                                                        } else {
                                                            ?>      
                                                            <option value="">-- Select District First --</option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="description">Description</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="about_me" name="about_me" rows="6" cols="12"><?php echo $VENDOR->about_me; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="submit"></label>
                                            <div class="col-md-4">

                                                <input type="hidden" id="id" value="<?php echo $VENDOR->id; ?>" name="id"/>
                                                <button type="submit" name="update"  class="btn btn-primary">Save Changes</button>


                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 dashboard-form">
                                <div class="bg-white pinside40 mb30">
                                    <form class="form-horizontal">
                                        <!-- Form Name -->
                                        <h2 class="form-title">Change Password</h2>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="oldpassword">Old Password</label>
                                            <div class="col-md-8">
                                                <input id="oldpassword" name="oldpassword" type="text" placeholder="Old Password" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="newpassword">New Password</label>
                                            <div class="col-md-8">
                                                <input id="newpassword" name="newpassword" type="text" placeholder="New Password" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ConfirmPassword">Confirm Password</label>
                                            <div class="col-md-8">
                                                <input id="ConfirmPassword" name="ConfirmPassword" type="text" placeholder="Confirm Password" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="submit"></label>
                                            <div class="col-md-4">
                                                <button id="submit" name="submit" class="btn btn-primary">Save Password</button>
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
        <script src="../js/profile.js" type="text/javascript"></script>
        <script src="js/city.js" type="text/javascript"></script>
    </body>

</html>
