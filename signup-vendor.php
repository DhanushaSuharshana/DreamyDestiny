<!DOCTYPE html>
<html lang="en">

    <!--Import Top navbar-->
    <?php include 'include/head.php'; ?>

<body>
    <!--Import Top navbar-->
    <?php include 'include/TopNavbar.php'; ?>
    <!--Import Header section-->
    <?php include 'include/header.php'; ?>

    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-curtains icon-white"></i>
                        </div>
                        <h1>Are you Supplier? - Start Business</h1>
                        <p>Start Your Business & find great online network connecting with wedding couples .</p>
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
                        <li><a href="index.php">Home</a></li>
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
                        <form>
                            <h2>Vendor Registration</h2>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">User Name<span class="required">*</span></label>
                                <input id="name" name="name" type="text" placeholder="User name" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button name="submit" class="btn btn-primary btn-lg">create an account</button>
                            </div>
                        </form>
                    </div>
                    <p>Already a Member? <a href="login-page.php">Log In</a></p>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-block feature-left">
                                <div class="well-box">
                                    <div class="feature-icon"><i class="icon-love-letter icon-size-60 icon-default"></i></div>
                                    <div class="feature-content">
                                        <h3>Questions? Contact us </h3>
                                        <p>If You Have Any clarifications? Please feel free to contact us. Always, We're here to Help you.</p>
                                        <a href="#" class="btn btn-default btn-sm">Help Center</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Import footer bar-->
    <?php include 'include/footer.php'; ?>
    
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
