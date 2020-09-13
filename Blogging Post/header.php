<?php
 session_start();
 var_dump($_SESSION);
 include "connect.php";
 // exit();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tevratgundogdu.com/works/ideabox-html-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:00:13 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ideabox - Material Blog/Magazine Template</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Tooltip plugin (zebra) css file -->
	<link rel="stylesheet" type="text/css" href="plugins/zebra-tooltip/zebra_tooltips.min.css">

	<!-- Owl Carousel plugin css file. only used pages -->
	<link rel="stylesheet" type="text/css" href="plugins/owl-carousel/assets/owl.carousel.min.css">

	<!-- Ideabox main theme css file. you have to add all pages -->
	<link rel="stylesheet" type="text/css" href="css/main-style.css">

	<!-- Ideabox responsive css file -->
	<link rel="stylesheet" type="text/css" href="css/responsive-style.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="parsley/ps.js"></script>
	<?php 
     if ($_GET['msg']) {
     	
    
	 ?>
	<script type="text/javascript">
		$(document).ready(function(){
          alert("your email is already exsist");
		});
	</script>
	<?php 
      }

	 ?>
	 <?php 
     if (isset($_GET['reg_msg'])) {
     	?>
	<script type="text/javascript">
		$(document).ready(function(){
          alert("Registration Successfull");
		});
	</script>
	<?php 
      }
      
	 ?>
	 
</head>

<body>
	
	<!-- header start -->
	<header class="header">
		<div class="header-wrapper">

			<!--sidebar menu toggler start -->
			<div class="toggle-sidebar material-button">
				<i class="material-icons">&#xE5D2;</i>
			</div>
			<!--sidebar menu toggler end -->

			<!--logo start -->
			<div class="logo-box">
				<h1>
					<a href="index.html" class="logo"></a>
				</h1>
			</div>
			<!--logo end -->

			<div class="header-menu">

				<!-- header left menu start -->
				<ul class="header-navigation" data-show-menu-on-mobile>
					<li>
						<a href="#" class="material-button submenu-toggle">HOME</a>
						<div class="header-submenu">
							<ul>
								<li><a href="index.html">Home demo 1</a></li>
								<li><a href="index2.html">Home demo 2</a></li>
								<li><a href="index3.html">Home demo 3</a></li>
								<li><a href="index4.html">Home demo 4</a></li>
								<li><a href="index5.html">Home demo 5</a></li>
								<li><a href="index6.html">Home demo 6</a></li>
							</ul>
						</div>
					</li>
					<li>
						<a href="about-us.html" class="material-button submenu-toggle">About Us</a>
						</li>
					<?php if(isset($_SESSION['id'])){ ?>
					<li>
						<a href="product.php" class="material-button submenu-toggle">Post Art and Craft Product</a>
						<!-- <div class="header-submenu">
							<ul>
								<li><a href="Product.php">Category</a></li>
								<li><a href="">Category</a></li>
								<li><a href="">Category</a></li>
								<li><a href="">Category</a></li>
								<li><a href="list-timeline.html">List timeline</a></li>
								<li><a href="list-two-column.html">List column 2</a></li>
								<li><a href="list-three-column.html">List column 3</a></li>
								<li><a href="detail-standart.html">Detail standart</a></li>
								<li><a href="detail-parallax.html">Detail parallax</a></li>
								<li><a href="detail-with-large-adbox.html">Detail adbox 1</a></li>
								<li><a href="detail-with-slim-adbox.html">Detail adbox 2</a></li>
								<li><a href="detail-left-sidebar.html">Left sidebar</a></li>
								<li><a href="detail-left-sidebar-adbox.html">Left sidebar adbox</a></li>
								<li><a href="detail-full-width.html">Full width</a></li>								
							</ul>
						</div>
	 -->				</li>
					<?php } ?>
