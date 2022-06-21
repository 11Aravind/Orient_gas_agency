<?php

include('top.php'); 
include 'connect.php';
?>
<style>
#addemployform{
  margin: 30px;
  margin-top: 30px;
      color: white;
    margin-top: 151px;
    background: #68686d;
    padding: 49px 33px;
} 
#stafferror{
      background: #d0cdcd;
    padding: 11px 22px;
    margin-top: 0px;
    color: red;
}
</style>

               
<div id="addemployform">
  <div id="stafferror"></div>
  <form method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="staff_name" id="name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Position</label>
      <input type="text" class="form-control" id="position" name="staff_position" placeholder="Position">
    </div>
     <div class="form-group col-md-6">
      <label for="inputPassword4">Photo</label>
      <input type="file" class="form-control" id="Photos" name="Photo">
    </div>
     <div class="form-group col-md-6">
      <label for="inputPassword4">Description</label>
      <input type="text" class="form-control" id="description"name="staff_description" placeholder="Description">
    </div>
    <div class="col-4" style="margin-left: 90%;">
      <button class="btn btn-primary"  type="submit" id="submitBtn"name="staffsubmitBtn" style="width:89px">submit</button>
</div>
  </div>
</form>
      
<?php 
if(isset($_POST['staffsubmitBtn']))
{
$staff_name=$_POST['staff_name'];
$staff_position=$_POST['staff_position'];
// $staff_name=$_POST['staff_name'];
$staff_description=$_POST['staff_description'];

 // print_r($_FILES['Photo']);
$name=$_FILES['Photo']['name'];
$temp=$_FILES['Photo']['tmp_name'];
$folder_name="images/".$name;
// echo $folder_name;
move_uploaded_file($temp, $folder_name);
$insert_data="INSERT INTO staff_details values('','$staff_name','$staff_position','$staff_description','$folder_name')";
// print_r($insert_data);
$insert_run=mysqli_query($connect,$insert_data);
echo "<script type='text/javascript'>location.href = 'view_staffs.php';</script>";
// header('location:view_staffs.php');
}

 ?>
</div>

 <?php

include('footer.php');
?>
