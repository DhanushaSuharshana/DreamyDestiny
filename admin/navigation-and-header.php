<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.php">Dreamy Destiny - Control Panel</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">

        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="images/profile/<?php echo $_SESSION["id"]; ?>.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                </div>
                <div class="email"><?php echo $_SESSION['email']; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">settings</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="profile.php?id=<?php echo $_SESSION['id']; ?>">
                                <i class="material-icons">person</i>Profile</a>
                        </li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="edit-profile.php?id=<?php echo $_SESSION['id']; ?>"><i class="material-icons">edit</i>Edit My Profile</a></li>
                        <li><a href="change-password.php?id=<?php echo $_SESSION['id']; ?>"><i class="material-icons">vpn_key</i>Change Password</a></li> 
                        <li role="seperator" class="divider"></li>
                        <li><a href="post-and-get/log-out.php"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list" style="height: 500px">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="index.php">
                        <i class="material-icons">av_timer</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">supervisor_account</i>
                        <span>Vendors</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="create-vendor.php">
                                <i class="material-icons">add</i>
                                <span>Add New</span>
                            </a>
                        </li>
                        <li>
                            <a href="manage-vendor.php">
                                <i class="material-icons">list</i>
                                <span>Manage</span>
                            </a>
                        </li>
                    </ul>
                </li>
 <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">person_outline</i>
                        <span>Visitors</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="create-visitor.php">
                                <i class="material-icons">add</i>
                                <span>Add New</span>
                            </a>
                        </li>
                        <li>
                            <a href="manage-visitor.php">
                                <i class="material-icons">list</i>
                                <span>Manage</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">hotel</i>
                                        <span>Accommodation</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="create-accommodation.php">
                                                <i class="material-icons">add</i>
                                                <span>Add New</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="manage-accommodation.php">
                                                <i class="material-icons">list</i>
                                                <span>Manage</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="menu-toggle">
                                                <i class="material-icons">chevron_right</i>
                                                <span>Accommodation Type</span>
                                            </a>
                                            <ul class="ml-menu">
                                                <li>
                                                    <a href="create-accommodation-type.php">
                                                        <i class="material-icons">add</i>
                                                        <span>Add New</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manage-accommodation-type.php">
                                                        <i class="material-icons">list</i>
                                                        <span>Manage</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="menu-toggle">
                                                <i class="material-icons">chevron_right</i>
                                                <span>Accommodation Facilities</span>
                                            </a>
                                            <ul class="ml-menu">
                                                <li>
                                                    <a href="create-accommodation-general-facilities-types.php">
                                                        <i class="material-icons">add</i>
                                                        <span>Add</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manage-accommodation-genaral-facilities-types.php">
                                                        <i class="material-icons">list</i>
                                                        <span>Manage</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                
                                        <li>
                                            <a href="javascript:void(0);" class="menu-toggle">
                                                <i class="material-icons">chevron_right</i>
                                                <span>Room Facilities</span>
                                            </a>
                                            <ul class="ml-menu">
                                                <li>
                                                    <a href="create-room-facility-types.php">
                                                        <i class="material-icons">add</i>
                                                        <span>Add</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manage-room-facility-types.php">
                                                        <i class="material-icons">list</i>
                                                        <span>Manage</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">local_offer</i>
                                        <span>Offer</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="create-offer.php">
                                                <i class="material-icons">add</i>
                                                <span>Add New</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="manage-offer.php">
                                                <i class="material-icons">list</i>
                                                <span>Manage</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="arrange-offer.php">
                                                <i class="material-icons">compare_arrows</i>
                                                <span>Arrange</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">event_available</i>
                                        <span>Booking</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="manage-trasport-booking.php">
                                                <i class="material-icons">directions_car</i>
                                                <span>Transports</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="manage-rentercar-booking.php">
                                                <i class="material-icons">departure_board</i>
                                                <span>Rent a Cars</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="create-offer.php">
                                                <i class="material-icons">airline_seat_individual_suite</i>
                                                <span>Accommodation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="create-offer.php">
                                                <i class="material-icons">map</i>
                                                <span>Tour Packages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                               
                              
                -->                
               
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pin_drop</i>
                        <span>Location Manager</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">chevron_right</i>
                                <span>District</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="create-district.php">
                                        <i class="material-icons">add</i>
                                        <span>Add New</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="manage-district.php">
                                        <i class="material-icons">list</i>
                                        <span>Manage</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="arrange-district.php">
                                        <i class="material-icons">compare_arrows</i>
                                        <span>Arrange</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">chevron_right</i>
                                <span>City</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="create-city.php">
                                        <i class="material-icons">add</i>
                                        <span>Add New</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="manage-city.php">
                                        <i class="material-icons">list</i>
                                        <span>Manage</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="arrange-city.php">
                                        <i class="material-icons">compare_arrows</i>
                                        <span>Arrange</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);">BY : UoVT SOF Group Project 1</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>