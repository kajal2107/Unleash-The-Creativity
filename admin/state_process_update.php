<?php
require 'connect.php';
$doi=date('y-m-d h:i:s');
$uq = "UPDATE `state_tbl` SET `name`='".$_POST['state']."' WHERE `id`='".$_POST['id']."'";
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