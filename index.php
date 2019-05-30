<?php
require_once	"conn.php";
require_once	"page1.php";
?>
<html>
<head>
    <title>
        XYN NEWS
    </title>
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.css">
  -->  <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>


<!--Header, will contain the title and the navigation bar-->
<!-- ##### Header Area Start ##### -->
<header class="header-area" style="padding-bottom: 10px; ">

    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="archive.html">Archive</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="archive.html">Archive</a></li>
                                        <li><a href="video-post.html">Single Video Post</a></li>
                                        <li><a href="single-post.html">Single Post</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="submit-video.html">Submit Video</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>

                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
<!--News section-->
<div class="container">
    <div class="row">
        <div class="col-md-8 border-right">
            <div class="card">
                <?php $news_id = 1;?>
                <div class="card-body">

                    <h5 class="card-title"><?php get_news_title($mysql_connection, $news_id);?></h5>


                    <p class="card-text"><?php  get_news_introduction($mysql_connection, $news_id);?></p>


                    <a class="card-link"
                       href="<?php  get_news_link($mysql_connection, $news_id);?>">Business
                        Daily</a>
                </div>
            </div>
            <br>
            <hr/>

            <div class="card">
                <?php $news_id = 2;?>
                <div class="card-body">

                    <h5 class="card-title"><?php get_news_title($mysql_connection, $news_id);?></h5>


                    <p class="card-text"><?php  get_news_introduction($mysql_connection, $news_id);?></p>


                    <a class="card-link"
                       href="<?php  get_news_link($mysql_connection, $news_id);?>">The Star</a>
                </div>
            </div>
            <br>
            <hr/>
            <div class="card">
                <?php $news_id = 3;?>
                <div class="card-body">

                    <h5 class="card-title"><?php get_news_title($mysql_connection, $news_id);?></h5>


                    <p class="card-text"><?php  get_news_introduction($mysql_connection, $news_id);?></p>


                    <a class="card-link"
                       href="<?php  get_news_link($mysql_connection, $news_id);?>">Business
                        Daily</a>
                </div>
            </div>
            <br>
            <hr/>


        </div>


        <!--Will contain shares-->
        <div class="col-md-">
            <div class="card">
                <div class="card-header">
                    Shares
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">

                        <tr>
                            <td>Company</td>
                            <td>Prices</td>
                            <td>Change</td>
                        </tr>
                        </thead>
                        <?php $share_id = 1;?>
                        <tr>
                            <td><?php get_share_title($mysql_connection, $share_id);?></td>
                            <td><?php  get_share_price($mysql_connection, $share_id);?></td>
                            <td class="bg-success"><?php  get_share_percentage_change($mysql_connection, $share_id);?></td>
                        </tr>
                        <?php $share_id = 2;?>
                        <tr>
                            <td><?php get_share_title($mysql_connection, $share_id);?></td>
                            <td><?php  get_share_price($mysql_connection, $share_id);?></td>
                            <td class="bg-success"><?php  get_share_percentage_change($mysql_connection, $share_id);?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Footer, will contain the footnotes, social media and other links-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <!-- Logo -->
                    <a href="index.html" class="foo-logo"><img src="img/core-img/logo2.png" alt=""></a>
                    <p>This is a news Site. Designed by Cyrus for Saraja</p>
                    <div class="footer-social-info">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Categories</h6>
                    <nav class="footer-widget-nav">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                             </ul>
                    </nav>
                </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Other Links</h6>
                    <ul class="footer-tags">

                    </ul>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Contacts</h6>
                    <ul class="footer-tags">

                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

</body>
</html>