<div id="top"><?php include 'top.php'; ?></div>
<div id="head" style="margin-top: 70px;margin-bottom: 23px;">
    <center><h1 style="">Transfer Termination Voucher</h1></center>
  </div>
<div id="mainheading" style="margin-bottom: 59px;">
  <center >
<p style="font: small-caption;"><b>The gas connection book is to be picked up from our gas center. If you have not paid the gas connection fee, please bring it too.<br> The voucher below can be downloaded</b></p></center>
</div>
<div class="col-12"style="width: 93%;
    border-radius: 5px;
    height: 663px;
    /* padding: 30px; */
    margin-left: 48px;
    margin-right: 23px;
    background: #ffffff;
    margin-bottom: 19px;">
<?php 
 $forin_key=$_SESSION['customer_id']; 
  $select_business="SELECT * from connection_details Where customer_id='$forin_key'";
// print_r($select_business);
$run_business=mysqli_query($connect,$select_business);
$num_row=mysqli_num_rows($run_business);
if($num_row>0)
{
  $take_element=mysqli_fetch_assoc($run_business);
  ?>


<div class="row gutters-sm">
            <!-- first col-6 -->
            <div class="col-6">
              <!-- privios class name is col-md-8 -->
              <div class="card mb-3" style="
    height: 93%;
    padding: 38px;
">
                <div class="card-body">
                   <!-- <div class="card"> -->
                <!-- <div class="card-body">              -->
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php echo "<img style=' height: 172px;'src=' ".$take_element['upload_phto']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                    <div class="mt-3">
                      <!-- <h4><?php echo $take_element['name'] ?></h4> -->
                      
                    </div>
                  </div>
                <!-- </div> -->
              <!-- </div> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $take_element['name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $take_element['dob']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $take_element['gender']; ?>
                    </div>
                  </div>
                  <hr>
                   
                  <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php  
echo $take_element['house_name']; echo ",";
echo $take_element['post_office']; echo ",";
echo $take_element['city']; echo ",";
echo $take_element['district']; echo ",";


                       ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pincode</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "<div>".$take_element['pincode']."</div>"; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" >Cunsumer No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <div >706707<?php echo $take_element['customer_id'] ?></div>
                    </div>
                  </div>
                  <!-- <hr> -->
                </div>
              </div>
             
              <!-- <div id="watermark">voucher</div> -->
         
              </div>
              <!-- second col-6 -->
              <div class="col-6">
                <!-- temp hehe -->
                <!-- ewzrxdfcghjbkml;erxtcfygvuhbijnksrdtyguhij -->
                  <div class="card mb-3" style="
    height: 93%;
    padding: 38px;
">
                <div class="card-body">
                  <div class="row" style="margin-bottom: 27px;">
                   <u><b> Marketing division</b></u>
                    <!-- <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div> -->
                   <!--  <div class="col-sm-9 text-secondary">
                      <?php echo $take_element['name'] ?>
                    </div> -->
                  </div>
                  <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">State office</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "Kerala" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="margin-bottom: 27px;">
                  <!--   <div class="col-sm-3">
                      <h6 class="mb-0"></h6>
                    </div> -->
                    <u><b>Distributor</b></u>
                   <!--  <div class="col-sm-9 text-secondary">
                      <?php echo $take_element['gender']; ?>
                    </div> -->
                  </div>
                  <!-- <hr> -->
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
$query="SELECT * FROM staff_details where staff_id='4'";
$result=mysqli_query($connect,$query);
$get_element=mysqli_fetch_assoc($result);
echo $get_element['staff_name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
  
 Oriented Gas Agency market junction Kottarakkara,
Kollam,
Kerala ,
Pincode 690520,
Mobile Number:+91 9856321470                 </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Category</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "<div >".$take_element['purpose']."</div>"; ?>
                    </div>
                  </div>
<hr>
                  <div style="display:flex"><div style="flex:1;width: 240px;
    height: 98px;">
                    <!-- <?php echo "<div >".$take_element['bus_signature']."</div>"; ?> -->
                    
                    <?php echo "<img style='width: 240px;height: 98px;'
                    src=".$take_element['signature'].">" ?>
                    <br>Customer's Signature</div>

    <div style="flex:1">
      <?php 
// $query="SELECT * FROM staff_details where staff_id='4'";
// $result=mysqli_query($connect,$query);
// $get_element=mysqli_fetch_assoc($result);
$folder="../back/";
      echo "<img style='width: 240px;height: 98px;'
                    src=".$folder.$get_element['signature'].">" ?>
    <br>Manegor Signature</div>
    </div>
                  <!-- <hr> -->
                 <!--  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" style='color:red'>Cunsumer Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <div style='color:red'>706707<?php echo $take_element['customer_id'] ?></div>
                    </div>
                  </div> -->
                  
                  <!-- <hr> -->
                </div>
                <div id="downloadBtn">
              <button type="button" onclick="printing()"style="float:right;" class="btn btn-primary">Download</button>
              </div>

                        <script>
                function printing(){
// var top=document.getElementById("top");
 $("#downloadBtn").hide();
  // $("#statuschek").hide();
  $("#top").hide();
  $("#footer").hide();
  $("#mainheading").hide();
 // top.style.display="none";
                  window.print();
                   }
              </script>
              </div>
               
              </div>

            </div>

          </div>

<?php } ?>
</div>
<div id="footer">
<?php include 'footer.php'; ?>
</div>