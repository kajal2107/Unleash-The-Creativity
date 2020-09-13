	<?php
require 'connect.php';
$name=$_POST['name'];
$isactive=1;
$doi=date("d-m-y H:i:s");
$dou=date("d-m-y H:i:s");


$qry="INSERT into category_tbl(name,isactive,doi,dou) VALUES('".$name."','".$isactive."','".$doi."','".$dou."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{

    echo "Insert Success";
     header("location:viewcategory.php");

}
else
{

    echo "Error";
}



?>