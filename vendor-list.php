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
                            <i class="icon icon-size-60 icon-menu icon-white"></i>
                        </div>
                        <h1>Find Your Most Suitable Vendor</h1>
                        <p>The place where the wedding suppliers and wedding couples meet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Vendor List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-box">
        <div class="container">
            <div class="row filter-form">
                <div class="col-md-12">
                    <h4>Refine Your Search</h4>
                </div>
                <form>
                    <div class="col-md-3">
                        <label class="control-label" for="vendortype">Filter By Vendor Type</label>
                        <select id="vendortype" name="vendortype" class="form-control">
                            <!--Fetch all the vendor categories-->
                            <option value="">Select Vendor</option>
                            <option value="Venue">Venue</option>
                            <option value="Photographers">Photographers & Videographers</option>
                            <option value="Forists">Forists</option>
                            <option value="Decorators">Decorators and Event Designers </option>
                            <option value="Dressmakers">Bridal and Formal Wear Shops </option>
                            <option value="Entertainment Providers">Entertainment Providers</option>
                            <option value="Salon">Salon / Hair and Makeup Artists</option>
                            <option value="Bakers">Cake Designers/Bakers</option>
                            <option value="Transportation Services">Transportation Services</option>
                            <option value="Officiants">Officiants</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label" for="district">Capacity</label>
                        <select id="district" name="district" class="form-control">
                            <!--Fetch all the Districts-->
                            <option>Select District</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Surat">Surat</option>
                            <option value="Vadodara">Vadodara</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label" for="city">City</label>
                        <select id="city" name="city" class="form-control">
                            <!--Fetch all the city-->
                            <option>Select City</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Surat">Surat</option>
                            <option value="Vadodara">Vadodara</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary btn-block">Refine Your Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h><a href="venue-listing.php" class="title">Wedding Venues</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-2.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Event Designers </a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-3.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Dress maker</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-4.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Salon </a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-5.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Florists</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-6.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Cake Designers</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-7.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Makeup Artists</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
                <div class="col-md-3 vendor-box">
                    <!-- venue box start-->
                    <div class="vendor-image">
                        <!-- venue pic -->
                        <a href="#"><img src="images/vendor-8.jpg" alt="wedding venue" class="img-responsive"></a>
                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                    </div>
                    <!-- /.venue pic -->
                    <div class="vendor-detail">
                        <!-- venue details -->
                        <div class="caption">
                            <!-- caption -->
                            <h2><a href="#" class="title">Photographers</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                            <div class="rating "> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                        </div>
                        <!-- /.caption -->
                        <div class="vendor-price">
                            <div class="price">$390 - $600</div>
                        </div>
                    </div>
                    <!-- venue details -->
                </div>
                <!-- /.venue box start-->
            </div>
            <div class="row">
                <div class="col-md-12 tp-pagination">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a>
                        </li>
                    </ul>
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
    <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript" src="js/price-slider.js"></script>
</body>


</html>
