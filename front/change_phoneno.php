<?php
include 'top.php';
error_reporting(0);
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


  #kycsubmitBtn{
    float:right;
    margin-left: 66%;
  }
</style>
	<div id="kycformcontainer">
		<!-- heading start-->
		<center id="kycheading">
			<h1><u>Change Phone Number</u></h1>
			<p>(Field marked with * are mandatory)</p>
		</center>
		<h4 style="margin-left: 51px;"><u>Personal details</u></h4>
		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST">
			  <div class="form-row" style="margin: 20px;">
            
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Password*</label>
      <input type="password" class="form-control" id="password" name="password"  >
    </div>
      <div class="col-md-4 mb-3">
      <label for="validationDefault01">New Number*</label>
      <input type="text" class="form-control" id="oldphnno" name="oldphnno"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Conform New Number*</label>
      <input type="text" class="form-control" id="newnum" name="newnum"  >
    </div>
<div class="col-md-12">
  <input type="submit" id="changephnsubmitbtn" name="changephnsubmitbtn"  style="width: 113px;height: 39px;"value="submit">
</div>
</div>

  <?php 
if(isset($_POST['changephnsubmitbtn']))
{
$oldphnno=$_POST['oldphnno'];
$password=$_POST['password'];
$newnum=$_POST['newnum'];
$select="SELECT * from customer_details WHERE  password='$password' ";
// print_r($select);
$runing=mysqli_query($connect,$select);
$row=mysqli_num_rows($runing);
// echo $row;
$fetch=mysqli_fetch_assoc($runing);
$id=$fetch['customer_id'];
if($row>0)
{
  $update="UPDATE customer_details set  phone_number='$newnum' where customer_id='$id'";
  $execute=mysqli_query($connect,$update);
$update_kyc="UPDATE connection_details set mobileno='$newnum' where customer_id='$id'";
$run=mysqli_query($connect,$update_kyc);
}
else
{
   echo "<script>alert('Password is incorrect')</script>";
}
if($run>0)
{
    echo "<script>alert('Phone number is successfuly changed')</script>";

echo "<script>window.location.href='index.php?'</script>";
}
}

 ?>
 </form>
  
    <!-- form end -->
  </div>

<?php

include 'footer.php';
?>