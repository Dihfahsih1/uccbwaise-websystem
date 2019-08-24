<?php
@ob_start();
session_start();
if (!isset($_SESSION['username'])){ 
    include('include/dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c8e45b6da6ca80012e29a9c&product=sticky-share-buttons"></script>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>UCC-Bwaise</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo.jpg">

    <!-- Core  Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
   
    <!-- ##### Header Area Start ##### -->
    <header class="header-area" >

        <!-- ***** Top Header Area ***** -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex flex-wrap align-items-center justify-content-between">
                            <!-- Top Header Meta -->
                             <!-- Top Header Meta -->
                            <div class="top-header-meta d-flex flex-wrap">
                                <a href="#" class="open" data-toggle="tooltip" data-placement="bottom" title="10 Am to 6 PM"><i class="fa fa-clock-o" aria-hidden="true"></i> <span>Opening Hours - 09AM to 6:00PM</span></a>
                                <!-- Social Info -->
                                <div class="top-social-info">
                                    <a href="https://api.whatsapp.com/send?phone=+256701614086&text=Hi, I contacted you Through your website." class="fa fa-whatsapp"></a>
                                    <a href="https://www.facebook.com/Lwaki-Olimulamu-UCC-Bwaise-129646007691439"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.youtube.com/channel/UCFMCB_zTwBQNunbpjBsPcSw"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Top Header Meta -->
                            <div class="top-header-meta">
                                <a href="mailto:bwaiseucc@gmail.com" class="email-address"><i class="fa fa-envelope" aria-hidden="true"></i> <span>bwaiseucc@gmail.com</span></a>
                                <a href="+256772614086" class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <span>+256772614086</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Top Header Area ***** -->

        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu" >
            <div class="classy-nav-container breakpoint-off" >
                <div class="container" >
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/logo.jpg" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">

                                <span></span>
                                <span></span>
                                <span></span>

                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                             <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="events.php">Events</a></li>
                                    <li><a href="sermons.php">Sermons</a></li>
                                    <li><a href="missions.php">Missions</a></li>
                                    <li><a href="contact.php">Contact-Us</a></li>
                                    <li><a href="login.php" class="fa fa-lock" >Admin</a></li>
                                </ul>
                                 <!-- Donate Button -->
                                <a href="#" class="btn crose-btn header-btn">Donate Us</a>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

            
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>
    <?php
} else if(isset($_SESSION['username'])) { 
    include('include/admin.php');

} ?>    
