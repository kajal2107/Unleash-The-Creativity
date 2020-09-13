<?php
require 'connect.php';
var_dump($_GET);
$email=$_GET['uname'];
$password=$_GET['password'];
$isactive=1;
$usertype=1;
$doi=date("d-m-y H:i:s");
$dou=date("d-m-y H:i:s");


$qry="INSERT into user(email,password,isactive,usertype,doi,dou) VALUES('".$email."','".$password."','".$isactive."','".$usertype."','".$doi."','".$dou."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo "Insert Success";;
}
else
{

	echo "Error";
}


?>