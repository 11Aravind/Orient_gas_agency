<?php
include 'top.php';
// include 'connect.php';
if($_SESSION['customer_id']=='')
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
		<center id="kycheading">
			<h1><u>KYC FORM</u></h1>
			<p>(Field marked with * are mandatory)</p>
		</center>
		<h4 style="margin-left: 51px;"><u>Personal details</u></h4>
		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST" enctype="multipart/form-data">
			  <div class="form-row" style="margin: 20px;">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name*</label>
      <input type="text" class="form-control" id="name" name="name"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Date of birth*</label>
      <input type="date" class="form-control" id="dob" name="dob"  >
    </div>
           <div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect" id="">Gender*</label>
      <select class="custom-select mr-sm-1" id="gender" name="gender">
        <option selected>--Select--</option>
        <option >Male</option>
        <option >Female</option>
         <option >Other</option>
        <!-- <option value="3">Three</option> -->
      </select>
    </div>
          <div class="col-md-4 mb-3">
      <label for="validationDefault01">Mobile Number*</label>
      <input type="text" class="form-control" id="mobilno" name="mobilno" >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Land line</label>
      <input type="text" class="form-control" id="landno" name="landno" >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">E-mail ID</label>
      <input type="text" class="form-control" id="emailid" name="emailid"  >
    </div>
   <div class="col-md-6">
      <label class="mr-sm-1" for="inlineFormCustomSelect">Stove status*</label>
      <select name="stove_status"  id="stove_status"class="custom-select mr-sm-1" >
        <option selected>--Select--</option>
        <option >Yes</option>
        <option >No</option>
        <!-- <option value="3">Three</option> -->
      </select>       
</div>
     <div class="col-md-6">
      <label class="mr-sm-1" for="inlineFormCustomSelect" >Purpose*</label>
      <select class="custom-select mr-sm-1" id="purpose" name="purpose">
        <option selected>--Select--</option>
        <option >Home</option>
        <option >Business</option>
        <!-- <option value="3">Three</option> -->
      </select>
    </div>

    <!-- --address -->
  <!--  -->
    
    <div id="homecategory" >

      <div class="form-row" style="margin: 20px;">
    <div class="col-12" id="addrss_heading"><h4 ><u>Address</u></h4></div>
    <!-- Address section starting -->
    <div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect">Rationcard Category*</label>
      <select class="custom-select mr-sm-1" id="rationcardstatus" name="rationcardstatus">
        <option >--Select--</option>
        <option >APL</option>
        <option  >BPL</option>
        <option >Antyodaya Anna Yojana</option>
        <option >Non – Priority</option>
        
      </select>
    </div>
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
                  <!-- address section end -->
                  <!-- uploading photos starting -->
  <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Photo*</label>
      <div class="input-group">
                <input type="file" class="form-control" id="upload_photo" name="upload_photo" aria-describedby="inputGroupPrepend2" >
       </div>
  </div>
<div class="col-md-4 mb-3">
      <label for="validationDefault01">Adhar*</label>
      <input type="file" class="form-control" id="upload_adhar" name="upload_adhar"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Ration card*</label>
      <input type="file" class="form-control" id="upload_rationcard" name="upload_rationcard"  >
    </div>
     </div>
   </div>
      
<!-- uploading photos end -->
<!--     </div>
 -->    <!-- home category end -->
 <!-- buscince cat start -->
   <div id="busciencecategory" style="display: none;" >
      <div class="form-row" style="margin: 20px;">
    <div class="col-12" id="addrss_heading"><h4 ><u>Shop Address</u></h4></div>
    <!-- Address section starting -->
          <div class="col-md-4 mb-3">
      <label for="validationDefault01">Shop Name*</label>
      <input type="text" class="form-control"  id="shop_name" name="shop_name" >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Place*</label>
      <input type="text" class="form-control" id="shope_place" name="shope_place"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">City*</label>
      <div class="input-group">
          <input type="text" class="form-control" id="shop_city" name="shop_city"
                 aria-describedby="inputGroupPrepend2" >
      </div>
          </div>
          <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Post Office*</label>
      <div class="input-group">
          <input type="text" class="form-control" id="shop_post_office" name="shop_post_office" 
                 aria-describedby="inputGroupPrepend2" >
      </div>
          </div>
          <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Pincode*</label>
      <div class="input-group">
          <input type="text" class="form-control" id="shope_pincode" name="shope_pincode" 
                 aria-describedby="inputGroupPrepend2" >
      </div>
          </div>
          <div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect">District*</label>
      <select class="custom-select mr-sm-1"  id="shope_district" name="shope_district">
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
<div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect">Proof *</label>
      <select class="custom-select mr-sm-1" id="shope_proof_category" name="shope_proof_category">
        <option selected>--Select--</option>
        <option >Karam adacha resipt</option>
        <option >Vadaka cheete</option>
        
      </select>       
