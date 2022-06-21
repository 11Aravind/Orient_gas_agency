
<?php 
error_reporting(0);
// include 'connect.php';
include'top.php';
 ?>
 <style>
	/*input[type="submit"]{
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
	}*/
  #gas_bookin_formcontainer
  {
   padding: 30px 20px;
    box-shadow: #00000040 0px 0px 19px 0px;
    margin-bottom: 44px; 
    margin-left: 51px;
    margin-right: 51px;
    margin-top: 24px; 
  }
</style> 
 <div id="gas_bookin_formcontainer" >
		<!-- heading start-->
		<center style="margin-top: 50px;">
<h1><u>Gas Booking</u></h1>			
		</center>
					  	<a href="gas_booking_history.php"><button style="margin-left: 82%;" type="submit" class="btn btn-primary">Gas Booking History</button></a>

		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST">
			  <div class="form-row" style="margin: 20px;">
       <?php 
if($_SESSION['purpose']=='Business')
{
  $forin=$_SESSION['customer_id'];
  $select="SELECT * FROM business_connection where customer_id=$forin";
  $run=mysqli_query($connect,$select);
  $row=mysqli_num_rows($run);
  if($row>0)
  {
    $getdata=mysqli_fetch_assoc($run);
      echo " <div class='col-md-6'>
      <label class='mr-sm-1' for='inlineFormCustomSelect'>Number of cylinder you are booking*</label>
      <select name='no_of_cylinder'  id='no_of_cylinder'class='custom-select mr-sm-1' >
        <option selected>--Select--</option>";
        for($i=1;$i<=$getdata['cylinder_count'];$i++)
          echo "<option > ".$i ."</option>";
        
     echo" </select>       
</div>";
}

}

     ?>
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
    <!-- gas booking payment staring  -->
<div class="col-md-12 mb-3">
     <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Cash on Delivery
  </label>
</div>
    </div>
   <!-- staring of upi payment  -->
<div id="upi_payment">
    <div id="payment" style="display:flex;border: 1px solid black;margin-bottom: 20px;">

  <div class="col-md-3"style="flex:1">
  <img src="images/scanme.png" alt="">
  `
</div>
<div class="col-md-9" id="paymentdiv" style="flex:1;margin-top: 60px;padding: 51px;"><h4 style="display: inline">The gas cylinder price is </h4><h4 id="colorind" style="color: red; display: inline">RS 850 </h4> <h4 style="display: inline"> our </h4><h3 id="colorind" style="color: red;display: inline">UPI ID </h3><h4 style="display: inline">is</h4> <h3 id="colorind" style="color: red;display: inline">5482196</h3> <h4 style="display: inline">OR you can scan the QR code and pay the gas cylinder price</h4></div>
</div>
<div class="col-md-12 mb-3">
      <label for="validationDefault02">Transaction Number</label>
      <input type="text" name="transaction_number"class="form-control" id="validationDefault02" placeholder="Enter Bank transaction number"  >
    </div>
</div>
 <!-- end of upi payment  -->
 <!-- <div class="col-md-6 mb-3" style="margin-top: 44px;"> -->
      <!-- <label for="validationDefault02">Gas booking</label> -->
    <div class ="col-md-4"id="gasbookingsubmitBtn"style="float:right;margin-left: 82%;">
  <input type="submit"class="btn btn-primary" name="gasbookingsubmitBtn"value="Gas booking"  >
</div>
    <!-- gas booking payment end  -->
</div>
</form>
</div>
</form>
<?php 

$forin=$_SESSION['customer_id'];
$purpose=$_SESSION['purpose'];
if(isset($_POST['gasbookingsubmitBtn']))
{
    $no_of_cylinder=$_POST['no_of_cylinder'];
  $transaction_number=$_POST['transaction_number'];
  $current_date=date("d-m-y");
  if($_SESSION['purpose']=='Business')
  {
$Business_select="SELECT * FROM business_connection where customer_id=$forin";
  $execute=mysqli_query($connect,$Business_select);
  $num_row=mysqli_num_rows($execute);
  if($num_row>0)
  {
   // $insert="INSERT INTO gas_booking values('','$forin','$purpose','$no_of_cylinder','$current_date','cash on delivary','Under Process')";
   if($transaction_number=="")
    {
    $insert="INSERT INTO gas_booking values('','$forin','$purpose','$no_of_cylinder','$current_date','cash on delivary','Under Process')";
  }
  else
  {
    $insert="INSERT INTO gas_booking values('','$forin','$purpose','$no_of_cylinder','$current_date','$transaction_number','Under Process')";
  }
  }
   $run=mysqli_query($connect,$insert);
    $primary=mysqli_insert_id($connect);
    // echo $primary;
    
    echo "<script>window.location.href='give_applicationno.php?appno=$primary'</script>";
  // else
  // {
  //       echo "<script>alert('Pls register in kyc form')</script>";
  // }
  }
else
{
  $select="SELECT * FROM connection_details where customer_id=$forin";
  $run=mysqli_query($connect,$select);
  $row=mysqli_num_rows($run);
  if($row>0)
  {
    if($transaction_number=="")
    {
    $insert="INSERT INTO gas_booking values('','$forin','$purpose','normal','$current_date','cash on delivary','Under Process')";
  }
  else
  {
    $insert="INSERT INTO gas_booking values('','$forin','$purpose','normal','$current_date','$transaction_number','Under Process')";
  }
    $run=mysqli_query($connect,$insert);
    $primary=mysqli_insert_id($connect);
    // echo $primary;
    
    echo "<script>window.location.href='give_applicationno.php?appno=$primary'</script>";

  }
  }
  if(0>=$row || 0>=$num_row)
    echo "<script>alert('Pls register in kyc form')</script>";
  
}
 ?>
<!-- } -->
</div>

<!-- </div> -->
<?php

include 'footer.php';
?>