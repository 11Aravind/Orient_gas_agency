<?php 
session_start();
$connect=mysqli_connect('localhost','root','','gas_agency');
if($connect=='')
{
	echo "connection is failed";
}
?>