<?php 
 //session_start();
 // if (isset($_SESSION['aid'])) {
 //     header("lcation:dashboard2.php");
 //     exit();
 // }
 ?>

<!DOCTYPE HTML>
<html>

<!-- Mirrored from extracoding.com/demo/html/adminise/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Adminise - Clean And Corporate Admin Panel Template</title>
<!--// Stylesheets //-->
<link href="assets/css/A.style.css%2bbootstrap.css%2cMcc.0ONHoLZfWm.css.pagespeed.cf.2IS1LTyY4Z.css" rel="stylesheet" media="screen"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<script type="text/javascript" src="assets/js/jquery.js.pagespeed.jm.ZzSiN_5Whq.js"></script>
<script src="assets/js/bootstrap.min.js%2bicheck.min.js.pagespeed.jc.iWFNLGOGoP.js"></script><script>eval(mod_pagespeed_4faLXq7bXy);</script>
<script>eval(mod_pagespeed_THTTwgJFDR);</script>
<link rel="stylesheet" type="text/css" href="parsley.css">
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<link rel="stylesheet" type="text/css" href="parsley.css">

<body>
<!-- Wrapper Start -->
<div class="loginwrapper">
	<span class="circle"></span>
	<div class="loginone">
    	<header>
        	<a href="dashboard1.html"><img src="assets/images/xlogo.png.pagespeed.ic.Foz7Hxw-1_.png" alt=""/></a>
            <p>Enter your credentials to login to your account</p>
        </header>
        <form action="checklogin.php" method="post" id="myform" data-parsley-validate>
        	<div class="username" >
        		<input type="text" class="form-control" placeholder="Enter your username" name="email" required="" />
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="password" >
            	<input type="password" class="form-control" placeholder="Enter your password" name="password" required=""  />
                <i class="glyphicon glyphicon-lock"></i>
            </div>
            <div class="custom-radio-checkbox">
                <input tabindex="1" type="checkbox" class="bluecheckradios" name="rm" required="" data-parsley-min-check=1 >
                <label>Remember me</label>
            </div>
			<script>$(document).ready(function(){$('.bluecheckradios').iCheck({checkboxClass:'icheckbox_flat-blue',radioClass:'iradio_flat-blue',increaseArea:'20%'});});</script>
            <input type="submit" class="btn btn-primary style2" value="Sign In" name="submit" />
        </form>
       <!--  <footer>
        	<a href="#" class="forgot pull-left">I forgot my password</a>
            <a href="#" class="register pull-right">Create account</a>
            <div class="clear"></div>
        </footer>
     --></div>
</div>
<!-- Wrapper End -->

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');ga('create','UA-42761673-1','extracoding.com');ga('send','pageview');</script>

</body>

<!-- Mirrored from extracoding.com/demo/html/adminise/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 07:50:24 GMT -->
</html>
