<?php
 session_start();
 var_dump($_SESSION);
 // exit();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tevratgundogdu.com/works/ideabox-html-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:00:13 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Unlease the Creativity</title>

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
     if ($_GET['reg_msg']) {
     	
    
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
`
				<!-- header left menu start -->
				<ul class="header-navigation" data-show-menu-on-mobile>
					<li>
						<a href="#" class="material-button submenu-toggle">HOME</a>
						
					</li>
					<li><a href="list-three-column.html">POSTS</a></li>
					<li><a href="video-standart.html">VIDEO</a></li>

					<li>
						<a href="#" class="material-button submenu-toggle">CATEGORY <i class="material-icons">&#xE313;</i></a>
						<div class="header-submenu">
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
				</ul>
				<!-- header left menu end -->

			</div>
			<div class="header-right with-seperator">

				<!-- header right menu start -->
				<ul class="header-navigation">
					<?php if(isset($_SESSION['id'])){ ?>
						<a href="#" class="material-button">Upload Product</span></a>
					<?php } ?>
					<li>
						<a href="#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> <span class="hide-on-tablet">Account</span></a>
						<div class="header-submenu">
							<ul>
								<?php if(isset($_SESSION['id'])){ ?>
									<li><a href="profile.php" data-modal="loginModal">Profile</a></li>
									<li><a href="logout.php" data-modal="registerModal">logout</a></li>
								<?php }else{ ?>
									<li><a href="#" data-modal="loginModal">Login</a></li>
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
	            
			</ul>
			<!-- sidebar menu end -->

			<div class="sidebar-seperate"></div>

			

			<div class="sidebar-seperate"></div>

			
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="main-container">
		<section class="main-highlight">
			<div class="highlight-carousel slider-carousel">
				
				<div class="owl-carousel" id="postCarousel">
				     <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img5.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">Facebook: Cambridge Analytica may have accessed some users’ private messages</h3>
				    			<div class="post-meta">
				    				<div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div>
				    				<div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
				    					</span>
				    					<span class="middot">·</span>
				    					<span class="post-meta-date">
				    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
				    					</span>
				    				</div>
				    			</div>
				    		</div>
				    		<a href="#" class="post-overlayLink"></a>
				    	</article>

				    </div>
				    <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img4.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">Instagram will soon let you download your data, just like Facebook</h3>
				    			<div class="post-meta">
				    				<div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div>
				    				<div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
				    					</span>
				    					<span class="middot">·</span>
				    					<span class="post-meta-date">
				    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
				    					</span>
				    				</div>
				    			</div>
				    		</div>
				    		<a href="#" class="post-overlayLink"></a>
				    	</article>

				    </div>
				    <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img7.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">It’s time for Google to retire Chromecast for Android TV</h3>
				    			<div class="post-meta">
				    				<div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div>
				    				<div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
				    					</span>
				    					<span class="middot">·</span>
				    					<span class="post-meta-date">
				    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
				    					</span>
				    				</div>
				    			</div>
				    		</div>
				    		<a href="#" class="post-overlayLink"></a>
				    	</article>

				    </div>
				    <div class="item">

				    	<article class="post-box" style="background-image: url(img/news-test-images/news-img10.jpg);">
				    		<div class="post-overlay">
				    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
				    			<h3 class="post-title">Instagram will soon let you download your data, just like Facebook</h3>
				    			<div class="post-meta">
				    				<div class="post-meta-author-avatar">
				    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
				    				</div>
				    				<div class="post-meta-author-info">
				    					<span class="post-meta-author-name">
				    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
				    					</span>
				    					<span class="middot">·</span>
				    					<span class="post-meta-date">
				    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
				    					</span>
				    				</div>
				    			</div>
				    		</div>
				    		<a href="#" class="post-overlayLink"></a>
				    	</article>

				    </div>
				</div>

			</div>
		</section>
		<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">
					<div class="content-timeline">
						<!--Timeline header area start -->
						<div class="post-list-header">
							<span class="post-list-title">Latest stories</span>
							<select class="frm-input">
								<option value="1">Technology</option>
								<option value="1">Book</option>
								<option value="1">Cinema</option>
							</select>
						</div>
						<!--Timeline header area end -->


						<!--Timeline items start -->
						<div class="timeline-items">

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img8.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">It has roots in a piece of classical Latin literature from making it over</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img7.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Increase Your Health One Salad at a Time</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img6.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Responsive Web Design & Workflows for Todays Web</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img5.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">The Towering Success Of Skyscrapers: Primrose Hill Estate Agents Take A View</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img4.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Educational Toys For Toddlers Are</h3>
											<p class="timeline-post-desc">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img3.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">How Meal Replacements Stop Your Weight From Coming on the Rebound</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img2.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Web Design and Web Development: Know the Basics</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img1.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">The Importance Of Letting Your Kids Join After School Activities</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img3.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">How Meal Replacements Stop Your Weight From Coming on the Rebound</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img2.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">Web Design and Web Development: Know the Basics</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-left">
									<div class="timeline-left-wrapper">
										<a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
										<span class="timeline-date">3 min ago</span>
									</div>
								</div>
								<div class="timeline-right">
									<div class="timeline-post-image">
										<a href="#">
											<img src="img/news-test-images/news-img1.jpg" width="260">
										</a>
									</div>
									<div class="timeline-post-content">
										<a href="#" class="timeline-category-name">Technology</a>
										<a href="#">
											<h3 class="timeline-post-title">The Importance Of Letting Your Kids Join After School Activities</h3>
										</a>
										<div class="timeline-post-info">
											<a href="#" class="author">Tevrat Gündoğdu</a>
											<span class="dot"></span>
											<span class="comment">32 comments</span>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!--Timeline items end -->

						<!--Data load more button start  -->
						<div class="load-more">
							<button class="load-more-button material-button" type="button">
								<i class="material-icons">&#xE5D5;</i>
								<span>Load More</span>
							</button>
						</div>
						<!--Data load more button start  -->
					</div>

				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Popular Posts</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-boxed-post">
								<ul>
									<li class="active">
										<a href="#" style="background-image: url(img/news-test-images/news-img7.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>1</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img5.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>2</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img6.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>3</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img3.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>4</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>


						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Carousel Posts</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-carousel-post">
								<div class="owl-carousel" id="widgetCarousel">
								    <div class="item">
								    	<a href="#">
								    		<div class="w-play-img">
								    			<img src="img/news-test-images/news-img4.jpg" width="300">
								    			<span class="w-video-icon"><i class="material-icons">&#xE038;</i></span>
								    		</div>
								    		<span class="w-post-title">It has roots in a piece of classical Latin literature from</span>
								    		
								    	</a>
								    </div>
								    <div class="item">
								    	<a href="#">
								    		<img src="img/news-test-images/news-img5.jpg" width="300">
								    		<span class="w-post-title">Lorem Ipsum used since</span>
								    	</a>
								    </div>
								    <div class="item">
								    	<a href="#">
								    		<img src="img/news-test-images/news-img6.jpg" width="300">
								    		<span class="w-post-title">English versions from the 1914 translation</span>
								    	</a>
								    </div>
								    <div class="item">
								    	<a href="#">
								    		<img src="img/news-test-images/news-img7.jpg" width="300">
								    		<span class="w-post-title">The standard chunk of Lorem Ipsum used since</span>
								    	</a>
								    </div>
								</div>
							</div>
						</div>

						<div class="seperator"></div>

						<a href="#" class="widget-ad-box">
							<img src="img/adbox300x250.png" width="300" height="250">
						</a>

					</div>
				</div>
			</div>
		</section>

	</main>

	<!-- Register popup html source start -->
	<div class="m-modal-box" id="registerModal">
		<div class="m-modal-overlay"></div>
		<div class="m-modal-content small">
			<div class="m-modal-header">
				<h3 class="m-modal-title">Register</h3>
				<span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
			</div>
			
				<form action="registerprocess.php" method="get" data-parsley-validate="">
					<div class="frm-row">
						<input class="frm-input" type="text" name="firstname" placeholder="Name" data-parsley-required>
					</div>
					<div class="frm-row">
						<input class="frm-input" type="text" name="lastname" placeholder="Lastname" data-parsley-required>
					</div>
					<div class="frm-row">
						<input class="frm-input" type="email" name="email" placeholder="Email" data-parsley-required>
					</div>
					<div class="frm-row">
						<input class="frm-input" type="password" name="password" placeholder="Password" data-parsley-required>
					</div>
					<div class="frm-row">
						<input class="frm-input" type="password" name="confirmpassword" placeholder="Confirm Pasword">
					
					<div class="frm-row">
						<label class="frm-check-radio-label"><input type="checkbox" name="chek"> <span>I accept your <a href="#">register policy</a>.</span></label>
					</div>
					<div class="frm-row">
						<button class="frm-button material-button full" type="submit">Register</button>
					</div>
				</form>
				<div class="frm-row">
					<p class="txt-center">Do you already have an account? <a href="#" data-modal="loginModal">Login</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Register popup html source end ---->

	<!-- Login popup html source start -->
	<div class="m-modal-box" id="loginModal">
		<div class="m-modal-overlay"></div>
		<div class="m-modal-content small">
			<div class="m-modal-header">
				<h3 class="m-modal-title">Login</h3>
				<span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
			</div>
				<form action="checklogin.php" method="post">
					<div class="frm-row">
						<input class="frm-input" type="text" name="email" placeholder="Email">
					</div>
					<div class="frm-row">
						<input class="frm-input" type="text" name="password" placeholder="Password">
					</div>
					<div class="frm-row">
						<button class="frm-button material-button full" type="submit" name="submit">Login</button>
					</div>
				</form>
				<div class="frm-row">
					<p class="txt-center">Don't you have an account yet? <a href="#" data-modal="registerModal">Register</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Login popup html source end -->

	<!-- Newsletter popup html source start -->
	<div class="m-modal-box" id="newsletterModal">
		<div class="m-modal-overlay"></div>
		<div class="m-modal-content small">
			<div class="m-modal-header">
				<h3 class="m-modal-title">Newsletter</h3>
				<span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
			</div>
			<div class="m-modal-body">
				<p>Submit to our newsletter to receive exclusive stories delivered to you inbox!</p>
				<form>
					<div class="frm-row">
						<input class="frm-input" type="text" name="email" placeholder="Email address">
					</div>
					<div class="frm-row">
						<button class="frm-button material-button full" type="button">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Newsletter popup html source end -->

	<div class="overlay"></div>

	

	<!-- Tooltip plugin (zebra) js file -->
	<script src="plugins/zebra-tooltip/zebra_tooltips.min.js"></script>

	<!-- Owl Carousel plugin js file -->
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>

	<!-- Ideabox theme js file. you have to add all pages. -->
	<script src="js/main-script.js"></script>

	<script type="text/javascript">

		//Owl carousel initializing
		$('#postCarousel').owlCarousel({
		    loop:true,
		    dots:true,
		    nav:true,
		    navText: ['<span><i class="material-icons">&#xE314;</i></span>','<span><i class="material-icons">&#xE315;</i></span>'],
		    items:1,
		    margin:20
		})

		//widget carousel initialize
		$('#widgetCarousel').owlCarousel({
		    dots:true,
		    nav:false,
		    items:1
		})

	</script>

</body>


<!-- Mirrored from tevratgundogdu.com/works/ideabox-html-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:01:30 GMT -->
</html>