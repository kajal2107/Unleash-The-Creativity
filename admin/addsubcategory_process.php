	<?php
require 'connect.php';

$name=$_POST['sname'];
$cid = $_POST['cat_id'];
$isactive=1;
$doi=date("d-m-y H:i:s");
$dou=date("d-m-y H:i:s");


$qry="INSERT into sub_cat_tbl(category_id,name,isactive,doi,dou) VALUES('".$cid."','".$name."','".$isactive."','".$doi."','".$dou."')";

$rs=mysqli_query($conn,$qry);
if($rs)
{

    echo "Insert Success";
     header("location:viewsubcategory.php");

}
else
{

    echo "Error";
}



?>