  <?php
require 'connect.php';
$qry="SELECT * FROM city_tbl WHERE isactive != 2";
//echo $qry;
$rs=mysqli_query($conn,$qry);
?><?php
session_start();
if(!isset($_SESSION['aid'])){
    // header("location:login1.php");
}

?>
<!DOCTYPE HTML>
<html>

<!-- Mirrored from extracoding.com/demo/html/adminise/basictables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Adminise - Clean And Corporate Admin Panel Template</title>
<!--// Stylesheets //-->
<link href="assets/css/A.style.css%2bbootstrap.css%2cMcc.0ONHoLZfWm.css.pagespeed.cf.2IS1LTyY4Z.css" rel="stylesheet" media="screen"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<!--// Javascript //-->
<script type="text/javascript" src="assets/js/jquery.js.pagespeed.jm.ZzSiN_5Whq.js"></script>
<script src="assets/js/bootstrap.min.js%2bjquery.accordion.js%2bjquery.custom-scrollbar.min.js%2bicheck.min.js%2bselectnav.min.js%2bfunctions.js.pagespeed.jc.E43GhJAKRQ.js"></script><script>eval(mod_pagespeed_4faLXq7bXy);</script>
<script>eval(mod_pagespeed_5xamDk3U$P);</script>
<script>eval(mod_pagespeed_2mVYeL32K_);</script>
<script>eval(mod_pagespeed_THTTwgJFDR);</script>
<script>eval(mod_pagespeed_HZwFFniCI0);</script>
<script>eval(mod_pagespeed_eqGDkjqIuR);</script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="structure-row">
        <!-- Sidebar Start -->
       <aside class="sidebar">
            <div class="sidebar-in">
                <!-- Sidebar Header Start -->
                <header>
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="dashboard1.html"><img src="assets/images/xlogo.png.pagespeed.ic.Foz7Hxw-1_.png" alt="Adminise"/></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->
                <?php include 'sidebar.php'; ?>
                <!-- Sidebar Navigation End -->
                <!-- Shadow Start -->
                <span class="shadows"></span>
                <!-- Shadow End -->
            </div>
        </aside>
         <!-- Sidebar End -->
        <!-- Right Section Start -->
        <div class="right-sec">
            <!-- Right Section Header Start -->
            <header>
                <!-- User Section Start -->
                  <!-- Header Top Navigation Start -->
                  <nav class="topnav">
                    <ul id="nav1">
                       </li>
                        <li class="settings">
                            <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
                        </li>
                    </ul>
                </nav>
               <!-- Header Top Navigation End -->
                <div class="clearfix"></div>
            </header>
            <!-- Right Section Header End -->
            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sec-box">
                                <a class="closethis">Close</a>
                                <header>
                                    <h2 class="heading">View City</h2>
                                </header>
                                <div class="contents">
                                    <a class="togglethis">Toggle</a>
                                    <section>
                                       <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>State Name</th>
                                                    <th>City Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    if(mysqli_num_rows($rs)>0) 
                                                    {
                                                        while($row=mysqli_fetch_assoc($rs))
                                                        {
                                                            ?>

                                                                <tr>
            <td>
                <?php echo $row['id']; ?>
            </td>
            <td>
                <?php $q = "SELECT * FROM state_tbl WHERE id='".$row['stateid']."'";
                $r = mysqli_query($conn,$q);
                 if($r){
                    while($rw = mysqli_fetch_assoc($r)){


                  ?>
                <?php echo $rw['name'] ; ?>
                <?php
                }
                 } ?>
            </td>
            
            <td>
                <?php echo $row['name']; ?>
            </td>
            <td>
                     <a href="edit_city.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a>
                     </td>
                     <td>       
                      <a href="delete_city.php?id=<?php echo $row['id']; ?>" class="btn">Delete</a>
                                                                    </td>
                                      </tr>                          
                                                              <?php
                                                               }
                                                    }
                                                    else
                                                    {
                                                        echo "0 row found";
                                                    }
                                                ?>         
                                        </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Content Section End -->
        </div>
        <!-- Right Section End -->
    </div>
</div>
<!-- Wrapper End -->

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');ga('create','UA-42761673-1','extracoding.com');ga('send','pageview');</script>

</body>

<!-- Mirrored from extracoding.com/demo/html/adminise/basictables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:20 GMT -->
</html>


                                        