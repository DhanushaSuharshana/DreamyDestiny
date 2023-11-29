
<div class="tp-dashboard-head">
    <!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 profile-header">
                <div class="profile-pic col-md-2">
                    <?php
                    $VENDOR = new Vendor($_SESSION["id"]);
                    if (empty($VENDOR->profile_picture)) {
                        ?> 
                        <img src="../upload/vendor/vendor.png" class="img img-responsive img-thumbnail" id="profil_pic1">
                        <?php
                    } else {

                        if ($VENDOR->googleID && substr($VENDOR->profile_picture, 0, 5) === "https") {
                            ?>
                            <img src="<?php echo $VENDOR->profile_picture; ?>" class="img img-responsive img-thumbnail" id="profil_pic1">
                            <?php
                        } else {
                            ?>
                            <img src="../upload/vendor/<?php echo $VENDOR->profile_picture; ?>" class="img img-responsive img-thumbnail" id="profil_pic1">
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="profile-info col-md-9">
                    <h1 class="profile-title"><?php echo $VENDOR->name; ?><small></small></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page header -->
<div class="tp-dashboard-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12 dashboard-nav">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="index.php"><i class="fa fa-dashboard db-icon"></i>My Dashboard</a></li>
                    <li><a href="profile.php"><i class="fa fa-user db-icon"></i>My Profile</a></li>
                    <li><a href="add-venue-listing.php"><i class="fa fa-plus-square db-icon"></i>Add Venue Listing</a></li>
                    <li><a href="add-services-listing.php"><i class="fa fa-plus-square db-icon"></i>Add Services Listing</a></li>
                    <li><a href="my-listings.php"><i class="fa fa-list db-icon"></i>My Listings</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>