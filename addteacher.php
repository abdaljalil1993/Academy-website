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
                                    <li><a href="admin.php">Home</a></li>
                                    <li><a href="#">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="addteacher.php">Add Teacher</a></li>
                                            <li><a href="tm.php">Manage Teacher</a></li>
                                            <li><a href="addcourse.php"> Add Course</a></li>
                                            <li><a href="addbook.php">Add Book</a></li>
                                            <li><a href="addpost.php">Add Post</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                   
                                    <li><a href="cm.php">Course Management</a></li>
                                   <li><a href="sm.php">Student Management</a></li>

                                    
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
    <form action="addteacher.php" method="post">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h2 class="text-center" style="font-weight: bold;font-family: cursive;"><i class="fa fa-user"></i>Teacher Information </h2>
        </div>
        <div class="panel-body">
            <input type="text" name="name" placeholder="enter name" class="form-control"><br>
            <input type="email" name="email" placeholder="enter email" class="form-control"><br>

             <input type="password" placeholder="enter password" name="pass" class="form-control"><br>
             <input type="text" placeholder="enter phone number" name="phone" class="form-control"><br>
</form>


<div class="col-xs-5"></div>
              <input type="submit" style="font-size: 18px;font-weight: bold;font-family: cursive;" name="log" value="Add Teacher " class="btn btn-success btn-lg">
              
        </div>

        <div class="panel-footer">
            <h3 class="text-center text-success">Academy Team</h3>
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


    <?php
   include'conn.php';
 $name=isset($_POST['name'])?$_POST['name']:'';
    $phone=isset($_POST['phone'])?$_POST['phone']:'';
   $email=isset($_POST['email'])?$_POST['email']:'';
    $pass=isset($_POST['pass'])?$_POST['pass']:'';
    $newpass=md5($pass);
  
    if(isset($_POST['log']))
    {
    $res=mysqli_query($conn,"insert into user(name,email,password,type,phone) 
        values('$name','$email','$newpass',1,'$phone')");
   if(isset($res))
   {
            echo'<script>alert("created successfully ");</script>';

   }
else{
            echo'<script>alert("failed..try again");</script>';

}
}
   ?>