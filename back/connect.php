<?php 
error_reporting(0);
SESSION_START();

$connect=mysqli_connect('localhost','root','','gas_agency');
if($connect=='')
{
	echo "connection is failed";
}
?>
