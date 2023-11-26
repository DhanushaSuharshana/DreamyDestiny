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
                            <i class="icon icon-size-60 icon-lock icon-white"></i>
                        </div>
                        <h1>Create a FREE account &amp; save you date.</h1>
                        <p>Start Planning It's Free, find your wedding suppliers to create your dream wedding.</p>
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
                        <li class="active">Sign Up Couple</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 singup-couple">
                    <div class="well-box">
                        <h2>Let's turn your wedding into a reality!</h2>
                        <form>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">Your Name<span class="required">*</span></label>
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="control-label" for="district">Select Your District</label>
                                <select id="district" name="district" class="form-control">
                                    <!--Fetch all the Districts-->
                                    <option value="">Select District</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Gandhinagar">Gandhinagar</option>
                                    <option value="Rajkot">Rajkot</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Vadodara">Vadodara</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label class="control-label" for="city">Select the city</label>
                                <select id="city" name="city" class="form-control">
                                    <!--Fetch all the Cities according to the selected district-->
                                    <option>Select City</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Gandhinagar">Gandhinagar</option>
                                    <option value="Rajkot">Rajkot</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Vadodara">Vadodara</option>
                                </select>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary">Create An Account</button>
                            </div>
                        </form>
                    </div>
                    <p>Already a Member? <a href="login-page.php">Log In</a></p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"> <i class="icon-list-2 icon-size-60 icon-default"></i> </div>
                                <div class="feature-content">
                                    <h3>Wedding Checklist</h3>
                                    <p>Nullam porttitor lorem atdiam quis semper diam orci at neque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-budget icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Wedding Budget</h3>
                                    <p>Donec convallis libero et risus maximus cgestas sem venenatis vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-wedding-arch icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Wedding Vendors</h3>
                                    <p>Aliquam erat volutpat. Quisque ullamcorper quis ipsum eget consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-two-hearts icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Everything you need</h3>
                                    <p>Fusce dapibus ex ac justo facili libero et risus maximus convallis.</p>
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
    
    <!--Import footer JS-->
    <?php include 'include/footerJS.php'; ?>
</body>


</html>
