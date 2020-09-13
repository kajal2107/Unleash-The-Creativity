<?php
require 'connect.php';
$id=$_POST['id'];
$stateid=$POST['stateid'];
$name=$_POST['city'];
// echo $name;
// if ($password!=$cpassword) {
// 	header("location:viewuser.php");
// 	exit();
// }
//$uq = "UPDATE `user1` SET `firstname`='".$_POST['firstname'].",'`lastname`='".$_POST['lastname']."',`email`='".$_POST['email']."',`password`='".$_POST['password']."' WHERE `id`='".$_POST['id']."'";
$uq = "UPDATE `city_tbl` SET `name`='".$_POST['city']."',`stateid`='".$_POST['stateid']."' WHERE `id`='".$_POST['id']."'";
echo $uq;
 $rs=mysqli_query($conn,$uq);
 if($rs){
	echo "success";
	header("location:viewcity.php");
	// exit();
}
 else
{
 	echo "error";
 }
?>