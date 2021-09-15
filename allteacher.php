<?php
session_start();
if(empty($_SESSION['name']))
header("location: login.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Academy </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">


    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="bootstrap.min.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
  

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="login.php" class="text-success"><i class="fa fa-user"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
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
                                    <li><a href="student.php">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="allcourse.php">Course</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="about-us.html">Our Team</a></li>
                                    <li><a href="allcourse.php">Course</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+963 988 582 010"><i class="icon-telephone-2"></i> <span> +963 988 582 010</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


<div class="container">
    <div style="height: 110px"></div>
  <div class="row">
  	<div class="col-xs-12 col-md-4 panel panel-success">
  		<div class="panel-heading"><h4 class="text-success text-center">Fadi Debow</h4> </div>
  		<div class="panel-bode">
  			<img src="img/blog-img/1.jpg" style="width: 100%;height: 180px" class="img-thumbnail img-responsive">
  			<p>asdasdasdasdasdas</p>
  		</div>

  		<div class="panel-footer">
  			<div class="col-xs-5"></div>
  			<a href="book.php" class="btn btn-success btn-block">see prfile</a>
  		</div>
  		
  	</div>


   	<div class="col-xs-12 col-md-4 panel panel-success">
  		<div class="panel-heading"><h4 class="text-success text-center">Ali Ahamd</h4> </div>
  		<div class="panel-bode">
  			<img src="img/blog-img/2.jpg" style="width: 100%;height: 180px" class="img-thumbnail img-responsive">
  			<p>asdasdasdasdasdas</p>
  		</div>

  		<div class="panel-footer">
  			<div class="col-xs-5"></div>
  			<a href="book.php" class="btn btn-success btn-block">see prfile</a>
  		</div>
  		
  	</div>



   	<div class="col-xs-12 col-md-4 panel panel-success">
  		<div class="panel-heading"><h4 class="text-success text-center">Ahmad Mohammad</h4> </div>
  		<div class="panel-bode">
  			<img src="img/blog-img/3.jpg" style="width: 100%;height: 180px" class="img-thumbnail img-responsive">
  			<p>asdasdasdasdasdas</p>
  		</div>

  		<div class="panel-footer">
  			<div class="col-xs-5"></div>
  			<a href="book.php" class="btn btn-success btn-block">see prfile</a>
  		</div>
  		
  	</div>
 


   	<div class="col-xs-12 col-md-4 panel panel-success">
  		<div class="panel-heading"><h4 class="text-success text-center">Khaled ammar</h4> </div>
  		<div class="panel-bode">
  			<img src="img/blog-img/add.png" style="width: 100%;height: 180px" class="img-thumbnail img-responsive">
  			<p>asdasdasdasdasdas</p>
  		</div>

  		<div class="panel-footer">
  			<div class="col-xs-5"></div>
  			<a href="book.php" class="btn btn-success btn-block">see prfile</a>
  		</div>
  		
  	</div>
 







     
    </div>
</div>








     <script src="jquery.min.js"></script>
    <!-- Popper js -->

    <!-- Bootstrap js -->
    <script src="bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Active js -->
   </body>