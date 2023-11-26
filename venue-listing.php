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
                            <i class="icon icon-size-60 icon-wedding-arch icon-white"></i>
                        </div>
                        <h1>Wedding Venue Listing</h1>
                        <p>Find the perfect wedding vendor for your wedding. Search wedding reception vendor reviews and vendors in your area.</p>
                        <span class="label label-default">12 Venue Vendor</span> 
                        <!-- Fetch number of venue vendors -->
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
                        <li class="active">Wedding Venue Listings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="filter-sidebar">
                        <div class="col-md-12 form-title">
                            <h2>Refine Your Search</h2>
                        </div>
                        <form>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="venuetype">Venue Type</label>
                                <select id="venuetype" name="venuetype" class="form-control">
                                    <option value="">Select Venue</option>
                                    <option value="Barn">Barn</option>
                                    <option value="Boutique">Boutique</option>
                                    <option value="Castle">Castle</option>
                                    <option value="Country House">Country House</option>
                                    <option value="Exclusive use">Exclusive use</option>
                                    <option value="Garden weddings">Garden weddings</option>
                                    <option value="Gay friendly">Gay friendly</option>
                                    <option value="Gothic">Gothic</option>
                                    <option value="Hotel">Hotel</option>
                                    <option value="Intimate">Intimate</option>
                                    <option value="Manor House">Manor House</option>
                                    <option value="Marquee">Marquee</option>
                                    <option value="Minimalist">Minimalist</option>
                                    <option value="Modern">Modern</option>
                                    <option value="Outside Weddings">Outside Weddings</option>
                                    <option value="Palace">Palace</option>
                                    <option value="Private School">Private School</option>
                                    <option value="Romantic">Romantic</option>
                                    <option value="Small">Small</option>
                                    <option value="Waterside">Waterside</option>
                                    <option value="Weekend">Weekend</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="capacity">Capacity</label>
                                <select id="capacity" name="capacity" class="form-control">
                                    <option value="">Select Capacity</option>
                                    <option value="0 - 99">0 - 99</option>
                                    <option value="100 - 199">100 - 199</option>
                                    <option value="200 - 299">200 - 299</option>
                                    <option value="300 - 399">300 - 399</option>
                                    <option value="400+">400 - 500</option>
                                </select>
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="budget">Budget Range</label>
                                <select id="budget" name="budget" class="form-control">
                                    <option value=""> Select Your Budget Range</option>
                                    <option value="$35 - $50">$100 - $199</option>
                                    <option value="$50 - $60">$200 - $299</option>
                                    <option value="$60 - $70">$300 - $399</option>
                                    <option value="$70 - $80">$400 - $499</option>
                                    <option value="$80 - $90">$500 - $599</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="district">Filter By Your Location</label>
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
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="city">Filter By Your Favorite city</label>
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
                            <!-- <div class="col-md-12 form-group rating">
                                <label class="control-label">Select Rating </label>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                    <label for="checkbox-0" class="control-label"> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                    <label for="checkbox-1" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-2" value="3" class="styled">
                                    <label for="checkbox-2" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-3" value="4" class="styled">
                                    <label for="checkbox-3" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-4" value="5" class="styled">
                                    <label for="checkbox-4" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                            </div> -->
                            <div class="col-md-12 form-group">
                                <label class="control-label">Amenities</label>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="weddinghall" value="Wedding Hall" class="styled">
                                    <label for="weddinghall" class="control-label"> Wedding Hall </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="dining" value="Dining" class="styled">
                                    <label for="dining" class="control-label"> Dining </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="catering" value="In House Catering" class="styled">
                                    <label for="catering" class="control-label"> In House Catering </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="djfacilities" value="5" class="styled">
                                    <label for="djfacilities" class="control-label"> DJ Facilities </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="dancefloor" value="Dance Foor" class="styled">
                                    <label for="dancefloor" class="control-label"> Dance Floor </label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
                        <div class="col-md-4 vendor-box">
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
                                    <h2><a href="#" class="title">Venue Vendor Title</a></h2>
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
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
    <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript" src="js/price-slider.js"></script>
</body>

</html>
