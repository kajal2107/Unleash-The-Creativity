<?php
$servername="localhost";
$username="root";
$password="";
$dbname="unleash_the_creativity";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{

	die("Connection failed".mysqli_connect_error());
}
echo "";
$db = mysqli_select_db($conn,$dbname);
if($db)
{

	echo "   ";
}
else
{
	echo"";
}
?>