<?php 
include 'connect.php';
//error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Orient gas agency front</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/downloadcss.css">

  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" > -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" "></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js""></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" "></script> -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <!-- Javascript files--> 
<!-- datatable plugin -->
<!-- <link rel="icon" href="images/favicon.ico" type="image/ico"> -->
<link rel="stylesheet" href="../back/assets/css/dataTables.min.css">
    </head>
    <!-- body -->
    <body class="main-layout">
      <!-- loader  -->
    <!--   <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
       </div> -->
       <!-- end loader --> 
       <!-- header -->
       <header >
         <!-- header inner -->
         <div class="header" style="    box-shadow: #00000040 0px 0px 19px 0px;">
          <!-- <div class="head_top"> -->
           <!--     <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>long established fact that a reader will be </p>
                    </div>
                  </div>
               </div>
             </div> -->
             <!-- </div> -->
             <!-- margin-left: -55px;margin-right: -90px; -->
             <div class="container">
              <div class="row" style="">
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                <div class="full">
                 <div class="center-desk">
                  <div class="logo"> <!-- <a href="index.html"> --><a href="index.php"><img src="images/logo6.jpeg" style="width: 188px; height: 64px;margin-top:5px ;margin-bottom: 5px;" alt="logo"/></a><!-- </a> --> </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 ">
              <!-- col-lg-7 col-md-9 col-sm-9 -->
              <div class="menu-area">
               <div class="limit-box">
                <nav class="main-menu">
                 <ul class="menu-area-main">
                  <!-- <li class="active"> <a href="index.html"></a> </li> -->
                  <li class="active"> <a href="index.php">Home</a> </li>
                  
                  <!-- <li> <a href="about.html">Gas Booking</a> </li> -->
                  <!-- <li> <a href="#">Gas Booking</a> </li> -->
                  <!-- <li> <a href="blog.html"> Second</a> </li> -->
                  <!-- <li> <a href="contact.html">Contact</a> </li> -->
                  <!-- <li> <a href="contact.html">Cont</a> </li> -->
                <!--   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Service
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="kycform.php">New Connection</a>
                    <a class="dropdown-item" href="second_cylinder_applicationform.php">Second Cylenter</a>
                    <a class="dropdown-item" href="#">Change Connection</a>
                    <a class="dropdown-item" href="#">Change Address</a>

                    <a class="dropdown-item" href="#">Change Phone Number</a>

                    <div class="dropdown-divider"></div>
                  </div>
                </li> -->
                <!-- <li> <a href="Gas_Booking_form.php?page=other" id="gasbooking"name="gasbooking">Gas Booking</a> </li> -->
                <!-- <li class='mean-last'> <a href='customer_complents.php'>complaint</a> </li> -->
 <?php 
      if(isset($_SESSION['customer_id']))
      {
        echo " 

        <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#'' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                     Service
                   </a>
                   <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='kycform.php'>New Connection</a>
                    <a class='dropdown-item' href='second_cylinder_applicationform.php'>Second Cylenter</a>
                    <a class='dropdown-item' href='change_connection.php''>Change Connection</a>
                    <a class='dropdown-item' href='change_address.php'>Change Address</a>

                    <a class='dropdown-item' href='change_phoneno.php'>Change Phone Number</a>

                    <div class='dropdown-divider'></div>
                  </div>
                </li>";
echo " <li> <a href='Gas_Booking_form.php?page=other' id='gasbooking'name='gasbooking'>Gas Booking</a> </li>";
echo "  <li class='mean-last'> <a href='customer_complents.php?page=other'>complaint</a> </li>
<li> <a href='status.php'>status</a> </li>";

      }
      else{
         echo "<li> <a href='#about'>About</a> </li> <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#'' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                     Service
                   </a>
                   <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='?page=other'>New Connection</a>
                    <a class='dropdown-item' href='?page=other'>Second Cylenter</a>
                    <a class='dropdown-item' href='?page=other''>Change Connection</a>
                    <a class='dropdown-item' href='?page=other'>Change Address</a>

                    <a class='dropdown-item' href='?page=other'>Change Phone Number</a>

                    <div class='dropdown-divider'></div>
                  </div>
                </li>";
      echo " <li> <a href='?page=other' id='gasbooking'name='gasbooking'>Gas Booking</a> </li>";
      echo "  <li class='mean-last'> <a href='?page=other'>complaint</a> </li>
      ";

      }
