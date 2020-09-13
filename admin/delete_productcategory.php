<?php
require 'connect.php';
$uq = "DELETE FROM `product_cat_tbl` WHERE `id`='".$_GET['id']."'";
//echo $qry;
$rs=mysqli_query($conn,$uq);
if($rs){
	echo "success";
	header("location:viewproductcategory.php");
}
else
{
	echo "error";
}
?>