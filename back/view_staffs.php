
<?php
include 'top.php'; 
error_reporting(0);
// include 'connect.php';
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Main Staffs</h4>
                           <a href="Add_mainemploy.php "><button style="    margin-top: -19px; float: right;" type="buttton"class="btn btn-primary">Add main employ</button></a>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                     <tr>
                                       <th>#</th>
                                      
                                       <th>Name</th>
                                       <th>Photo</th>
                                       <th>Position</th>
                                       <th>Description</th>
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                  <?php 
                                  $num=1;
$select_query="SELECT * FROM staff_details";
$run=mysqli_query($connect,$select_query);
while($fetch=mysqli_fetch_assoc($run))
{
echo "
<tr>
<td>". $num++."</td>
     
      <td>".$fetch['staff_name']." </td>
      <td><img src=".  $fetch['photo']." style='width:50px;height:50px;' ></td>
      <td> ".$fetch['position']." </td>
      <td>". $fetch['description']."</td>";
      $id=$fetch['staff_id'];
      echo "<td><a style='color:white;'href='?&key=$id'>
                                          <span class='badge badge-complete'style='color:white;background:red;'>Delete</span>
                                       </a></td>
    </tr>";
    } ?>
    <?php 
if($_GET['key'])
{
  $key=$_GET['key'];
  $delete="DELETE  FROM staff_details WHERE staff_id='$key'";
  // print_r($delete);
  $run=mysqli_query($connect,$delete);
}

     ?>
                                   <!--  <tr>
                                      
                                       <td> #5469 </td>
                                       <td> <span class="name">Louis Stanley</span> </td>
                                       <td> <span class="product">iMax</span> </td>
                                       <td><span class="count">231</span></td>
                                       <td>
                                          <span class="badge badge-complete">Complete</span>
                                       </td>
                                    </tr> -->

<!-- end -->
   
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

include('footer.php');
?>