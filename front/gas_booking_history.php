<?php 
include 'top.php';
error_reporting(0);
 ?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12" style="background: #edeef3;">
                     <div class="card" style="margin: 65px;
    background: #edeef3;">
                        <div class="card-body" style="background: #ffffff;
    
    height: 62px;">
                           <h4 class="box-title">Orders </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="gas_booking_history" style="margin-bottom: 0px;">
                                 <thead style="background: #edeef3;">
                                    <tr>
                                       <th class="serial">#</th>
                                       
                                       <th>Date</th>
                                               <?php 
if($_SESSION['purpose']=='Business')
{
  echo "<th>No_Of_Cylinder</th>";
}
                                        ?>
                                       <th>Transaction Number</th>

                                       <!-- <th>Quantity</th> -->
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody style="background: white">
                                  <?php 
                                  $forin=$_SESSION['customer_id'];
$purpose=$_SESSION['purpose'];
if($_SESSION['purpose']=='Business')
{
                                 $i=0;
                                 $forin=$_SESSION['customer_id'];
                                $select="SELECT * FROM business_connection where customer_id=$forin";
                                // print_r($select);
$select_run=mysqli_query($connect,$select);
$row=mysqli_num_rows($select_run);

if($row>0)//checking business ale exit or not
{
 $second_select="SELECT * FROM gas_booking where customer_id=$forin";
$run=mysqli_query($connect,$second_select);
$row=mysqli_num_rows($run);
if($row>0)// nerathe gas book chaithitte undo enne nokkunnu
{
  while($fetch=mysqli_fetch_assoc($select_run))
  {
    $name=$fetch['name'];
  }
  ?>
  <div style="background: white">Name:   <?php echo $name; ?>&nbsp;&nbsp;&nbsp;&nbsp;
  Consumer Number:   <?php echo $forin; ?></div>
  <?php
  while($second=mysqli_fetch_assoc($run))
  {
    $i=$i+1;
    echo "<tr>
              <td>".$i." </td>
              
              <td>".$second['date']."</td>";
                     
if($_SESSION['purpose']=='Business')
{
  echo "<td>".$second['no_of_cylinder']."</td>";
}
                                       
             echo " <td>".$second['transaction_no']."</td>
              <td><span class='count'>".$second['status']."</span></td>
          </tr>"; 
  }
// $run_third=mysqli_query($connect,$third);
}
else
{
  echo "<script>alert(ningal ite vare gas book chaithittilla')</script>";
  // echo  "<div class='col-xl-12'>ningal ite vare gas book chaithittilla</div>";
  // ningal ite vare gas book chaithittilla;
}
}
else
{
  echo "<script>alert(pls register kyc form')</script>";
}
    }
                                  else
                                  {
                                
                                 $i=0;
                                 $forin=$_SESSION['customer_id'];
                                $select="SELECT * FROM connection_details where customer_id=$forin";
$select_run=mysqli_query($connect,$select);
$row=mysqli_num_rows($select_run);
if($row>0)//home il or kyc reg ano enne nokkunnu
{
 $second_select="SELECT * FROM gas_booking where customer_id=$forin";
$run=mysqli_query($connect,$second_select);
$row=mysqli_num_rows($run);
if($row>0)//nerathe gas book chaithathe ano enne nokkunnu
{
  while($fetch=mysqli_fetch_assoc($select_run))
  {
    $name=$fetch['name'];
  }
  ?>
  <div style="background: white">Name:   <?php echo $name; ?>&nbsp;&nbsp;&nbsp;&nbsp;
  Consumer Number:   <?php echo $forin; ?></div>
  <?php
  while($second=mysqli_fetch_assoc($run))
  {
    $i=$i+1;
    echo "<tr>
              <td>".$i." </td>
              
              <td><span class='count'>".$second['date']."</span></td>
              <td><span class='count'>".$second['transaction_no']."</span></td>
              <td><span class='count'>".$second['status']."</span></td>
          </tr>"; 
  }
// $run_third=mysqli_query($connect,$third);
}
else
{
  echo  "ningal ite vare gas book chaithittilla";
  // ningal ite vare gas book chaithittilla;
}
}
else
{
  // echo "kyc register chaiu";
  echo "<script>alert('pls register kyc form')</script>";
}
    }
                                  ?>
                                 
                                    <!-- <tr>
                                       <td> #5469 </td>
                                       <td> <span class="name">ambi</span> </td>
                                       <td><span class="count">231</span></td>
                                       <td><span class="count">2/03/21</span></td>
                                       <td><span class="count">23144444</span></td>
                                       <td><span class="count">under</span></td>
                                       </tr> -->
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