<?php
require 'connect.php';
$sid=$_POST['stateid'];
$city=$_POST['city'];
$isactive=1;
$doi=date('y-m-d h:i:s');
$dou=date('y-m-d h:i:s');
$qry="INSERT INTO city_tbl(stateid,name,isactive,doi,dou) values('".$sid."','".$city."','".$isactive."','".$doi."','".$dou."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	echo "success";
	header("location:viewcity.php");
}
else
{
	echo "error";
}
?>