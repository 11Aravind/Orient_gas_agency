<?php
include 'top.php';
error_reporting(0);
// include 'connect.php';
$key=$_SESSION['customer_id'];
$select="SELECT * FROM connection_details Where customer_id=$key";
// print_r($select);
$run=mysqli_query($connect,$select);
$row=mysqli_num_rows($run);
//business table
$select_business="SELECT * FROM business_connection customer_id=$key";
$execute=mysqli_query($connect,$select_business);
// print_r($select_business);
$num_row=mysqli_num_rows($execute);
if($row>0)
{
  $get=mysqli_fetch_assoc($run);
  $purpose=$get['purpose'];
}
 if($num_row>0)
{
  $fetch=mysqli_fetch_assoc($run);
  $purpose=$fetch['purpose'];
}


if($_SESSION['customer_id']== '')
{
  header('location:index.php');
}
?><style>
	input[type="submit"]{
	float: right;
    background: blue;
    color: white;
    border-color: blue;
    border-radius: 4px;
    /*width: 117px;
    height: 34px;*/
    
    margin-bottom: 52px;
    margin-left: 5p;
    margin-right: 8px;	
	}
  #kycformcontainer{
    padding: 30px 20px;
    box-shadow: #00000040 0px 0px 19px 0px;
    margin-bottom: 44px;
     margin-left: 51px;
     margin-right: 51px;
     margin-top: 24px;
  }
  #kycheading{
    margin-top: 50px;
  }
  #addrss_headingaaaa{
    margin-top: 36px;
  }
  #payment{
    display:flex;border: 1px solid black;
    margin-bottom: 20px;
  }
  #kycsubmitBtn{
    float:right;
    margin-left: 66%;
  }
</style>
<div id="kycformcontainer">
		<!-- heading start-->
    <!-- <div class="col-12"> -->  
		<center id="kycheading">
			<h1><u>Changing address</u></h1>
			<p>(Field marked with * are mandatory)</p>
		</center>
 <form method="POST" enctype="multipart/form-data">
       <?php
       if($purpose=='Home')
       {
       ?>
		<h4 style="margin-left: 51px;"><u>TO Address</u></h4>
		<!-- heading close -->
		<!-- form starteing -->
    <!-- <form method="POST" enctype="multipart/form-data"> -->
		
      <!-- homecontainer startein -->
  
<div id="homecontainer">
			<div class="form-row" >

            <div class="col-md-4 mb-3">
                    <label for="validationDefault01">House Name*</label>
                    <input type="text" class="form-control" id="house_name" name="house_name"  >
            </div>
            <div class="col-md-4 mb-3">
                      <label for="validationDefault02">House Number*</label>
                      <input type="text" class="form-control" id="house_no" name="house_no"  >
            </div>
            <div class="col-md-4 mb-3">
                  <label for="validationDefaultUsername">Housing Complex</label>
                   <div class="input-group">
                      <input type="text" class="form-control" id="house_complx" name="house_complx"
                             aria-describedby="inputGroupPrepend2" >
                    </div>
              </div> 
              <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Floar Number</label>
                            <input type="text" class="form-control" id="flate_no" name="flate_no">
                </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Street Name*</label>
                    <input type="text" class="form-control" id="street_name" name="street_name"  >
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">City*</label>
                    <div class="input-group">
                              <input type="text" class="form-control" id="city" name="city" aria-describedby="inputGroupPrepend2">
                    </div>
                        </div>
                         <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Post Office*</label>
                    <input type="text" class="form-control" id="post_office" name="post_office"  >
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Pincode*</label>
                    <div class="input-group">
                              <input type="text" class="form-control" id="pincode" name="pincode" aria-describedby="inputGroupPrepend2" >
                    </div>
                        </div>

                         <div class="col-md-4">
                          <label class="mr-sm-1" for="inlineFormCustomSelect">District*</label>
                          <select class="custom-select mr-sm-1" id="district" name="district">
                            <option selected>--Select--</option>
                            <option >Thiruvananthapuram</option>
                            <option >Kollam</option>
                            <option >Alappuzha</option>
                            <option > Pathanamthitta</option>
                            <option >Kottayam</option>
                            <option >Idukki</option>
                            <option >Ernakulam</option>
                            <option >Thrissur</option>
                            <option >Palakkad</option>
                            <option >Malappuram</option>
                            <option >Kozhikode</option>
                            <option >Wayanad</option>
                            <option >Kannur</option>
                            <option >Kasaragod</option>
                          </select>       
                          </div> 
                         <div class="col-md-6">
                              <label class="mr-sm-1" for="inlineFormCustomSelect">Proof*</label>
                              <select class="custom-select mr-sm-1" id="proof_cat" name="proof_cat">
                                <option selected>--Select--</option>
                                <option >house rent resipt</option>
                                <option >house karam adacha rasidhe</option>
                                    </select>
                            </div>
                         <div class="col-md-6 mb-3">
                          <label for="validationDefaultUsername">Upload Proof *</label>
                          <div class="input-group">
                                    <input type="file" class="form-control" id="" name="proof" aria-describedby="inputGroupPrepend2" >
                          </div>
                              </div>
</div>
</div>
<!-- homecontainer end -->

<!-- business category start -->
<?php 
}else{
?> 
<div id="businesscontainer" >
  <div class="form-row" style="margin: 20px;">

                <div class="col-12" id="addrss_heading"><h4 ><u>Shop Address</u></h4></div>
                  <!-- Address section starting -->
                        <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Shop Name*</label>
                    <input type="text" class="form-control"  name="shop_name" >
                  </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Place*</label>
                <input type="text" class="form-control" name="shope_place"  >
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">City*</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="shop_city"
                           aria-describedby="inputGroupPrepend2" >
                </div>
                    </div>
                    <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Post Office*</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="shop_post_office" 
                           aria-describedby="inputGroupPrepend2" >
                </div>
                    </div>
                          <div class="col-md-4 mb-3">
                      <label for="validationDefaultUsername">Pincode*</label>
                      <div class="input-group">
                          <input type="text" class="form-control" name="shope_pincode" 
                                 aria-describedby="inputGroupPrepend2" >
                      </div>
                          </div>
                          <div class="col-md-4">
                      <label class="mr-sm-1" for="inlineFormCustomSelect">District*</label>
                      <select class="custom-select mr-sm-1" name="shope_district">
                        <option selected>--Select--</option>
                        <option >Thiruvananthapuram</option>
                        <option >Kollam</option>
                        <option >Alappuzha</option>
                        <option > Pathanamthitta</option>
                        <option >Kottayam</option>
                        <option >Idukki</option>
                        <option >Ernakulam</option>
                        <option >Thrissur</option>
                        <option >Palakkad</option>
                        <option >Malappuram</option>
                        <option >Kozhikode</option>
                        <option >Wayanad</option>
                        <option >Kannur</option>
                        <option >Kasaragod</option>
                      </select>       
                     </div>
                    <div class="col-md-6">
                          <label class="mr-sm-1" for="inlineFormCustomSelect">Proof *</label>
                          <select class="custom-select mr-sm-1" id="" name="shope_proof_category">
                            <option selected>--Select--</option>
                            <option >Karam adacha resipt</option>
                            <option >Vadaka cheete</option>
                            
                          </select>       
                    </div>


                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Upload Proof*</label>
                              <div class="input-group">
                                <input type="file" class="form-control"  name="shope_upload_proof"
                                       aria-describedby="inputGroupPrepend2" >
                            </div>
                                </div>
</div>
</div>
<?php } ?>
<!-- business category end -->

