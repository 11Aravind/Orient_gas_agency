<?php 
include 'connect.php';
 ?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Orient gas agency back</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- pluge in data table jquery css -->
      <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"> -->
      <link rel="stylesheet" href="assets/css/dataTables.min.css">
      <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
               
                  <!-- adding -->
<!-- <li class="menu-item-has-children dropdown">
                     <a href="table.php" > tables</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="#" >Today_info</a>
                  </li> -->
 <li class="menu-item-has-children dropdown">
                     <a href="./customer_details.php" > Customer Details</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="viewconnection_detail.php" >Connections Detailes</a>
                  </li>   
                   
                  <li class="menu-item-has-children dropdown">
                     <a href="view_secondcylinder.php" >Second Cylender</a>
                  </li> 
  <li class="menu-item-has-children dropdown">
                     <a href="view_gas_bookingdet.php" >Gas Booking Request</a>
                  </li>
                 <li class="menu-item-has-children dropdown">
                     <a href="view_changeconnection.php" >Changing Connection</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="view_Addresschangingreq.php" >Changing Address</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="view_businessAddresschangingreq.php" >Changing Business Address</a>
                  </li>
 <li class="menu-item-has-children dropdown">
                     <a href="viewcomplaints.php" >Complents</a>
                  </li>
<li class="menu-item-has-children dropdown">
                     <a href="view_staffs.php" >Add Main Employs</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="viewprice_status.php" >Price and Gas center Status</a>
                  </li>
                  

<!-- Nav Item - Tables -->

                  <!-- ending -->
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="photo/logo.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="photo/logo2.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <?php if(isset($_SESSION['admin_id']))
{
   echo "  <div class='top-right'>
               <div class='header-menu'>
                  <div class='user-area dropdown float-right'>
                     <a href='#' class='dropdown-toggle active' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Welcome Admin</a>
                     <div class='user-menu dropdown-menu'>
                        <a class='nav-link' href='logout.php'><i class='fa fa-power-off'></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>";
}
             ?>
          
         </header>