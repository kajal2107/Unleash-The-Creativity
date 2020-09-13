<?php
require 'connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
echo $name;
// if ($password!=$cpassword) {
// 	header("location:viewuser.php");
// 	exit();
// }
//$uq = "UPDATE `user1` SET `firstname`='".$_POST['firstname'].",'`lastname`='".$_POST['lastname']."',`email`='".$_POST['email']."',`password`='".$_POST['password']."' WHERE `id`='".$_POST['id']."'";
$uq = "UPDATE `category_tbl` SET `name`='".$_POST['name']."' WHERE `id`='".$_POST['id']."'";
echo $uq;
 $rs=mysqli_query($conn,$uq);
 if($rs){
	echo "success";
	header("location:viewcategory.php");
	exit();
}
 else
{
 	echo "error";
 }
?>