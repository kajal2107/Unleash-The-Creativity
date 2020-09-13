
<html>
<title></title>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unleash the Creativity</title>

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
    <style type="text/css">
        .mt-10{
            margin-top: 130px;
        }
    </style>
    
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
                                    <li><a href="#" data-modal="registerModal">Register</a></li>
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
    <section class="main-container mt-10">
        <section class="main-content">
            <section class="main-content-wrapper">
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
            </section>
        </select>
    </section>

                
                          </div>                            </body>
                            </html>