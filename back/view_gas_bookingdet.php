<?php 
include 'top.php';
error_reporting(0);
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
 ?>
 <?php 
                                   if($_GET['type']=='approved')
                                   {
                                    $id=$_GET['key'];
                                    $update="UPDATE gas_booking SET status='Approved' WHERE booking_id=$id";
                                    // printf($update);
$execute=mysqli_query($connect,$update);                                   }
                                   if($_GET['type']=='rejected')
                                   {
                                    $id=$_GET['key'];
                                    $update="UPDATE gas_booking SET status='Rejected' WHERE booking_id=$id";
                                    // printf($update);
                                     $execute=mysqli_query($connect,$update);
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
                              <table class="table " id="gas_booking">
                                 <thead>
<?php 


 ?>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="avatar">Consumer No</th>
                                       
                                       <th>Name</th>
                                        
                                       <th>number of cylinder</th>
                                       <th>Purpose</th>
                                       <th>Date</th>
                                       <th>Transaction No</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                          <?php 
                                          $i=1;
$select="SELECT * from  gas_booking";
$run=mysqli_query($connect,$select);
while($fetch=mysqli_fetch_assoc($run))
{
  if($fetch['purpose']=='Home')
  {
echo "
                                   
                                    <tr>
                                       <td class='serial'>$i</td>
                                       <td>".$fetch['customer_id']." </td>";
                                       $customer_id=$fetch['customer_id'];
                                       $select_connection="SELECT * FROM connection_details where customer_id=$customer_id";
                                       $execute=mysqli_query($connect,$select_connection);
                                       $get=mysqli_fetch_assoc($execute);

                                       echo "<td>".$get['name']." </td>
                                       <td> ".$fetch['no_of_cylinder']." </td>";
                                       
                                       echo "<td> Normal</th>
                                       <td>".$fetch['date']." </td>
                                       
                                       <td> ".$fetch['transaction_no']." </td>
                                       ";
                                       
                                        $id=$fetch['booking_id'];
                                 if($fetch['status']=='Under Process'|| $fetch['status']=='Rejected')
                                       {
                                       
                                        echo "<td><a style='color:white;'href='?type=approved&key=$id'>
                                          <span class='badge badge-complete'style='color:white;background:green;'>Approved</span>
                                       </a></td>";
                                       }
                                       else
                                       {
                                        echo "<td><a style='color:white;' href='?type=rejected&key=$id'>
                                          <span class='badge badge-complete' style='color:white;background:red;'>Rejected</span></a>
                                       </td>";
                                       }
                                      
                                    echo "</tr>";
                                    $i=$i+1;
                                  }
                                  else
                                  {
                                    echo "
                                   
                                    <tr>
                                       <td class='serial'>$i</td>
                                       <td>".$fetch['customer_id']." </td>";
                                       $customer_id=$fetch['customer_id'];
                                       $select_connection="SELECT * FROM business_connection where customer_id=$customer_id";
                                       $execute=mysqli_query($connect,$select_connection);
                                       $get=mysqli_fetch_assoc($execute);

                                       echo "<td>".$get['name']." </td>
                                       <td> ".$fetch['no_of_cylinder']." </td>";
                                       
                                       echo "<td> ".$fetch['purpose']." </td>
                                       <td>".$fetch['date']." </td>

                                       <td> ".$fetch['transaction_no']." </td>
                                       ";
                                       
                                        $id=$fetch['booking_id'];
                                 if($fetch['status']=='Under Process'|| $fetch['status']=='Rejected')
                                       {
                                       
                                        echo "<td><a style='color:white;'href='?type=approved&key=$id'>
                                          <span class='badge badge-complete'style='color:white;background:green;'>Approved</span>
                                       </a></td>";
                                       }
                                       else
                                       {
                                        echo "<td><a style='color:white;' href='?type=rejected&key=$id'>
                                          <span class='badge badge-complete' style='color:white;background:red;'>Rejected</span></a>
                                       </td>";
                                       }
                                      
                                    echo "</tr>";
                                    $i=$i+1;
                                  }
                                                       } ?>
                                    
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
include 'footer.php';
 ?>