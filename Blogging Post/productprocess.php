<?php
require 'connect.php';
session_start();
echo "<pre>";
var_dump($_SESSION['id']);


$name=$_POST['productname'];
$description = $_POST['productdescription'];
$price=$_POST['price'];
$isactive=1;
$doi=date("d-m-y H:i:s");
$doi=date("d-m-y H:i:s");
if($_FILES['fileToUpload']['name']=="")
{	

	$image="avatar.png";
}
else
{	
	require 'finalupload.php';
	$image=$_FILES['fileToUpload']['name'];
}	
$qry="INSERT into product_tbl(userid,categoryid,categoryname,name,description,price,image,isactive,doi) VALUES('".$_SESSION['id']."','".$_POST['categoryid']."','".$_POST['categoryname']."','".$name."','".$description."','".$price."','".$image."','".$isactive."','".$doi."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
}
else
{
	echo "Insert Error";
}
?>