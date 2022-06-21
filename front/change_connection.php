<?php
include 'top.php';
// include 'connect.php';
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
		<center id="kycheading">
			<h1><u>Change Connection</u></h1>
			<p>(Field marked with * are mandatory)</p>
		</center>
		<h4 style="margin-left: 51px;"><u>Personal details</u></h4>
		<!-- heading close -->
		<!-- form starteing -->
    <!-- enctype="multipart/form-data" -->
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
      <label class="mr-sm-1" for="inlineFormCustomSelect" id="purpose">Gender*</label>
      <select class="custom-select mr-sm-1" id="gender" name="gender">
        <option selected>--Select--</option>
        <option >Male</option>
        <option >Female</option>
         <option >Other</option>
        <!-- <option value="3">Three</option> -->
      </select>
    </div>
   
    <div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect">Relation ship*</label>
      <select class="custom-select mr-sm-1" id="rationcardstatus" name="relationship">
        <option >--Select--</option>
        <option >Father</option>
        <option  >Mother</option>
        <option >wife</option>
        <option >Daughter in law</option>
        
      </select>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationDefault01">Consumer Number*</label>
      <input type="text" class="form-control" id="consumer_no" name="consumer_no"  >
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationDefault01">Deth certificate*</label>
      <input type="file" class="form-control" id="deth_certificate" name="deth_certificate"  >
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
             <!-- uploading photos end -->

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
      <label for="validationDefault02">Transaction Number</label>
      <input type="text" class="form-control" id="transaction_no" name="transaction_no"placeholder="Enter Bank transaction number"  >
    </div>
</div>
</div>

<div class="col-md-12">
  <input type="submit" id="kycsubmitBtn" name="changeconnectionBtn"  style="width: 113px;height: 39px;"value="submit">
</div>
</div>
  <!-- payment end -->
	
  
 </form>
 <?php 
 if(isset($_POST['changeconnectionBtn']))
 {
 $forin=$_SESSION['customer_id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
// $dob=date();
$gender=$_POST['gender'];
$relationship=$_POST['relationship'];
$consumer_no=$_POST['consumer_no'];

$deth_certificate_name=$_FILES['deth_certificate']['name'];
$deth_certificate_tname=$_FILES['deth_certificate']['tmp_name'];
$folder="images/".$deth_certificate_name;
move_uploaded_file($deth_certificate_tname, $folder);

$upload_photo_name=$_FILES['upload_photo']['name'];
$upload_photo_tname=$_FILES['upload_photo']['tmp_name'];
$upload_photo="images/".$upload_photo_name;
move_uploaded_file($upload_photo_tname, $upload_photo);

$upload_adhar_name=$_FILES['upload_adhar']['name'];
$upload_adhar_tname=$_FILES['upload_adhar']['tmp_name'];
$upload_adhar="images/".$upload_adhar_name;
move_uploaded_file($upload_adhar_tname, $upload_adhar);

$upload_rationcard_name=$_FILES['upload_rationcard']['name'];
$upload_rationcard_tname=$_FILES['upload_rationcard']['tmp_name'];
$upload_rationcard="images/".$upload_rationcard_name;
move_uploaded_file($upload_rationcard_tname, $upload_rationcard);


$transaction_no=$_POST['transaction_no'];
if($consumer_no!=$forin)
{
echo "<script>alert('WRONG CONSUMER NUMBER')</script>";

}
else
{
  $select_home="SELECT * from connection_details where customer_id=$forin";
  // print_r($select_home);
  $run_home=mysqli_query($connect,$select_home);
  $home_row=mysqli_num_rows($run_home);

  $select_business="SELECT * from business_connection where customer_id=$forin";
  // print_r($select_home);
  $run_busc=mysqli_query($connect,$select_business);
  $busc_row=mysqli_num_rows($run_busc);
if($home_row==0  && $busc_row==0)
{
// echo "<script>alert(Pls register kyc form)</script>";
echo "<script>alert('Pls register in kyc form')</script>";
}
else
{

if($transaction_no=="")
{
$insert="INSERT INTO change_connection values('','$forin','$name','$dob','$gender','$relationship','$folder','$upload_photo','$upload_adhar','$upload_rationcard','none','Under Process')";
}
else
{
  $insert="INSERT INTO change_connection values('','$forin','$name','$dob','$gender','$relationship','$folder','$upload_photo','$upload_adhar','$upload_rationcard','$transaction_no','Under Process')";
}
print_r($insert);
$run=mysqli_query($connect,$insert);

$primary=mysqli_insert_id($connect);
echo "<script>window.location.href='give_applicationno.php?appno=$primary'</script>";
}
}
}
// echo "<script>alert('$primary')</script>";
// echo $primary;

// if($run==1)
// {
  // $update="UPDATE from connection_details set name='$name',dob='$dob',gender='$gender',relationship='$relationship',deth_certificate='$deth_certificate',upload_photo='$upload_photo',upload_adhar='$upload_adhar',uploadration_card='$uploadration_card',transaction_no='$transaction_no' WHERE "
// }
// dob='',gender='',relationship='',deth_certificate='',upload_photo='',upload_adhar='',uploadration_card='',transaction_no

// under process

?>
  
    <!-- form end -->
  </div>

<?php

include 'footer.php';
?>