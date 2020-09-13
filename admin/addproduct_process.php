	<?php
require 'connect.php';
$name=$_POST['name'];
$description=$_POST['description'];
$fulldecription=$_POST['fulldecription'];
$price=$_POST['price'];
$img=$_FILES['fileToUpload']
$isactive=1;
$doi=date("d-m-y H:i:s");
$dou=date("d-m-y H:i:s");


$qry="INSERT into product_tbl(name,description,full description,price,img,isactive,doi,dou) VALUES('".$name."','".$description."','".$fulldecription."','".$price."','".$img."','".$isactive."','".$doi."','".$dou."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{

    echo "Insert Success";
     header("location:viewproduct.php");

}
else
{

    echo "Error";
}



?>