<?php if(isset($_SESSION['id'])){ ?>
					<li>
						<a href="#" class="material-button submenu-toggle">Upload Audio/Video</a>
						<div class="header-submenu">
							<ul>
								<li><a href="addaudio.php">Upload Audio</a></li>
								<li><a href="addvideo.php">Upload Video</a></li>
								<li><a href="video-iframe.html">Video iframe</a></li>
								<li><a href="video-custom-player.html">Video custom player</a></li>
							</ul>
						</div>
					</li>
					<?php } ?>



					<?php if(isset($_SESSION['id'])){ ?>
					<li>
						<a href="#" class="material-button submenu-toggle">Feedback </a></li>
						<?php } ?>
						<li>
						<a href="contact.html" class="material-button submenu-toggle">Contact Us </a></li>
					
						<!-- <div class="header-submenu">

							<ul>
								<li><a href="authors.html">Authors</a></li>
								<li><a href="author-posts-1.html">Author posts-column</a></li>
								<li><a href="author-posts-2.html">Author posts-timeline</a></li>
								<li><a href="about-us.html">About us</a></li>
								<li><a href="privacy-policy.html">Privacy policy</a></li>								
								<li><a href="contact.html">Contact</a></li>
								<li><a href="error.html">Error</a></li>
							</ul>
						</div>
					</li>
					<li>
						<a href="#" class="material-button">EXTRA PAGES <i class="material-icons">&#xE313;</i></a>
					</li>
				</ul> -->
				<!-- header left menu end -->

			</div>
			<div class="header-right with-seperator">

				<!-- header right menu start -->
				<ul class="header-navigation">
					<!-- <li>
						<?php if(isset($_SESSION['id'])){ ?>
							<a href="#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> <span class="hide-on-tablet">Upload-Product</span></a>

						</li>
					<?php } ?>
					 --><li>
						<a href="#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> <span class="hide-on-tablet">Account</span></a>
						<div class="header-submenu">
							<ul>
								<?php if(isset($_SESSION['id'])){ ?>
									<li><a href="author-posts.php">Profile</a></li>
									<li><a href="logout.php">logout</a></li>
								<?php }else{ ?>
									<li><a href="checklogin" data-modal="loginModal">Login</a></li>
									<li><a href="registerprocess.php" data-modal="registerModal">Register</a></li>
								<?php } ?>
								
							</ul>
						</div>
					</li>
					
				</ul>
				<!-- header right menu end -->

			</div>

			<!--header search panel start -->
			<div class="search-bar">
				<form class="search-form">
					<div class="search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="search-input">
						<button type="submit" name="search" class="search-submit"><i class="material-icons">&#xE5C8;</i></button>
					</div>
					<span class="search-close search-toggle">
						<i class="material-icons">&#xE5CD;</i>
					</span>
				</form>
			</div>
			<!--header search panel end -->

		</div>
	</header>
	<!-- header end -->


	<!-- Left sidebar menu start -->
	<div class="sidebar">
		<div class="sidebar-wrapper">

			<!-- side menu logo start -->
			<div class="sidebar-logo">
				<a href="#"></a>
				<div class="sidebar-toggle-button">
					<i class="material-icons">&#xE317;</i>
				</div>
			</div>
			<!-- side menu logo end -->

			<!-- showing on mobile screen sizes -->
			<!-- mobile menu start -->
			<div id="mobileMenu">
				<div class="sidebar-seperate"></div>
			</div>
			<!-- mobile menu end -->

			<!-- sidebar menu start -->
			<ul class="sidebar-menu">
				<li class="active">
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE88A;</i></span>
	                	<span class="menu-label">Home</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE038;</i></span>
	                	<span class="menu-label">Videos</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE0BF;</i></span>
	                	<span class="menu-label">Posts</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE866;</i></span>
	                	<span class="menu-label">Contact</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE8B0;</i></span>
	                	<span class="menu-label">Multi Menu</span>
	                	<span class="multimenu-icon"><i class="material-icons">&#xE313;</i></span>
	                </a>
	                <ul>
	                	<li>
	                		<a href="#"><span class="menu-label">Menu Level 1</span></a>
	                	</li>
	                	<li>
	                		<a href="#"><span class="menu-label">Menu Level 2</span></a>
	                	</li>
	                	<li>
	                		<a href="#"><span class="menu-label">Menu Level 3</span></a>
	                	</li>
	                </ul>
	            </li>
			</ul>
			<!-- sidebar menu end -->

			<div class="sidebar-seperate"></div>

			<!-- sidebar menu start -->
			<ul class="sidebar-menu">
				<li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE88A;</i></span>
	                	<span class="menu-label">Extra Menu One</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE8B0;</i></span>
	                	<span class="menu-label">Extra Menu Two</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE038;</i></span>
	                	<span class="menu-label">Extra Menu Three</span>
	                </a>
	            </li>
			</ul>
			<!-- sidebar menu end -->

			<div class="sidebar-seperate"></div>

			<!-- sidebar menu start -->
			<ul class="sidebar-menu">
				<li>
					<a href="#" class="facebook material-button">
	                	<span class="menu-label">Facebook</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="twitter material-button">
	                	<span class="menu-label">Twitter</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="google-plus material-button">
	                	<span class="menu-label">Google +</span>
	                </a>
	            </li>
			</ul>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->
