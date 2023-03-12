<?php 
include'top.php';
error_reporting(0);
 ?>
 <style>
	
  #gas_bookin_formcontainer
  {
   padding: 30px 20px;
    box-shadow: #00000040 0px 0px 19px 0px;
    margin-bottom: 44px; 
    margin-left: 51px;
    margin-right: 51px;
    margin-top: 24px; 
  }
  #heading{
    margin-top: 50px;
    text-align: center;
  }
</style> 
 <div id="gas_bookin_formcontainer" >
		<!-- heading start-->
		<h1 id="heading">GAS BOOKING</h1>			
							  	<a href="gas_booking_history.php"><button style="margin-left: 82%;" type="submit" class="btn btn-primary">Gas Booking History</button></a>

		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST">
			  <div class="form-row" style="margin: 20px;">
       <?php 
if($_SESSION['purpose']=='Business')//
{
  // find totel price starting
  $bus_select="SELECT * from today_info where purpose='Business' ";
  $bus_price_run=mysqli_query($connect,$bus_select);
  $bus_price_fetch=mysqli_fetch_assoc($bus_price_run);
  // $price=$bus_price_fetch['price'];
  ?>
  <script>
     jQuery(document).ready(function($){
    $('#no_of_cylinder').on('change', function() {
  $no_of_cylinder=this.value; 
   $price='<?php echo $bus_price_fetch['price']?>';
      $totel_price=$no_of_cylinder*$price;
      $('#businessprice').html($totel_price);
})
  })
  </script>
  <!-- // find totel price ending -->
  <?php $forin=$_SESSION['customer_id'];
  $select="SELECT * FROM business_connection where customer_id=$forin";
  $run=mysqli_query($connect,$select);
  $row=mysqli_num_rows($run);
  if($row>0)
  {
    $getdata=mysqli_fetch_assoc($run);
      echo " <div class='col-md-6'>
      <label class='mr-sm-1' for='inlineFormCustomSelect'>Number of cylinder you are booking*</label>
      <select name='no_of_cylinder' style='margin-bottom: 23px;'  id='no_of_cylinder'class='custom-select mr-sm-1' >
        <option selected>--Select--</option>";
        for($i=1;$i<=$getdata['cylinder_count'];$i++)
          echo "<option > ".$i ."</option>";
        
     echo" </select>       
</div>";
}
}else
{
 //fetch home price start
  // find totel price starting
  $home_select="SELECT * from today_info where purpose='Home' ";
  $home_price_run=mysqli_query($connect,$home_select);
  $home_price_fetch=mysqli_fetch_assoc($home_price_run);
   $T_price=$home_price_fetch['price'];
 //fetch home price end 
}
     ?>
    <div class="col-md-12 mb-3 text-center">
      <h3>PAYMENT</h3>
    </div>
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
 <div class="col-md-9" style="flex:1;margin-top: 60px;padding: 51px;"><h4 style="display: inline">The gas cylinder price is </h4><h4 id="colorind" style="color: red; display: inline"> <div id="homeprice" style="display: inline;">RS <?php echo $T_price ?></div>  <div id="businessprice" style="display: inline"></div> </h4> <h4 style="display: inline"> our </h4><h3 id="colorind" style="color: red;display: inline">UPI ID </h3><h4 style="display: inline">is</h4> <h3 id="colorind" style="color: red;display: inline">5482196</h3> <h4 style="display: inline">OR you can scan the QR code and pay the gas cylinder price.You can use</h4> <h4 style="color:red;display: inline">PHONE PAY,GPAY,PAYTM</h4> <h4 style="display: inline"> and other payment apps</h4></div>
</div>
<div class="col-md-12 mb-3">
      <label for="validationDefault02">Transaction Number</label>
      <input type="text" name="transaction_number"class="form-control" id="transaction_number" placeholder="Enter Bank transaction number"  >
    </div>
</div>
 <!-- end of upi payment  -->
 <!-- <div class="col-md-6 mb-3" style="margin-top: 44px;"> -->
      <!-- <label for="validationDefault02">Gas booking</label> -->
    <div class ="col-md-4"style="float:right;margin-left: 82%;">
  <input type="submit"class="btn btn-primary" id="gasbookingsubmitBtn"name="gasbookingsubmitBtn"value="Gas booking"  >
</div>
    <!-- gas booking payment end  -->
</div>
</form>
</div>
</form>
<?php 
if(isset($_POST['gasbookingsubmitBtn']))//gas booking btn il click cheythu
{
  $forin=$_SESSION['customer_id'];
$purpose=$_SESSION['purpose'];
    $no_of_cylinder=$_POST['no_of_cylinder'];
  $transaction_number=$_POST['transaction_number'];
  $current_date=date("d-m-y");
  if($_SESSION['purpose']=='Business')//checking business or not
  {
$Business_select="SELECT * FROM business_connection where customer_id=$forin";
  $execute=mysqli_query($connect,$Business_select);
  $num_row=mysqli_num_rows($execute);
  $fetch=mysqli_fetch_assoc($execute);
  if($fetch['status']=="UNDER PROCESS" || $fetch['status']=="Rejected")
    // echo "<script>alert('Pls register in kyc form or your connection is not approved')</script>";
    echo "<script type='text/javascript'>gas_connection_error()</script>";

  else
  {
  if($num_row>0)
  {
   if($transaction_number==""){
    $insert="INSERT INTO gas_booking values('','$forin','$purpose','$no_of_cylinder','$current_date','cash on delivary','None','None','Under Process','')";
    // print_r($insert);
  }
  else{
    $insert="INSERT INTO gas_booking values('','$forin','$purpose','$no_of_cylinder','$current_date','$transaction_number','None','None','Under Process','')";
     // print_r($insert);
  }
  }

   $run=mysqli_query($connect,$insert);
    // $primary=mysqli_insert_id($connect);
    // echo $primary;
              echo "<script type='text/javascript'>successalert_inGasbooking()</script>";
 }
  }//business te close
else if($_SESSION['purpose']=='Home')//home start
{
  $select="SELECT * FROM connection_details where customer_id=$forin";
  $run=mysqli_query($connect,$select);
  $row=mysqli_num_rows($run);
  $get_data=mysqli_fetch_assoc($run);
    if($get_data['status']=="UNDER PROCESS" || $get_data['status']=="Rejected")
     // echo "<script>alert('Pls register in kyc form or your connection is not approved')</script>";
      echo "<script type='text/javascript'>gas_connection_error()</script>";

 else
 {
   if($row>0)
   {
     if($transaction_number=="")
     {

      $insert="INSERT INTO gas_booking values('','$forin','$purpose','normal','$current_date','cash on delivary',
      'None','None','Under Process','')";
       // print_r($insert);
    }
     else
     {
      $insert="INSERT INTO gas_booking values('','$forin','$purpose','normal','$current_date','$transaction_number',
      'None','None','Under Process','')";
       // print_r($insert);
    }
      $run=mysqli_query($connect,$insert);
      // $primary=mysqli_insert_id($connect);
     // echo $primary;
     echo "<script type='text/javascript'>successalert_inGasbooking()</script>";
    // echo "<script>window.location.href='give_applicationno.php?appno=$primary'</script>";
   }
 }
}//home te close
  // if(0>=$row || 0>=$num_row)
else
  // swal("Your request is succesively sended!", "You clicked the button!", "success");
    // echo "<script>alert('Pls register in kyc form')</script>";
  echo "<script type='text/javascript'>gas_connection_error()</script>";
  
}
 ?>
<!-- } -->
</div>

<!-- </div> -->
<?php

include 'footer.php';
?>