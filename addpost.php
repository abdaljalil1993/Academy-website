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
                                    
                                    
                                      <li><a href="cm.php">Course Manage</a></li>
                                    <li><a href="cm.php">book Manage</a></li>
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
    <form action="addpost.php" method="post">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h2 class="text-center" style="font-weight: bold;font-family: cursive;"><i class="fa fa-file"></i>Add Post </h2>
        </div>
        <div class="panel-body">
            <input type="text" style="color: green;font-size: 19px;" name="tit" placeholder=" Post Title" class="form-control"><br>
            <textarea name="post" style="color: green;font-size: 16px;" cols="173" rows="7" class="form-control" placeholder="write your post here to share"></textarea><br>
          

             

              
        
</form>


<div class="col-xs-5"></div>

              
                <input type="submit" style="font-size: 18px;font-weight: bold;font-family: cursive;" name="log" value="Add Post " class="btn btn-success btn-lg">
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
 $tit=isset($_POST['tit'])?$_POST['tit']:'';
    $post=isset($_POST['post'])?$_POST['post']:'';
 
  
    if(isset($_POST['log']))
    {
    $res=mysqli_query($conn,"insert into post(tit,post,name) 
        values('$tit','$post','".$_SESSION['name']."')");
   if(isset($res))
   {
            echo'<script>alert("added successfully ");</script>';

   }
else{
            echo'<script>alert("failed..try again");</script>';

}
}
   ?>