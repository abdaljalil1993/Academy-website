<?php
session_start();
if(empty($_SESSION['name']))
header("location: login.php");
include'conn.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
mysqli_query($conn,"delete from book where id='$id'");
 echo'<meta http-equiv="refresh" content="0 ; url=bm.php">';
}

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
        <div style="height: 100px;"></div>
        <div class="table-responsive">
            <div >
                <table class="table table-hover">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                         <th>description</th>
                        <th>image</th>
                         <th>auther</th>
                        <th>delete</th>
                         <th>update</th>
                      
                    </tr>

                    <?php
                    include'conn.php';

                    $res=mysqli_query($conn,"select * from book ");
                    if(mysqli_num_rows($res)>0)
                    {
                        while($row=mysqli_fetch_array($res))
                        {
                            echo'
                                <tr>
                                <td>'.$row['id'].'</td>
                                 <td>'.$row['name'].'</td>
                                  <td>'.$row['description'].'</td>
                                   <td><img src="img/'.$row['image'].'" width="130px" height="100px" /></td>

                                    <td>'.$row['auther'].'</td>

 <td><a href="bm.php?id='.$row['id'].'" class="btn btn-danger btn-block">Delete</a></td>

<td><a href="ub.php?id='.$row['id'].'" class="btn btn-success btn-block">Update</a></td>
                                </tr>

                            ';
                        }

                    }
                    else{
                        echo '<h1 class="text-danger">no rows</h1>';
                    }


                    ?>
                      
                      
                 
                </table>
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