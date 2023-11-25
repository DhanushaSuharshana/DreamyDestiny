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
                            <i class="icon icon-size-60 icon-padlock-1 icon-white"></i>
                        </div>
                        <h1>Forgot your password?</h1>
                        <p>Have you forgotten your password? Please provide the email address you signed up with and we will send you a link to reset it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Forget Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="col-md-offset-3 col-md-6 well-box">
                <form>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                    </div>
                    <div class="form-group">
                        <button id="submit" name="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </form>
                <!-- Nav tabs -->
                <!-- Tab panes -->
            </div>
        </div>
    </div>
    <!--Import footer bar-->
    <?php include 'include/footer.php'; ?>
    
    <!--Import footer JS-->
    <?php include 'include/footerJS.php'; ?>
</body>
</html>