</div>


  <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Upload Proof*</label>
      <div class="input-group">
          <input type="file" class="form-control" id="shope_upload_proof"  name="shope_upload_proof"
                 aria-describedby="inputGroupPrepend2" >
      </div>
          </div>
          <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Upload Photo*</label>
      <div class="input-group">
          <input type="file" class="form-control" id="shope_upload_photo"  name="shope_upload_photo"
                 aria-describedby="inputGroupPrepend2" >
      </div>
          </div>
          <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Upload Adher*</label>
      <div class="input-group">
          <input type="file" class="form-control" id="shpoe_upload_adhar" name="shpoe_upload_adhar"
                 aria-describedby="inputGroupPrepend2" >
      </div>
          </div>
         
      
          <div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect">Number of cylinder in a month*</label>
      <select class="custom-select mr-sm-1" id="shope_cylinder_count" name="shope_cylinder_count">
        <option selected>--Select--</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        <option >6</option>
        <option >7</option>
        <option >8</option>
        <option >9</option>
        <option >10</option>
      </select>       
</div>
    </div>
  </div>
    
      <!-- buscience category end -->
             

  <!-- payment starting -->
  <div id="paymentcontainer">
      <div class="col-md-12 mb-3 text-center">
<u>      <h3>Payment</h3>
</u>    </div>
    <div class="col-md-12 mb-3 ">
      <h5>Suggested for you </h5><p>(choose any payment method)</p>
    </div>
    <div class="col-md-12 mb-3 ">
       <div class="form-check">
  <input class="form-check-input" type="radio" name="paymentmethord" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Online payment
  </label>
</div>
    </div>
    <!-- gas booking payment staring -->
<div class="col-md-12 mb-3">
     <div class="form-check">
  <input class="form-check-input" type="radio" name="paymentmethord" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Cash on Delivery
  </label>
</div>
    </div>
   

<!-- staring of upi payment -->
<div id="upi_payment">
    <div id="payment" >

  <div class="col-md-3"style="flex:1">
  <img src="images/scanme.png" alt="">
  
</div>
<div class="col-md-9" style="flex:1;margin-top: 60px;padding: 51px;"><h4 style="display: inline">The gas cylinder price is </h4><h4 id="colorind" style="color: red; display: inline">RS 850 </h4> <h4 style="display: inline"> our </h4><h3 id="colorind" style="color: red;display: inline">UPI ID </h3><h4 style="display: inline">is</h4> <h3 id="colorind" style="color: red;display: inline">5482196</h3> <h4 style="display: inline">OR you can scan the QR code and pay the gas cylinder price</h4></div>
</div>
<div class="col-md-12 mb-3">
      <label for="validationDefault02">Transaction Number(Enter Bank transaction number)</label>
      <input type="text" class="form-control" id="transaction_no" name="transaction_no"  >
    </div>
</div>
</div>
<div class="col-md-12">
  <input type="submit" id="kycsubmitBtn" name="kycsubmitBtn"  style="width: 113px;height: 39px;"value="submit">
</div>

</div>
  <!-- payment end -->
  <?php 
