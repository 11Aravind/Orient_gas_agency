<?php 
include 'top.php';
 ?>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <style type="text/css">
    	body{
    /*margin-top:20px;*/
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0; 
    /*margin-top: 0px   */
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <!-- /Breadcrumb -->
    <?php 
    $forin_key=$_SESSION['customer_id'];
$select="SELECT * from connection_details Where customer_id='$forin_key'";
// print_r($select);
$run=mysqli_query($connect,$select);
$row=mysqli_num_rows($run);
$select_business="SELECT * from business_connection Where customer_id='$forin_key'";
// print_r($select_business);
$run_business=mysqli_query($connect,$select_business);
$num_row=mysqli_num_rows($run_business);
// thanikke kyc il account illa</p>
if($row==0 && $num_row==0)
{
  // echo "<script>alert('thanikke kyc il account illa')</script>";
echo "<div class='col-12' style='width: 100%;height: 300px;background: #efbdbd;'>
      <p style='
    font-size: 29px;
    text-transform: capitalize;
    left: 34%;
    top: 46%;
    position: absolute;
'> thanikke kyc il account illa
</p>
     </div> 
              </div>
            </div>
          </div>";
}
else
{
  $fetch=mysqli_fetch_assoc($run);
  if($fetch['purpose']=='Home')
  {
     ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">             
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php echo "<img src=' ".$fetch['upload_phto']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                    <div class="mt-3">
                      <h4><?php echo $fetch['name'] ?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Phone Number</h6>
                    <span class="text-secondary"><?php echo $fetch['mobileno']; ?></span>
                  </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Land Line</h6>
                    <span class="text-secondary"><?php 
if($fetch['landline']=='')
                    echo  "None";
                  else
                    echo $fetch['landline'];
                  ?></span>
                  </li>
                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Purpose</h6>
                    <span class="text-secondary"><?php echo $fetch['purpose'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Stove Status</h6>
                    <span class="text-secondary"><?php echo $fetch['stove_status'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Ration Card Status</h6>
                    <span class="text-secondary"><?php echo $fetch['ration_card_status'] ?></span>
                  </li>
                 <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">District</h6>
                    <span class="text-secondary"><?php echo $fetch['district']; ?></span>
                  </li>
                
                  
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3" style="
    height: 97%;
    padding: 38px;
">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
if($fetch['emailid']=='')
  echo "None";
else
  echo $fetch['emailid'];


                       ?>          
                                 </div>
                  </div>
                  <hr>
                    <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['dob']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['gender']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php  
echo $fetch['house_name']; echo ",";
echo $fetch['post_office']; echo ",";
echo $fetch['streetname']; echo ",";
echo $fetch['district']; echo ",";

echo $fetch['pincode']; 
                       ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Transaction No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 

                      echo $fetch['transaction_no']; ?>
                    </div>
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      
<?php }
else{ ?>


<!-- // business start -->
<?php    $fetch=mysqli_fetch_assoc($run_business);
 ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">             
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php echo "<img src=' ".$fetch['upload_photo']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                    <div class="mt-3">
                      <h4><?php echo $fetch['name'] ?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Phone Number</h6>
                    <span class="text-secondary"><?php echo $fetch['mobile_no']; ?></span>
                  </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Land Line</h6>
                    <span class="text-secondary"><?php 
if($fetch['landline']=='')
                    echo  "None";
                  else
                    echo $fetch['landline'];
                  ?></span>
                  </li>
                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Purpose</h6>
                    <span class="text-secondary"><?php echo $fetch['purpose'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Stove Status</h6>
                    <span class="text-secondary"><?php echo $fetch['stovestatus'] ?></span>
                  </li>
                  <!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Ration Card Status</h6>
                    <span class="text-secondary"><?php  ?></span>
                  </li> -->
                 <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">District</h6>
                    <span class="text-secondary"><?php echo $fetch['district']; ?></span>
                  </li>
                
                  
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3" style="
    height: 97%;
    padding: 38px;
">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
if($fetch['emailid']=='')
  echo "None";
else
  echo $fetch['emailid'];


                       ?>          
                                 </div>
                  </div>
                  <hr>
                    <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['dob']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['gender']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php  
echo $fetch['shop_name']; echo ",";
echo $fetch['post_office']; echo ",";
echo $fetch['place']; echo ",";
echo $fetch['district']; echo ",";

echo $fetch['pincode']; 
                       ?>
                    </div>
                  </div>
                  <hr>
                  <!-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Transaction No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 

                      echo $fetch['transaction_no']; ?>
                    </div>
                  </div> -->
                </div>
              </div>
              
              </div>
            </div>
          </div>
       

<!-- // business end -->

<?php } ?>
<?php } ?>
 <?php 
include 'footer.php';
  ?>
<!-- <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script> -->
