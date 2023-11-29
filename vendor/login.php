<?php
include_once(dirname(__FILE__) . '/../class/include.php');
?>
<!DOCTYPE html>
<html lang="en">
    <!--Import Top navbar-->
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Vendor Login</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template style.css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/flaticon.html">
        <!-- Font used in template -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--font awesome icon -->
  
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
    <!--Import Top navbar-->
    <?php include './top-bar.php'; ?>
    <!--Import Header section-->
    <?php include './header.php'; ?>
    
        <div class="tp-page-head">
            <!-- page header -->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="page-header text-center">
                          
                            <h1>Are you Supplier - Start Business</h1>
                            <p>Dreamy Destiny. works with thousands of wedding vendors Sri Lanka.</p>
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
        
    <!--Import Top navbar-->
    <?php include '../include/footer.php'; ?>
    
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