if(isset($_POST['kycsubmitBtn']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$landno=$_POST['landno'];
$mobilno=$_POST['mobilno'];
$emailid=$_POST['emailid'];

$gender=$_POST['gender'];
$purpose=$_POST['purpose'];
$stove_status=$_POST['stove_status'];
$rationcardstatus=$_POST['rationcardstatus'];
$district=$_POST['district'];

$house_name=$_POST['house_name'];
$house_no=$_POST['house_no'];
$house_complx=$_POST['house_complx'];
$city=$_POST['city'];
$street_name=$_POST['street_name'];
$pincode=$_POST['pincode'];
$post_office=$_POST['post_office'];
$flate_no=$_POST['flate_no'];


// $upload_photo=$_POST['upload_photo'];
// $upload_adhar=$_POST['upload_adhar'];
// $upload_rationcard=$_POST['upload_rationcard'];


$pname=$_FILES['upload_photo']['name'];
$tname=$_FILES['upload_photo']['tmp_name'];
$photo_name="images/".$pname;
move_uploaded_file($tname,$photo_name);

$mname=$_FILES['upload_adhar']['name'];
$tname=$_FILES['upload_adhar']['tmp_name'];
$upload_adhar="images/".$mname;
move_uploaded_file($tname,$upload_adhar);

$qname=$_FILES['upload_rationcard']['name'];
$tname=$_FILES['upload_rationcard']['tmp_name'];
$upload_rationcard="images/".$qname;
move_uploaded_file($tname,$upload_rationcard);

// $paymentmethord=$_POST['paymentmethord'];
// echo $_POST['upload_rationcard'];
$transaction_no=$_POST['transaction_no'];
// business category start
$shop_name=$_POST['shop_name'];
$shope_place=$_POST['shope_place'];
$shop_city=$_POST['shop_city'];
$shop_post_office=$_POST['shop_post_office'];
$shope_pincode=$_POST['shope_pincode'];
$shope_district=$_POST['shope_district'];
$shope_proof_category=$_POST['shope_proof_category'];

$shope_upload_proof_name=$_FILES['shope_upload_proof']['name'];
$shope_upload_proof_temp=$_FILES['shope_upload_proof']['tmp_name'];
$shope_upload_proof="images/".$shope_upload_proof_name;
move_uploaded_file($shope_upload_proof_temp,$shope_upload_proof);

$upload_name=$_FILES['shope_upload_photo']['name'];
$t_upload_name=$_FILES['shope_upload_photo']['tmp_name'];
$shope_upload_photo="images/".$upload_name;
move_uploaded_file($t_upload_name,$shope_upload_photo);

$shope_upload_adhar_name=$_FILES['shpoe_upload_adhar']['name'];
$t_upload_adhar=$_FILES['shpoe_upload_adhar']['tmp_name'];
$shpoe_upload_adhar="images/".$shope_upload_adhar_name;
move_uploaded_file($t_upload_adhar,$shpoe_upload_adhar);


$shope_cylinder_count=$_POST['shope_cylinder_count'];
// $select="SELECT * FROM customer_details"
// $run=mysqli_query($connect,$select);
$key=$_SESSION['customer_id'];
$selection="SELECT * FROM connection_details WHERE customer_id='$key'";
$execution=mysqli_query($connect,$selection);
$row=mysqli_num_rows($execution);
$select="SELECT * FROM business_connection WHERE customer_id='$key'";
$run=mysqli_query($connect,$select);
$num_row=mysqli_num_rows($run);
if($row>=1)
{
  echo "<script>alert('thanikke ouu connection unde ketto')</script>";
}
else if($num_row>=1)
  echo "<script>alert('thanikke ouu connection unde ketto')</script>";
else
{
  if($purpose=='Home')
  {
if($rationcardstatus=="Antyodaya Anna Yojana")
{
$insert="INSERT INTO connection_details values('','$key','$name','$dob','$gender','none','$mobilno','$landno','$emailid','$purpose','$stove_status','$rationcardstatus','$district','$house_name','$house_no','$house_complx','$city','$street_name','$pincode','$post_office','$flate_no','$photo_name','$upload_adhar','$upload_rationcard','none','under process');";
$_SESSION['purpose']=$purpose;
 // echo "<script>alert(".$_SESSION['purpose'].")</script>";
 // echo $_SESSION['purpose'];
}
else
{
$insert="INSERT INTO connection_details values('','$key','$name','$dob','$gender','none','$mobilno','$landno','$emailid','$purpose','$stove_status','$rationcardstatus','$district','$house_name','$house_no','$house_complx','$city','$street_name','$pincode','$post_office','$flate_no','$photo_name','$upload_adhar','$upload_rationcard','$transaction_no','UNDER PROCESS');";
$_SESSION['purpose']=$purpose;
 // echo "<script>alert(".$_SESSION['purpose'].")</script>";
 // echo $_SESSION['purpose'];

}
}
// business table
else
{
 $insert="INSERT INTO business_connection values('','$key','$name','$dob','$gender','$mobilno','$landno','$emailid','$stove_status','$purpose','$shop_name','$shope_place','$shop_city','$shop_post_office','$shope_pincode','$shope_district','$shope_proof_category','$shope_upload_proof','$shope_upload_photo','$shpoe_upload_adhar','$shope_cylinder_count','$transaction_no','UNDER PROCESS');";
 $_SESSION['purpose']=$purpose;
 // echo "<script>alert(".$_SESSION['purpose'].")</script>";
 //  echo $_SESSION['purpose'];
}


print_r($insert);

$run=mysqli_query($connect,$insert);
$primary=mysqli_insert_id($connect);
// printf($id);
// echo $id;
// $select="SELECT * FROM connection_details where customer_id=$key";
// $run=mysqli_query($select,$connect);
// $row=mysqli_num_row($run);
// if($row==1)
// {
//   $fetch=mysqli_fetch_assoc($run);
//   $primary=$fetch['Connection _id'];
// }
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