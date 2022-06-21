<?php  
include'top.php';
error_reporting(0);
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
?>
<?php 
if($_GET['type']=='Approved')
{
	$key=$_GET['key'];
	
	$forin_id=$_GET['forin_id'];
	$select="SELECT * FROM temp_address WHERE  temp_address_id='$key'";
	// print_r($select);
	$run=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_assoc($run);
	
	$house_name=$fetch['house_name'];
$house_no=$fetch['house_no'];
$house_complx=$fetch['house_complx'];
$city=$fetch['city'];
$streetname=$fetch['streetname'];
$pincode=$fetch['pincode'];
$post_office=$fetch['post_office'];
$floar_no=$fetch['floar_no'];
$district=$fetch['district'];
$proof_cat=$fetch['proof_cat'];
$proof=$fetch['proof'];
$status=$fetch['status'];
if($status=='under process')
{
	$update="UPDATE connection_details SET house_name='$house_name',house_no='$house_no',house_complx='$house_complx',city='$city',streetname='$streetname',pincode='$pincode',post_office='$post_office',floar_no='$floar_no',district='$district' WHERE customer_id='$forin_id'";
	// print_r($update);
	$run=mysqli_query($connect,$update);
}
	if($run==1)
	{
$update_status="UPDATE temp_address SET status='Approved'";
// print_r($update_status);
$execute=mysqli_query($connect,$update_status);
	}


}
                                        ?>
   <?php 
                              if($_GET['type']=='deleted')
                              {
                              	$key=$_GET['id'];
                                 $delete="DELETE FROM temp_address where temp_address_id=$key";
                                 $run=mysqli_query($connect,$delete);
                              }
                                 ?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Orders </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table" id="viewchange_address">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="avatar">Consumer No</th>
                                       <th>House Name</th>
                                       <th>House No</th>
                                       <th>city</th>
                                       <th>Postoffice</th>
                                       <th>District</th>
                                       <th>proff</th>
                                       <th>Status</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <?php 


$select="SELECT * FROM temp_address";
$run=mysqli_query($connect,$select);
while($fetch=mysqli_fetch_assoc($run))
{
	$key=$fetch['temp_address_id'];
	$forin_id=$fetch['customer_id'];
	
	// echo $key;
                                  ?>
                                 <tbody>
                                    <tr>
                                       <td class="serial">1.</td>
                                       <td> <?php echo $fetch['customer_id'] ?> </td>
                                       <td> <?php echo $fetch['house_name'] ?> </td>
                                       <td> <?php echo $fetch['house_no'] ?> </td>
                                       <td> <?php  echo $fetch['city'] ?></td>
                                       <td> <?php  echo $fetch['post_office'] ?></td>
                                       <td> <?php  echo $fetch['district'] ?> </td>
                                       <td><?php  echo $fetch['proof'] ?></td>
                                       
                                      <?php 
                                     $status=$fetch['status'];
                                      if($status=='under process')
                                      {
echo " <td>
                                          	<a href='?type=Approved&key=$key&forin_id=$forin_id'><span class='badge badge-complete'>Approved</span></a>
                                       </td>";
                                   }
                                      echo" <td>
                                          <a style='color:white;'href='?type=deleted&id=$key' ><span  class='badge badge-complete' style='color:white;background:red;'>Deleted</span></a>
                                       </td>";
                                   }
                                       ?>
                                       </tr>
                                       <!-- <td><a style='color:white;href='?type=deleted&id=$key'>
                                          <span class='badge badge-complete'style='color:white;background:red;'>Delete</span>
                                       </a></td> -->
                                    
                                
                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
include'footer.php';
 ?>