<?php include"top.php";
$key=$_GET['id'];
// echo $key;
 $select="SELECT * FROM customer_complaint where complaint_id=$key";
 $run=mysqli_query($connect,$select);
$fetch=mysqli_fetch_assoc($run);

?>
<div class="container">
	<textarea style="margin-top: 72px;
    height: 500px;
    width: 89%;
    margin-left: 45px;
background: lightgray;
border: 2px solid black;
    font-size: 22px;
    padding: 9px;"name="" id="" cols="30" rows="10"><?php echo $fetch['complaint'] ?></textarea>
    <!-- <div class="col-12"> --><?php echo "<img style='background:red
    width: 89%;
    height: 398px;
    margin-left: 45px;'src='../front/".$fetch['proof']."' >"; ?></div>
<!-- </div> -->
<?php include"footer.php";?>