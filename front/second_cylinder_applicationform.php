<?php 
include'top.php';
 ?>
 <style>
	input[type="submit"]{
	float: right;
    background: blue;
    color: white;
    border-color: blue;
    border-radius: 4px;
    width: 117px;
    height: 34px;
    
    margin-bottom: 52px;
    margin-left: 5px;
    margin-right: 8px;	
	}
  #gas_bookin_formcontainer{
    margin-bottom: 44px;
    padding: 30px 20px;
    box-shadow: #00000040 0px 0px 19px 0px;margin-left: 51px;  margin-right: 51px; margin-top: 24px;
  }
  #payment{
    display:flex;border: 1px solid black;margin-bottom: 20px;
  }
</style>
 <div id="gas_bookin_formcontainer" >
		<!-- heading start-->
		<center style="margin-top: 50px;">
			<h1><u>Second Cylinder Application Form</u></h1>
			<p>(Field marked with * are mandatory)</p>
		</center><!-- 
					  	<button style="margin-left: 82%;" type="button" class="btn btn-primary">Second Cylinder</button>
 -->
		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST" enctype="multipart/form-data">
			  <div class="form-row" style="margin: 20px;">
   <!--  <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name*</label>
      <input type="text" class="form-control" id="validationDefault01" name="name"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Consumer Number*</label>
      <input type="text" class="form-control" id="validationDefault02" name="consumer_no"  >
    </div> -->
       <div class="col-md-12 mb-3">
      <label for="validationDefault02">Upload voucher*</label>
      <input type="file" name="photo" class="form-control" id="validationDefault02"   >
    </div>
    <!-- second cylinder payment staring -->
    <div class="col-md-12 mb-3 text-center">
<u>      <h3>Payment</h3>
</u>    </div>
    <div class="col-md-12 mb-3 ">
      <h5>Suggested for you </h5><p>(choose any payment method)</p>
    </div>
    <div class="col-md-12 mb-3 ">
       <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Online payment
  </label>
</div>
    </div>
    <!-- gas booking payment staring -->
<div class="col-md-12 mb-3">
     <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Cash on Delivery
  </label>
</div>
    </div> 
<!-- staring of upi payment -->
<div id="upi_payment">
    <div id="payment" style="">

  <div class="col-md-3"style="flex:1">
  <img src="images/scanme.png" alt="">
  
</div>
<div class="col-md-9" style="flex:1;margin-top: 60px;padding: 51px;"><h4 style="display: inline">The gas cylinder price is </h4><h4 id="colorind" style="color: red; display: inline">RS 850 </h4> <h4 style="display: inline"> our </h4><h3 id="colorind" style="color: red;display: inline">UPI ID </h3><h4 style="display: inline">is</h4> <h3 id="colorind" style="color: red;display: inline">5482196</h3> <h4 style="display: inline">OR you can scan the QR code and pay the gas cylinder price</h4></div>
</div>
<div class="col-md-12 mb-3">
      <label for="validationDefault02">Transaction Number</label>
      <input type="text" class="form-control" name="transaction_no" id="validationDefault02" placeholder="Enter Bank transaction number"  >
    </div>
</div>
    <div class="col-md-4"id="kycsubmitbtn"style="float:right;margin-left: 66%;"><input type="submit" name="submitBtn" value="submit"></div>
    <!-- second cylinder payment end -->
</div>

</form>
<?php 
if(isset($_POST['submitBtn']))
{
  $forin=$_SESSION['customer_id'];
   $transaction_no=$_POST['transaction_no'];
  //   $name=$_FILES['photo']['name'];
  // $tname=$_FILES['photo']['tmp_name'];
   
  $name=$_FILES['photo']['name'];
$tname=$_FILES['photo']['tmp_name'];
$folder_name="images/".$name;
  //  echo "hai";
  // echo$name;
  // echo"<br>".$tname;
   // $folder_name="images/".$name;
   // echo $folder_name;
  move_uploaded_file($tname,$folder_name);
$select="SELECT * FROM connection_details where customer_id=$forin";
// printf($select);
$select_run=mysqli_query($connect,$select);
$row=mysqli_num_rows($select_run);
// printf($row);
// echo $row;
if($row>0)
{
  $second_select="SELECT * FROM second_cylinderdet where customer_id=$forin";
  $run=mysqli_query($connect,$second_select);
  $row=mysqli_num_rows($run);
if($row>0)
{
echo "<script>alert('thanikke oru second cylinder unde ine second cylinder edukkan pattilla')</script>";
}
else
{
  if($transaction_no=="")
  {
$insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','Diarect Payment','Under Process')";
  }
  else
  {
   $insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','$transaction_no','Under Process')"; 
  }
$insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','$transaction_no','Under Process')";
$insert_run=mysqli_query($connect,$insert); 
$primary=mysqli_insert_id($connect);
echo "<script>window.location.href='give_applicationno.php?appno=$primary'</script>";
}
}
else
echo "<script>alert('Pls register in kyc form')</script>";

}
 ?>
 


</div>
 <?php
include 'footer.php';
?>