	<?php
require 'connect.php';
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['confirmpassword'];
$isactive=1;
$usertype=1;
$doi=date("d-m-y H:i:s");
$dou=date("d-m-y H:i:s");
if(!$password==$cpassword)
{

    echo "PASS AND CPASS ERROR";
    exit();
    header("location:dashboard2.php");
}


$qry="INSERT into user1(firstname,lastname,email,password,isactive,usertype,doi,dou) VALUES('".$fn."','".$ln."','".$email."','".$password."','".$isactive."','".$utype."','".$doi."','".$dou."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{

    echo "Insert Success";
     header("location:viewuser.php");

}
else
{

    echo "Error";
}



?>