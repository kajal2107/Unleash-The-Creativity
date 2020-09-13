<?php
require 'connect.php';
$id=$_POST['id'];
$cat_id=$POST['cat_id'];
$name=$_POST['sname'];
// echo $name;
// if ($password!=$cpassword) {
// 	header("location:viewuser.php");
// 	exit();
// }
//$uq = "UPDATE `user1` SET `firstname`='".$_POST['firstname'].",'`lastname`='".$_POST['lastname']."',`email`='".$_POST['email']."',`password`='".$_POST['password']."' WHERE `id`='".$_POST['id']."'";
$uq = "UPDATE `sub_cat_tbl` SET `name`='".$_POST['sname']."',`category_id`='".$_POST['cat_id']."' WHERE `id`='".$_POST['id']."'";
echo $uq;
 $rs=mysqli_query($conn,$uq);
 if($rs){
	echo "success";
	header("location:viewsubcategory.php");
	exit();
}
 else
{
 	echo "error";
 }
?>