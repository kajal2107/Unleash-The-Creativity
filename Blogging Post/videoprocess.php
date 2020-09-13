<?php
require 'connect.php';

$name=$_POST['videoname'];
$description = $_POST['videodescription'];
$isactive=1;
$doi=date("d-m-y H:i:s");
$dou=date("d-m-y H:i:s");
if($_FILES['fileToUpload']['name']=="")
{	

	$upload="";
}
else
{	
	require 'finaluploadvideo.php';
	$upload=$_FILES['fileToUpload']['name'];
}
$qry="INSERT into video_cat_tbl(name,description,upload,isactive,doi,dou) VALUES('".$name."','".$description."','".$upload."','".$isactive."','".$doi."','".$dou."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo "<script>alert('Uploaded successfully')</script>";
	// header("location:zeel_index.php?up_audio= succesful");
	echo "<script>window.location='addavideo.php';</script>";

}
else
{

	echo "Error";
}
