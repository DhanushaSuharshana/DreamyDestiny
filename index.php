<!DOCTYPE html>
<html lang="en">
    
    <!--Import Top navbar-->
    <?php include 'include/head.php'; ?>
    
<body>
    <!--Import Top navbar-->
    <?php include 'include/TopNavbar.php'; ?>
    <!--Import Header section-->
    <?php include 'include/header.php'; ?>
    
    <div class="slider-bg">
        <!-- slider start-->
        <div id="slider" class="owl-carousel owl-theme slider">
            <div class="item"><img src="images/hero-image-3.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="images/hero-image-2.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="images/hero-image.jpg" alt="Wedding couple just married"></div>
        </div>
        <div class="find-section">
            <!-- Find search section-->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 finder-block">
                        <div class="finder-caption">
                            <h1>Find your perfect Wedding Vendor</h1>
                            <!-- Fetch number of total vendors-->
                            <p>Over <strong>1200+ Wedding Vendors </strong>for you special date &amp; 
                                Find the perfect venue &amp; save you date.</p>
                        </div>
                        <div class="finderform">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <select class="form-control">
                                            <!--Fetch all the vendor categories-->
                                            <option>Select Vendor</option>
                                            <option value="Venue">Venue</option>
                                            <option value="Photographer">Photographer</option>
                                            <option value="Cake">Cake</option>
                                            <option value="Dj">Dj</option>
                                            <option value="Florist">Florist</option>
                                            <option value="Videography">Videography</option>
                                            <option value="jewellery">Jewellery</option>
                                            <option value="Gifts">Gifts</option>
                                            <option value="Dresses">Dresses</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select class="form-control">
                                            <!--Fetch all the Districts-->
                                            <option>Select District</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Gandhinagar">Gandhinagar</option>
                                            <option value="Rajkot">Rajkot</option>
                                            <option value="Surat">Surat</option>
                                            <option value="Vadodara">Vadodara</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select class="form-control">
                                            <!--Fetch all the Cities according to the selected district-->
                                            <option>Select City</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Gandhinagar">Gandhinagar</option>
                                            <option value="Rajkot">Rajkot</option>
                                            <option value="Surat">Surat</option>
                                            <option value="Vadodara">Vadodara</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Find Vendors</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Find search section-->
    </div>
    <!-- slider end-->
    <div class="section-space80">
        <!-- Feature Blog Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Your Wedding Planing Start Here</h1>
                        <p>Various versions have evolved over the years sometimes by accident sometimes on purpose.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feature center -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="images/vendor.svg" alt=""></div>
                        <h2>Find local vendor</h2>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="images/mail.svg" alt=""></div>
                        <h2>Contact vendor</h2>
                        <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="images/couple.svg" alt=""></div>
                        <h2>Save Your Date</h2>
                        <p>The generated Lorem Ipsum is therefore always free from repetition injected humour or non-characteristic words etc.</p>
                    </div>
                </div>
                <!-- /.feature block -->
            </div>
            <!-- /.feature center -->
        </div>
    </div>
    <!-- Feature Blog End -->
 
    <div class="section-space80">
        <!-- top location -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Top Wedding Locations</h1>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/location-pic.jpg" alt="" class="img-responsive"></a> 
                        <a href="#" class="venue-lable">
                            <span class="label label-default">New York City</span><!--Fetch the city or district-->
                        </a> 
                    </div>
                </div>
                <!-- /.location block -->
                <div class="col-md-4 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/location-pic-2.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Sydney</span></a> </div>
                </div>
                <!-- /.location block -->
                <div class="col-md-4 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/location-pic-3.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Russia</span></a> </div>
                </div>
                <!-- /.location block -->
                <div class="col-md-8 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/location-pic-4.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Germany</span></a> </div>
                </div>
                <!-- /.location block -->
                <div class="col-md-4 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/location-pic-5.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Paris</span></a> </div>
                </div>
                <!-- /.location block -->
            </div>
        </div>
    </div>
    <!-- /.top location -->
    <div class="section-space80 bg-light">
        <!-- Testimonial Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Just Get Married Happy Couple</h1>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 tp-testimonial">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item testimonial-block">
                            <div class="couple-pic"><img src="images/couple.jpg" alt="" class="img-circle"></div>
                            <div class="feedback-caption">
                                <p>"Had our wedding on 15th may 2015 and have to say Jenny and the team made it a wonderful and enjoyable day were Notting was a problem from the build up to the day."</p>
                            </div>
                            <div class="couple-info">
                                <div class="name">Dave Macwan</div>
                                <div class="date">Thu, 21st June, 2015</div>
                            </div>
                        </div>
                        <div class="item testimonial-block">
                            <div class="couple-pic"><img src="images/couple-2.jpg" alt="" class="img-circle"></div>
                            <div class="feedback-caption">
                                <p>"Vestibulum vitae neque urna. Duis ut mauris mi. Sed vehicula vestibulum finias their default model text and a search for lorem ipsum will uncover manym elit posuerenia eget sem."</p>
                            </div>
                            <div class="couple-info">
                                <div class="name">Marry &amp; Leary</div>
                                <div class="date">Thu, 13th July, 2015</div>
                            </div>
                        </div>
                        <div class="item testimonial-block">
                            <div class="couple-pic"><img src="images/couple-3.jpg" alt="" class="img-circle"></div>
                            <div class="feedback-caption">
                                <p>"Had our wedding on 15th Oct 2015 and have to say Jenny and the team made it a wonderful and enjoyable day were Notting was a problem from the build up to the day."</p>
                            </div>
                            <div class="couple-info">
                                <div class="name">Jhon Doe &amp; Doe Jassica</div>
                                <div class="date">Thu, 21st Aug, 2015</div>
                            </div>
                        </div>
                        <div class="item testimonial-block">
                            <div class="couple-pic"><img src="images/couple-4.jpg" alt="" class="img-circle"></div>
                            <div class="feedback-caption">
                                <p>"Etiam ut metus nisi. Sed non laoreet nisi tinciin interdum risus felis enjoyable day were Notting was a problem from the build up to the dayvel eleifend milaoreet consectetur."</p>
                            </div>
                            <div class="couple-info">
                                <div class="name">Dave Macwan</div>
                                <div class="date">Thu, 12th Sept, 2015</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Testimonial Section -->
    <div class="section-space80">
        <!-- Call to action -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 couple-block">
                    <div class="couple-icon"><img src="images/couple.svg" alt=""></div>
                    <h2>Are you couple find the venue ?</h2>
                    <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <a href="#" class="btn btn-primary">Find Vendor</a> </div>
                <div class="col-md-6 vendor-block">
                    <div class="vendor-icon"><img src="images/vendor.svg" alt=""></div>
                    <h2>Are you wedding vendor ?</h2>
                    <p>Fusce eget elementum quam, vel tempor justo. Ut imperdiet eget sapien dictum aliquam. Nulla maximus sodales dignissim.</p>
                    <a href="#" class="btn btn-primary">Add Your Listing</a></div>
            </div>
        </div>
    </div>
    <!-- /. Call to action -->
    
    <!--Import footer bar-->
    <?php include 'include/footer.php'; ?>
    <!--Import footer JS-->
    <?php include 'include/footerJS.php'; ?>

</body>

</html>
