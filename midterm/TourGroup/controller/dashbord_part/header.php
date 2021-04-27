<?php

 session_start();

// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:/Tour Group/users/login.php');
// }

 ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title>ADMIN DASHBORD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/Tour Group/dashbord_assets/images/favicon.ico">

        <!-- App css -->
        <link href="/Tour Group/dashbord_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/Tour Group/dashbord_assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/Tour Group/dashbord_assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/Tour Group/dashbord_assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="/Tour Group/dashbord_assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="/Tour Group/dashbord_assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="/Tour Group/dashbord_assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="/Tour Group/dashbord_assets/images/users/4444.png" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?= $_SESSION['name'];?></a> </h5>
                        <p class="text-muted"><?= $_SESSION['email'];?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="/Tour Group/dashbord.php">
                                    <i class="fi-air-play"></i> <span>Home </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/midterm/TourGroup/view/registerallupdate.php">Add User</a></li>
                                    <li><a href="/midterm/TourGroup/view/allusers.php">View Users</a></li>
                                    <li><a href="/midterm/TourGroup/view/trash.php">Trash</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> All Events </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/midterm/TourGroup/view/addeventsallupdate.php">Add Events</a></li>
                                    <li><a href="/midterm/TourGroup/view/allevents.php">View Events</a></li>
                                    <li><a href="/midterm/TourGroup/view/eventstrash.php">Trash</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Room Book </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/Tour Group/users/addroomsallupdate.php">Add Rooms</a></li>
                                    <li><a href="/Tour Group/users/allrooms.php">View Rooms</a></li>
                                    <li><a href="/Tour Group/users/roomstrash.php">Trash</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Food Section </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/Tour Group/users/addfoodsallupdate.php">Add Food item</a></li>
                                    <li><a href="/Tour Group/users/allfoods.php">View Food item</a></li>
                                    <li><a href="/Tour Group/users/foodstrash.php">Trash</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Payment Section </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/Tour Group/users/payment.php">Payment Receive</a></li>

                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Feathers </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/Tour Group/users/event.html">Events</a></li>
                                    <li><a href="/Tour Group/users/room.html">Book Hotel</a></li>
                                    <li><a href="/Tour Group/users/food.html">Food Menu</a></li>

                                    <li><a href="/Tour Group/users/Transport.php">Book Transport</a></li>
                                </ul>
                            </li>

                            <!-- <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Compose Email</a></li>
                                </ul>
                            </li> -->

                            <!-- <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Compose Email</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html">
                                    <i class="fi-command"></i> <span> Widgets </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-google.html">Google Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Chart</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-feather.html">Feather Icons</a></li>
                                    <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                    <li><a href="tables-foo.html">Foo Tables</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li> -->

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Settings </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">

                                    <li><a href="/Tour Group/users/login.php">Login</a></li>
                                    <li><a href="/Tour Group/users/register.php">Register</a></li>
                                    <li><a href="/../midterm/view/home.html">Logout</a></li>

                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">




                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                 <span class="ml-1"><?= $_SESSION['name'];?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>


                                    <!-- item-->
                                    <a href="/../midterm/view/home.html" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title"><h2>Standard Tour Corporation Bangladesh</h2> </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to admin panel </li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->
