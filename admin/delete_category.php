<?php
require 'connect.php';
$uq = "DELETE FROM `category_tbl` WHERE `id`='".$_GET['id']."'";
//echo $qry;
$rs=mysqli_query($conn,$uq);
if($rs){
	echo "success";
	header("location:viewcategory.php");
}
else
{
	echo "error";
}
?>