<?php 
session_start();
$connect=mysqli_connect('localhost','root','','Miniproject_db');
if($connect=='')
{
	echo "connection is failed";
}
?>