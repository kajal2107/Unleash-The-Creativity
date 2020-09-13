<?php
require 'connect.php';
// var_dump($_GET);
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$email=$_GET['email'];
$password=$_GET['password'];
$cpassword=$_GET['confirmpassword'];
$isactive=1;
$usertype=2;
$doi=date("d-m-y H:i:s");
 
    $select="select * from user1 where email='".$email."' and isactive=1";
    $query1=mysqli_query($conn,$select);
     if (mysqli_fetch_assoc($query1)) {
     	header("location:zeel_index.php?msg=your email is already exsist");
     	exit();
     }
if(!$password==$cpassword)
{

	echo "PASS AND CPASS ERROR";
	exit();
	
}
if (isset($_GET['chek'])) {
   setcookie('email',$email,time()+(84600*10),'/');
   setcookie('password',$password,time()+(84600*10),'/');

}


$qry="INSERT into user1(firstname,lastname,email,password,isactive,usertype,doi) VALUES('".$fn."','".$ln."','".$email."','".$password."','".$isactive."','".$usertype."','".$doi."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo "Insert Success";
	header("location:zeel_index.php?reg_msg=registeration succesful");
}
else
{

	echo "Error";
}

?>