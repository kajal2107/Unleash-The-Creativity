<?php
require 'connect.php';
$id=$_POST['id'];
$fn=$_POST['firstname'];
echo $fn;
$ln=$_POST['lastname'];
echo $ln;
$em=$_POST['email'];
echo $em;
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

// if ($password!=$cpassword) {
// 	header("location:viewuser.php");
// 	exit();
// }
//$uq = "UPDATE `user1` SET `firstname`='".$_POST['firstname'].",'`lastname`='".$_POST['lastname']."',`email`='".$_POST['email']."',`password`='".$_POST['password']."' WHERE `id`='".$_POST['id']."'";
 $uq="update user1 set 	firstname='".$fn."',lastname='".$ln."',email='".$em."',password='".$password."' where id=$id ";
echo $uq;
 $rs=mysqli_query($conn,$uq);
 if($rs){
	echo "success";
	header("location:viewuser.php");
	exit();
}
 else
{
 	echo "error";
 }
?>