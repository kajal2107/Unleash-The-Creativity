<?php
session_start();
require 'connect.php';
// if (!isset($_POST['submit'])) {
//      header("location:login1.php");
//       exit();
//   }
$email=$_POST['email'];
$pass=$_POST['password'];
$qry="SELECT * FROM user where name='".$email."' and password='".$pass."' and isactive=1";
//echo $qry;
$rs=mysqli_query($conn,$qry);
// if(mysqli_num_rows($rs)>0)
// {
//     $row=mysqli_fetch_assoc($rs);
//     $usertype=$row['usertype'];
//      if($usertype==1)
//      {
//         $_SESSION['aid']=$row['id'];
        

//         if (isset($_POST['rm'])) {
//             setcookie("xyz",$email,time()+(84600*5),"/");
//             setcookie("password",$pass,time()+(86400*5),"/");
//                   echo "cokkie created";
//              header("location:dashboard2.php");
//              exit();                   
//         }
         
//     if($usertype==2)
//     {
//         $_SESSION['uid']=$row['id'];
//         header("location:login1.php");
//         exit();
//     }
// }
// else
// {
//     echo "no record found";
// }

// if () {
//     # code...
// }
  if (mysqli_num_rows($rs)>0) {
  	$row=mysqli_fetch_assoc($rs);
  	$id=$row['id'];

  	$us=$row['name'];
  	
    $pass=$row['password'];
  
   $_SESSION['username']=$us;
      echo $_SESSION['username'];
   $_SESSION['password']=$pass;  
  echo $_SESSION['password'];

      if (isset($_POST['rm'])) {
      	setcookie("username",$email,time()+(84600*30),"/");
      setcookie("password",$pass,time()+(84600*30),"/");
      header("location:dashboard2.php");
      exit();
      }
      else{
        echo "<script>alert('please Click on the checkbox');</script>";
    echo "<script>window.location='login1.php';</script>";
    exit();      }
     }

  
  else{
    echo "<script>alert('please enter your valid information');</script>";
    echo "<script>window.location='login1.php';</script>";
    exit();
  }
  ?>
