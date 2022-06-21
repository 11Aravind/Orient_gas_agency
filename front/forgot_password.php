<?php
include 'top.php';
// include 'connect.php';
// if($_SESSION['customer_id']== '')
// {
//   header('location:index.php');
// }
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

  #kycsubmitBtn{
    float:right;
    margin-left: 66%;
  }
</style>
	<div id="kycformcontainer">
		<!-- heading start-->
		<!-- <center id="kycheading">
			<h1><u>Change Phone Number</u></h1>
			<p>(Field marked with * are mandatory)</p>
		</center> -->
		<!-- <h4 style="margin-left: 51px;"><u>Personal details</u></h4> -->
		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST">
			  <div class="form-row" style="margin: 20px;">
            
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Phone Number*</label>
      <input type="text" class="form-control" id="phone_no" name="phone_no"  >
    </div>
      <div class="col-md-4 mb-3">
      <label for="validationDefault01">Password*</label>
      <input type="password" class="form-control" id="password" name="password"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Conform Password*</label>
      <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"  >
    </div>
                      <!-- uploading photos end -->
  <!-- payment starting -->
<div class="col-md-12">
  <input type="submit" id="changephnsubmitbtn" name="changephnsubmitbtn"  style="width: 100%;height: 39px;"value="submit">
</div>
</div>
  <?php 
if(isset($_POST['changephnsubmitbtn']))
{
$phone_no=$_POST['phone_no'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$select="SELECT * from customer_details WHERE  phone_number='$phone_no' ";
// print_r($select);
$run=mysqli_query($connect,$select);
$row=mysqli_num_rows($run);
// echo $row;
$fetch=mysqli_fetch_assoc($run);
$id=$fetch['customer_id'];
if($row>0)
{
  $update="UPDATE customer_details set  password='$password' where customer_id='$id'";
  // print_r($update);
  $execute=mysqli_query($connect,$update);
  if($execute>0)
  echo "<script>alert('Password is successfuly changed')</script>";
echo "<script>window.location.href='index.php?'</script>";
}
else
{
	echo "<script>alert('mobile number is wrong')</script>";
}
}

 ?>
 </form>
  
    <!-- form end -->
  </div>

<?php

include 'footer.php';
?>