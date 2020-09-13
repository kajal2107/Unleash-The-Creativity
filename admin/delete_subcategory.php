<?php
require 'connect.php';
$uq = "DELETE FROM `sub_cat_tbl` WHERE `id`='".$_GET['id']."'";
//echo $qry;
$rs=mysqli_query($conn,$uq);
if($rs){
	echo "success";
	header("location:viewsubcategory.php");
}
else
{
	echo "error";
}
?>