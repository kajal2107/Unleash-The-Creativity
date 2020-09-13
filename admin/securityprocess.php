<?php
require 'connect.php';
$question=$_GET['question'];
$isactive=1;
$doi=date('y-m-d h:i:s');
$qry="INSERT INTO security_tbl(question,isactive,doi) values('".$question."',$isactive,'".$doi."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	echo "success";
	header("location:viewsecurity.php");
}
else
{
	echo "error";
}
?>