<div class ="col-md-12"style="height: 58px;">
  <input type="submit"class="btn btn-primary" name="changing_address"  >
</div>
                 

  <?php 
if(isset($_POST['changing_address']))
{
  
$house_name=$_POST['house_name'];
// echo $_POST['house_name'];
$house_no=$_POST['house_no'];
$house_complx=$_POST['house_complx'];
$city=$_POST['city'];
$street_name=$_POST['street_name'];
$pincode=$_POST['pincode'];
$post_office=$_POST['post_office'];
$flate_no=$_POST['flate_no'];
$proof_cat=$_POST['proof_cat'];
$proof=$_POST['proof'];
$district=$_POST['district'];




$shop_name=$_POST['shop_name'];
$shope_place=$_POST['shope_place'];
$shop_city=$_POST['shop_city'];
$shop_post_office =$_POST['shop_post_office'];
$shope_pincode=$_POST['shope_pincode'];
$shope_district =$_POST['shope_district'];
$shope_proof_category =$_POST['shope_proof_category'];
$shope_upload_proof =$_POST['shope_upload_proof'];


if($num_row<0  || $row<0)
// if($num_row<=0 && $row<=0)
{
// echo "<script>alert('Pls register kyc')</script>";
  echo "<script>alert('Pls register in kyc form')</script>";
} 
else
{
  if($purpose=='Home')
       {
$insert="INSERT INTO temp_address values('','$key','$house_name','$house_no','$house_complx','$city','$street_name','$pincode','$post_office','$flate_no','$district','$proof_cat','$proof','under process')";
// print_r($insert);
$run=mysqli_query($connect,$insert);
$primary=mysqli_insert_id($connect);
// print_r($insert);
}
else
{
 $insert="INSERT INTO business_change_address values('','$key','$shop_name','$shope_place','$shop_city','$shop_post_office','$shope_pincode','$shope_district','$shope_proof_category','$shope_upload_proof','under process')";
// print_r($insert);


$run=mysqli_query($connect,$insert);
$primary=mysqli_insert_id($connect); 
}
// echo "<script>alert('$primary')</script>";
// echo $primary;
echo "<script>window.location.href='give_applicationno.php?appno=$primary'</script>";
}
}

 ?>
 
  
  </form>
    <!-- form end -->
  </div>


<?php

include 'footer.php';
?>