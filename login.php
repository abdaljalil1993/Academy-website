<?php
session_start();
ob_start();
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
                                <a href="login.php" class="text-success"><i class="fa fa-user"></i>Register / Login</a>
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
                                    <li><a href="index.html">Home</a></li>
                            <!--        <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Services &amp; Features</a></li>
                                                <li><a href="#">Accordions and tabs</a></li>
                                                <li><a href="#">Menu ideas</a></li>
                                                <li><a href="#">Students Gallery</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Services &amp; Features</a></li>
                                                <li><a href="#">Accordions and tabs</a></li>
                                                <li><a href="#">Menu ideas</a></li>
                                                <li><a href="#">Students Gallery</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Services &amp; Features</a></li>
                                                <li><a href="#">Accordions and tabs</a></li>
                                                <li><a href="#">Menu ideas</a></li>
                                                <li><a href="#">Students Gallery</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <img src="img/bg-img/bg-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </li>
    <li><a href="course.html">Course</a></li>
                                -->
                                  
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
    <form action="login.php" method="post">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h2 class="text-center" style="font-weight: bold;font-family: cursive;"><i class="fa fa-user"></i>LogIn Information</h2>
        </div>
        <div class="panel-body">
            <input type="text" name="email" placeholder="email" class="form-control"><br>

             <input type="password" name="pass" placeholder="password" class="form-control"><br>
<div class="col-xs-5"></div>
              <input type="submit" style="font-size: 18px;font-weight: bold;font-family: cursive;" name="log" value="Log In" class="btn btn-success btn-lg">
              <a href="signup.php" class="text-success " style="font-size: 18px;font-weight: bold;font-family: cursive;"> create new account</a>
        </div>
  <div class="panel-footer">
            <h3 class="text-center text-success">Academy Team</h3>
        </div>
    </div>
</div>
</form>








     <script src="jquery.min.js"></script>
    <!-- Popper js -->

    <!-- Bootstrap js -->
    <script src="bootstrap.min.js"></script>
    <!-- All Plugins js -->

    <!-- Active js -->
   </body>

   <?php
   include'conn.php';

   $email=isset($_POST['email'])?$_POST['email']:'';
    $pass=isset($_POST['pass'])?$_POST['pass']:'';
    $newpass=md5($pass);
    if(isset($_POST['log']))
    {
        if($email == "admin@admin" && $pass == "admin")
        {
            ## echo'<meta http-equiv="refresh" content="0;url=admin.php">';
           header("location:admin.php");
        }
        else{
    $res=mysqli_query($conn,"select * from user where email='$email' and password='$newpass'");
    if(mysqli_num_rows($res)>0)
    {
       $row= mysqli_fetch_array($res);
        $_SESSION['name']=$row['name'];
        if($row['type']==0)
        {
           
        }
        else if($row['type']==1){
            echo'<meta http-equiv="refresh" content="0 ; url=teacher.php">';

        }
        else{
        echo'<meta http-equiv="refresh" content="0 ; url=student.php">';

        }
    }
    else{
        echo'<script>alert("you are not registered ");</script>';
    }

}

}
  
  ob_end_flush(); ?>