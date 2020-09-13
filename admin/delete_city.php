<?php
require 'connect.php';
$uq = "DELETE FROM `city_tbl` WHERE `id`='".$_GET['id']."'";
//echo $qry;
$rs=mysqli_query($conn,$uq);
if($rs){
	echo "success";
	header("location:viewcity.php");
}
else
{
	echo "error";
}
?>