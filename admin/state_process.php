<?php
require 'connect.php';
$state=$_POST['state'];
$isactive=1;
$doi=date('y-m-d h:i:s');
$qry="INSERT INTO state_tbl(name,isactive,doi) values('".$state."',$isactive,'".$doi."')";
//echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	echo "success";
	header("location:viewstate.php");
}
else
{
	echo "error";
}
?>