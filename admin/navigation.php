<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" width="70%">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" width="70%">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" width="70%">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" width="70%">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!--                <li class="menu-title">Essentials</li>
                                <li>
                                    <a href="create-users.php">
                                        <i class="bx bx-user"></i>
                                        <span>Manage CMS Users</span>
                                    </a>
                                </li>-->

                <!--                <li>
                                    <a href="manage-district.php">
                                        <i class="bx bx-map"></i>
                                        <span>Manage District</span>
                                    </a>
                                </li>-->
                <li>
                    <a href="index.php">
                        <i class="bx bx-home "></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php
                if ($_SESSION['type'] == 1) {
                    ?>

                    <li class="menu-title">Essentials</li>
                    <li>

                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Manage CMS Users</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="manage-user-type.php">Manage User Type </a></li>
                            <li><a href="create-users.php">Manage Users</a></li>
                        </ul>

                    </li>
                    <?php
                }
                ?>
                <li class="menu-title">Website Content</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-chart "></i>
                        <span>Centeres</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="manage-center-type.php">Manage Centers Type </a></li>
                        <li><a href="manage-district.php">Districts</a></li>
                        <li><a href="manage-center.php">Manage Center</a></li>
                    </ul>
                </li>

               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>