?>
                <!-- <li class="mean-last"> <a href="customer_profile.php">My profile</a> </li> -->
                <li> <a href="contact.php">Contact</a> </li>

              </ul>
            </nav>
          </div>
        </div>

      </div>

      <!-- start login and reg button-->
      <?php 
      if(isset($_SESSION['customer_id']))
      {
       echo "   <div class='top-right' style='margin-top:27px;'>
       <div class='header-menu'>
       <div class='user-area dropdown float-right'>
       <a href='#'' class='dropdown-toggle active' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='color: black;'><i class='fa fa-user' aria-hidden='true'></i>
       Accound</a>
       <div class='user-menu dropdown-menu'>
       <a class='nav-link' href='profile.php' style='color: black;'>My Profile</a>
       <a class='nav-link' href='logout.php' style='color: black;'><i class='fa fa-sign-out' aria-hidden='true'></i>Logout</a>
       </div>

       </div>
       </div>
       </div>";
             // echo "<script>location.reload();</script>";
     }


     else
     {
      echo "<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2'    style='margin-top: 25px'>
      <li><a  href='#' style='background: white;''>    <button id='showCustomerPopUpBtn' type='button' class='btn btn-primary' data-toggle='modal' data-target='' data-whatever='@mdo'>Signup/login</button></a></li>
      </div>"; 

    }
    ?>
    <!--end of login and reg button-->
  </div>
</div>


