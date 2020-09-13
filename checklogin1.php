<?php
session_start();
require 'connect.php';
if(!isset($_POST['submit']))
{
	header("location:login1.php");
	exit();
}
$email=$_POST['email'];
$pass=$_POST['password'];
$qry="SELECT * FROM user where email='".$email."' and password='".$pass."' and isactive=1";
// if(!$password==$confirmpassword)
// {

// 	echo "PASS AND CPASS ERROR";
// 	exit();
// 	header("location:dashboard2.php");
// }

$rs=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	$usertype=$row['usertype'];
	if($usertype==1)
	{
		$_SESSION['aid']=$row['id'];
		

		if (isset($_POST['rm'])) {
			setcookie("xyz",$email,time()+(84600*5),"/");
            setcookie("password",$pass,time()+(86400*5),"/");
                  echo "cokkie created";
            //header("location:dashboard2.php");
           // exit();   				
		}

		exit();
	}
	if($usertype==2)
	{
		$_SESSION['uid']=$row['id'];
		header("location:index.php");
		exit();
	}
}
else
{
	echo "no record found";
}
?>