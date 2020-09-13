<?php
require 'connect.php';
$uq = "DELETE FROM `state_tbl` WHERE `id`='".$_GET['id']."'";
//echo $qry;
$rs=mysqli_query($conn,$uq);
if($rs){
	echo "success";
	header("location:viewstate.php");
}
else
{
	echo "error";
}
?>