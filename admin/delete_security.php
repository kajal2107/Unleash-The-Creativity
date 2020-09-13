<?php
require 'connect.php';
$uq = "DELETE FROM `security_tbl` WHERE `id`='".$_GET['id']."'";
//echo $qry;
$rs=mysqli_query($conn,$uq);
if($rs){
	echo "success";
	header("location:viewsecurity.php");
}
else
{
	echo "error";
}
?>