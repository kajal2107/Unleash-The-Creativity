<?php
require 'connect.php';
$doi=date('y-m-d h:i:s');
$uq = "UPDATE `security_tbl` SET `question`='".$_POST['question']."' WHERE `id`='".$_POST['id']."'";
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