<!--start of login page-->
<div class="modal fade" id="showCustomerPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Customer ....</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="print_error_msg" style="font-size: 18px;height: 42px;color: red;text-align: center;padding: 8px;background: rgb(236 233 233);"></div>


      <div class="modal-body">
        <form method="POST">
          <!--start radio button-->
          <div class="radio_Buttons">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" value="login" name="customRadioInline1" class="a custom-control-input">
              <label class="custom-control-label" for="customRadioInline1">Login</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" value="signIn" name="customRadioInline1" class="a custom-control-input">
              <label class="custom-control-label" for="customRadioInline2">Signup</label>
            </div>
          </div>
          <!--end of radio button-->
          <!--login page-->
          <div id="loginform_container">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Mobile Number</label>
              <input type="text" class="form-control" name="mobile_no" id="mobile_no">
              <div id="name_error" style="color: red"></div>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Password</label>
              <input type="password" class="form-control"name="loginpassword" id="login_password">
              <div id="password_error" style="color: red"></div>
            </div>
            <a href="forgot_password.php"> <p>Forgot password</p></a>
            <small style="color:blue;">Default password is date of birth</small>
            <div class="modal-footer">

             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

             <button type="submit" name="loginbtn"class="btn btn-primary" id="login_Btn">Login</button>
           </div>
           <!-- login php code starting -->
           <?php 
           // error_reporting(0);
           if(isset($_POST['loginbtn']))
           {
            $mobile_no=$_POST['mobile_no'];
            $loginpassword=$_POST['loginpassword'];

        // echo "<script>alert($loginname)</script>";
        // print_r($loginname);
   $login_select="SELECT * FROM customer_details where phone_number='$mobile_no' && password='$loginpassword'";

// echo $login_select;
 // print_r ($login_select); 
            $run=mysqli_query($connect,$login_select);
// while($fetch=mysqli_fetch_assoc())
// {
// if($loginname=$fetch['username'] && $loginpassword=fetch['password']) 
// {
//   $_SESSION['customer_id']=$fetch['customer_id'];
//   echo "haha";
// } 
// }
// 
// echo $_SESSION['customer_id'];
            $row=mysqli_num_rows($run);
// print_r($row);
// echo "aa";
// echo $row;
            if($row>0)
            {
              while($fetch=mysqli_fetch_assoc($run))
              {
                echo $fetch['customer_id'];

                if($mobile_no==$fetch['phone_number'] && $loginpassword==$fetch['password']) 
                {
                  $forin=$fetch['customer_id'];
                  $select="SELECT * from connection_details where customer_id=$forin";
                  print_r($select);
                  $run=mysqli_query($connect,$select);
                  $row=mysqli_num_rows($run);
                  // business_connection
                  $select_business="SELECT * from business_connection where customer_id=$forin";
                  print_r($select_business);
                  $execute=mysqli_query($connect,$select_business);
                  $num_row=mysqli_num_rows($execute);
                  if($row>0 || $num_row>0)
                  {
                    $get=mysqli_fetch_assoc($execute);
                    $_SESSION['purpose']=$get['purpose'];
                  }
                  
                  $_SESSION['customer_id']=$fetch['customer_id'];
  // echo "<script>alert(".$_SESSION['customer_id'].")</script>";                   
              }
              echo "<script>window.location='./index.php'</script>";
              // header('location:Gas_Booking_form.php'); 

            }
          }
            else
            {
             echo" <script>alert('Username or password is incorrect')</script>";
           
           }   
// if($run=="")
// {
//   alert('username')
// }
// print_r($run);
// echo "<script>console.log($run)</script>";
// echo "<script>alert('aa')</script>";

 // print_r($run);
// while($fetch=mysqli_fetch_assoc($run));
// {
//   if(($fetch['username']==$loginname))
//   {
//     echo "hai";
//     header('location:index.php');
//   }
//   else
//   {
//     echo "hehe";  
//     echo "<script>alert('username or password is wrong')</script>";
//   }
// }
// print_r($fetch);
         }

         ?>


         <!-- login php code end -->
       </div>
       <!--end of login page-->

       <!-- of sign in page-->
       <div id="signinform_container">
        <div class="form-row">
          <div class="col">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" id="signup_name" name="signupname"class="form-control" >
            <!-- <div id="signup_name_error"style="color: red"></div> -->
          </div>
          <div class="col">
            <label for="recipient-name" class="col-form-label">Phone no</label>
            <input type="text" id="Phone_numbrer" name="signupphone_no"class="form-control" placeholder="">
            <!-- <div id="phone_number_error"style="color: red"></div> -->
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="password" id="signup_Password"name="signuppassword" class="form-control" >
            <!-- <span id="password_error"style="color: red"></span> -->

          </div>
          <div class="col">
            <label for="recipient-name" class="col-form-label">Confirm Password</label>
            <input type="password" id="signup_Confirm_Password"class="form-control" >
            <!-- <span id="Confirmpassword_error"style="color: red"></span> -->
          </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button type="submit" id="signup_button" name="signup_button" class="btn btn-primary">SignUp</button>
        </div>
        <!-- signup php code starting insert into db -->
        <?php

        if(isset($_POST['signup_button']))
        {
          $username=$_POST['signupname'];
          $phone_no=$_POST['signupphone_no'];
          $password=$_POST['signuppassword'];
// $_SESSION['username']=$username;
// $_SESSION['password']=$password;
          $select="SELECT * from customer_details WHERE phone_number='$phone_no' || password='$password'";
          // echo "<script>alert(print_r($select))</script>";

          $run=mysqli_query($connect,$select);
          $row=mysqli_num_rows($run);
          // echo $row;
          if($row>0)
          {
echo "<script>alert('This name and password is exiting, pls enter oter name and password ')</script>";
          }
          else
          {
          $insert_query="INSERT INTO customer_details values('','$username','$password','$phone_no')";
          $run_insertquery=mysqli_query($connect,$insert_query);
        }
        }
        ?>

      </div>


      <!--end of signin page-->

    </form>

  </div>
      <!-- <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
        <button type="button" class="btn btn-primary">SignUp</button>
      </div> -->
    </div>
  </div>
</div>
<!--end of login page-->
<!--     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">sign in/login</button> -->
<!-- end header inner --> 
</header>