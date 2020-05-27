<?php
include('connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loket - Multi-purpopse E-commerce </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <link rel="icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color3.css" media="screen" id="color">
</head>
<body class="bg-light">

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="../assets/images/vagitable-loader.gif" alt="loader" class="img-fluid">
    </div>
</div>
<!-- loader end -->

<!--header start-->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-inverse">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-5 col-md-7 col-sm-6">
                    <div class="top-header-left">
                        <!-- <div class="shpping-order">
                            <h6>free shipping on order over $99 </h6>
                        </div> -->
                        <div class="app-link">
                            <!-- <h6>
                                Download aap
                            </h6> -->
                            <!-- <ul>
                                <li><a><i class="fa fa-apple" ></i></a></li>
                                <li><a><i class="fa fa-android" ></i></a></li>
                                <li><a><i class="fa fa-windows" ></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-5 col-sm-6">
                    <div class="top-header-right">
                        <div class="top-menu-block">
                            <ul>
                                <li><a href="#">gift cards</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">help & contact</a></li>
                                <li><a href="#">todays deal</a></li>
                                <li><a href="#">track order</a></li>
                                <li><a href="#">shipping </a></li>
                                <li><a href="#">easy returns</a></li>
                            </ul>
                        </div>
                        <div class="language-block">
                            <div class="language-dropdown">
                                <span  class="language-dropdown-click">
                                    english <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                                <ul class="language-dropdown-open">
                                    <li><a href="#">hindi</a></li>
                                    <li><a href="#">english</a></li>
                                    <li><a href="#">marathi</a></li>
                                    <li><a href="#">spanish</a></li>
                                </ul>
                            </div>
                            <div class="curroncy-dropdown">
                                <span class="curroncy-dropdown-click">
                                    usd<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                                <ul class="curroncy-dropdown-open">
                                    <li><a href="#"><i class="fa fa-inr"></i>inr</a></li>
                                    <li><a href="#"><i class="fa fa-usd"></i>usd</a></li>
                                    <li><a href="#"><i class="fa fa-eur"></i>eur</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-header1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu-block">
                        <div class="menu-left">
                            <div class="sm-nav-block">
                                <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                                <ul class="nav-slide">
                                    <li>
                                        <div class="nav-sm-back">
                                            back <i class="fa fa-angle-right pl-2"></i>
                                        </div>
                                    </li>
                                    <li> <a href="#">foodgrains</a></li>
                                    <li> <a href="#">bakery</a></li>
                                    <li> <a href="#">beverage</a></li>
                                    <li> <a href="#">snacks</a></li>
                                    <li> <a href="#">kitchen</a></li>
                                    <li> <a href="#">beauty</a></li>
                                    <li> <a href="#">FRESH FRUIT</a></li>
                                    <li> <a href="#">banana</a></li>
                                    <li> <a href="#">kiwi</a></li>
                                    <li> <a href="#">mangosteen</a></li>
                                    <li> <a href="#">grape</a></li>
                                    <li> <a href="#">zucchini</a></li>
                                    <li class="mor-slide-open">
                                        <ul>
                                            <li> <a>drangon fruits</a></li>
                                            <li> <a href="#">kiwi</a></li>
                                            <li>  <a href="#">mangosteen</a></li>
                                            <li><a href="#">grape</a></li>
                                            <li> <a href="#">zucchini</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="mor-slide-click">
                                            mor category
                                            <i class="fa fa-angle-down pro-down" ></i>
                                            <i class="fa fa-angle-up pro-up" ></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brand-logo">
                                <a href="#">
                                    <img src="../assets/images/logo.jpeg" class="img-fluid  " alt="logo-header">
                                </a>
                            </div>
                        </div>
                        <div class="menu-right">
                            <div class="toggle-block">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                        </li>
                                        <!--HOME-->
                                        <li>
                                            <a href="#">Home</a>
                                            <ul>
                                                <li><a target="_blank" href="index.html">layout 1</a></li>
                                                <li><a target="_blank" href="layout-2.html">layout 2</a></li>
                                                <li><a target="_blank" href="layout-3.html">layout 3</a></li>
                                                <li><a target="_blank" href="layout-4.html">layout 4</a></li>
                                                <li><a target="_blank" href="layout-5.html">layout 5</a></li>
                                                <li><a target="_blank" href="layout-6.html">layout 6</a></li>
                                            </ul>
                                        </li>
                                        <!--HOME-END-->

                                        <!--SHOP-->
                                        <!-- <li>
                                            <a href="#">shop</a>
                                            <ul>
                                                <li><a href="category-page(left-sidebar).html">left sidebar</a></li>
                                                <li><a href="category-page(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="category-page(sidebar-popup).html">sidebar popup</a></li>
                                                <li><a href="category-page(metro).html">metro <span class="new-tag">new</span></a></li>
                                                <li><a href="category-page(full-width).html">full width <span class="new-tag">new</span></a></li>
                                                <li><a href="category-page(infinite-scroll).html">infinite scroll</a></li>
                                                <li><a href=category-page(3-grid).html>3 grid</a></li>
                                                <li><a href="category-page(6-grid).html">6 grid</a></li>
                                                <li><a href="category-page(list-view).html">list view</a></li>
                                            </ul>
                                        </li> -->
                                        <!--SHOP-END-->
                                        <!--product-meu start-->
                                        <li class="mega" id="hover-cls"><a href="#">product
                                        </a>
                                            <ul class="mega-menu full-mega-menu ">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>sidebar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(left-sidebar).html">left sidebar</a></li>
                                                                            <li><a href="product-page(right-sidebar).html">right sidebar</a></li>
                                                                            <li><a href="product-page(no-sidebar).html">non sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>bonus layout</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(bundle).html">bundle</a></li>
                                                                            <li><a href="product-page(image-swatch).html">image swatch</a></li>
                                                                            <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>product layout <span class="new-tag">new</span></h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(4-image).html">4 image </a></li>
                                                                            <li><a href="product-page(sticky).html">sticky</a></li>
                                                                            <li><a href="product-page(accordian).html">accordian</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>thumbnail image</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(left-image).html">left image</a></li>
                                                                            <li><a href="product-page(right-image).html">right image</a></li>
                                                                            <li><a href="product-page(image-outside).html">image outside</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>3 column</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(3-col-left).html">thumbnail left</a></li>
                                                                            <li><a href="product-page(3-col-right).html">thumbnail right</a></li>
                                                                            <li><a href="product-page(3-column).html">thubnail bottom</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>product element</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="element-productbox.html">product box</a></li>
                                                                            <li><a href="element-product-slider.html">product slider</a></li>
                                                                            <li><a href="element-no_slider.html">no slider</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row menu-banner">
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="../assets/images/1_menu-banner1.jpg" alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="../assets/images/1_menu-banner2.jpg" alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--product-meu end-->

                                        <!--mega-meu start-->
                                        <!-- <li class="mega" >
                                            <a href="#">features</a>
                                            <ul class="mega-menu full-mega-menu ratio_landscape">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>portfolio</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="grid-2-col.html">portfolio grid 2</a></li>
                                                                            <li><a href="grid-3-col.html">portfolio grid 3</a></li>
                                                                            <li><a href="grid-4-col.html">portfolio grid 4</a></li>
                                                                            <li><a href="grid-6-col.html">portfolio grid 6</a></li>
                                                                            <li><a href="masonary-2-grid.html">mesonary grid 2</a></li>
                                                                            <li><a href="masonary-3-grid.html">mesonary grid 3</a></li>
                                                                            <li><a href="masonary-4-grid.html">mesonary grid 4</a></li>
                                                                            <li><a href="masonary-fullwidth.html">mesonary full width</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="layout-5.html">cart modal popup</a></li>
                                                                            <li><a href="layout-6.html">qty. counter </a></li>
                                                                            <li><a href="index.html">cart top</a></li>
                                                                            <li><a href="layout-2.html">cart bottom</a></li>
                                                                            <li><a href="layout-3.html">cart left</a></li>
                                                                            <li><a href="layout-4.html">cart right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>shortcodes</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="element-title.html">title</a></li>
                                                                            <li><a href="element-banner.html">collection banner</a></li>
                                                                            <li><a href="element-slider.html">home slider</a></li>
                                                                            <li><a href="element-category.html">category</a></li>
                                                                            <li><a href="element-service.html">service</a></li>
                                                                            <li><a href="element-image-ratio.html">image size ratio</a></li>
                                                                            <li><a href="element-tab.html">tab</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="email-order-success.html">order success</a></li>
                                                                            <li><a href="email-order-success-tow.html">order success 2</a></li>
                                                                            <li><a href="email-template.html">email template</a></li>
                                                                            <li><a href="email-template-tow.html">email template 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title menu-secon-title">
                                                                        <h5>Easy to use</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="button.html">element button</a></li>
                                                                            <li><a href="instagram.html">element instagram</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box product ">
                                                                <div class="mega-img">
                                                                    <img src="../assets/images/mega-banner-2.jpg" alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!--mega-meu end-->

                                        <!--pages-meu start-->
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li>
                                                    <a href="#">account</a>
                                                    <ul>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="forget-pwd.html">forget password</a></li>
                                                        <li><a href="profile.html">profile </a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-page.html">about us</a></li>
                                                <li><a href="search.html">search</a></li>
                                                <li><a href="typography.html">typography </a></li>
                                                <li><a href="review.html">review </a></li>
                                                <li><a href="order-success.html">order success</a></li>
                                                <li><a href="order-history.html">order history</a></li>
                                                <li>
                                                    <a href="#">compare</a>
                                                    <ul>
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="compare-2.html">compare-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="collection.html">collection</a></li>
                                                <li><a href="look-book.html">lookbook</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="coming-soon.html">coming soon </a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <!--product-end end-->

                                        <!--blog-meu start-->
                                        <!-- <li>
                                            <a href="#">blog</a>
                                            <ul>
                                                <li><a href="blog(left-sidebar).html">left sidebar</a></li>
                                                <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li> -->
                                        <!--blog-meu end-->
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="mobile-user onhover-dropdown" onclick="openAccount()"><a href="#"><i class="icon-user"></i></a>
                                        </li>
                                        <li class="mobile-wishlist" onclick="openWishlist()">
                                            <a href="#">
                                                <i class="icon-heart"></i>
                                                <div class="cart-item"><div>0 item<span>wishlist</span></div></div></a></li>
                                        <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                                            <div class ="search-overlay">
                                                <div>
                                                    <span class="close-mobile-search">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product"></div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></li>
                                        <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i class="icon-settings"></i></a>
                                        </li>
                                    </ul>
                                    <?php
                                    $sql_2 = "SELECT COUNT(item_name) as total_items FROM items;";
                                    $result_2 = $conn->query($sql_2);
                                    if($result_2->num_rows>0){
                                        while($row=$result_2->fetch_assoc()){
                                            $total_items = $row['total_items'];
                                        }
                                    }
                                    ?>
                                    <div class="cart-block mobile-cart cart-hover-div" onclick="openCart()">
                                        <a href="#"><span class="cart-product" style="color:black"><?php echo $total_items?></span><i class="icon-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category-header category-header-6">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="navbar-menu">
                        <div class="category-left">
                            <div class=" nav-block">
                                <div class="nav-left">
                                    <nav class="navbar" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                                        <button class="navbar-toggler" type="button">
                                            <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                        </button>
                                        <h5 class="mb-0 ml-3 text-white title-font">Shop by category</h5>
                                    </nav>
                                    <div class="collapse show nav-desk" id="navbarToggleExternalContent">
                                        <ul class="nav-cat title-font mt-0">
                                        <?php
                                        $sql2 = "SELECT * FROM category;";
                                        $result2 = $conn->query($sql2);
                                        if($result2->num_rows>0){
                                            while($row=$result2->fetch_assoc()){
                                                $category_name = $row['category_name'];
                                                $category_icon = $row['category_icon'];
                                                echo'<li> <img src="'.$category_icon.'" alt="category-product"> <a href="#">'.$category_name.'</a></li>';
                                            }
                                        }
                                        ?>
                                                <ul class="mor-slide-open">
                                                    <li> <img src="../assets/images/layout-1/nav-img/08.png" alt="category-product"> <a>drangon fruits</a></li>
                                                    <li><img src="../assets/images/layout-1/nav-img/09.png" alt="category-product"> <a href="#">kiwi</a></li>
                                                    <li> <img src="../assets/images/layout-1/nav-img/10.png" alt="category-product"> <a href="#">mangosteen</a></li>
                                                    <li> <img src="../assets/images/layout-1/nav-img/11.png" alt="category-product"> <a href="#">grape</a></li>
                                                    <li> <img src="../assets/images/layout-1/nav-img/12.png" alt="category-product"> <a href="#">zucchini</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mor-slide-click">mor category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="input-block">
                                <div class="input-box">
                                    <form class="big-deal-form">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="search"><i class="fa fa-search"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search a Product" >
                                            <div class="input-group-prepend">
                                                <select>
                                                    <option>All Category</option>
                                                    <?php
                                                    $sql_1 = "SELECT * FROM category;";
                                                    $result_1 = $conn->query($sql_1);
                                                    if($result_1->num_rows>0){
                                                        while($row=$result_1->fetch_assoc()){
                                                            $category_name = $row['category_name'];
                                                            echo '<option>'.$category_name.'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="category-right">
                            <div class="contact-block">
                                <div>
                                    <i class="fa fa-volume-control-phone"></i>
                                    <span>call us<span>123-456-76890</span></span>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div  class="gift-block" data-toggle="dropdown" >
                                    <div class="grif-icon">
                                        <i class="icon-gift"></i>
                                    </div>
                                    <div class="gift-offer">
                                        <p>gift box</p>
                                        <span>Festivel Offer</span>
                                    </div>
                                </div>
                                <div class="dropdown-menu gift-dropdown">
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/1.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Billion Days</h5>
                                            <p><img src="../assets/images/icon/currency.png" class="cash" alt="gift"> Flat Rs. 270 Rewards</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/2.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Fashion Discount</h5>
                                            <p><img src="../assets/images/icon/fire.png"  class="fire" alt="gift">Extra 10% off (upto Rs. 10,000*) </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/3.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">75% off Store</h5>
                                            <p>No coupon code is required.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/6.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Upto 50% off</h5>
                                            <p>Buy popular phones under Rs.20.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div  class="mr-3">
                                            <img src="../assets/images/icon/5.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Beauty store</h5>
                                            <p><img src="../assets/images/icon/currency.png" class="cash" alt="gift"> Flat Rs. 270 Rewards</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header end-->


<!--slider start-->
<section class="theme-slider section-pt-space">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-8 col-lg-9 offset-xl-2 px-abjust">
                <div class="slide-1 no-arrow ">
                    <div class="slide-1 no-arrow ">
                    <?php
                    $sql_3 = "SELECT * FROM offers;";
                    $result_3 = $conn->query($sql_3);
                    if($result_3->num_rows>0){
                        while($row=$result_3->fetch_assoc()){
                            $offer_name = $row['offer_name'];
                            $offer_code = $row['offer_code'];
                            $image = $row['image'];
                            echo'<div>
                            <div class="slider-banner slide-banner-5 ">
                                <div class="slider-img">
                                    <img src="'.$image.'" class="bg-img  " alt="slider" >
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        
                                        <h3>'.$offer_name.'</h3>
                                        <h1 style="color:white">'.$offer_code.' </h1>
                                        <a class="btn btn-rounded">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                    }
                    ?>  
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-3 pl-0 offer-banner">
                <div class="offer-banner-img">
                    <img src="../assets/images/layout-6/collection-banner/4.jpg" alt="offer-banner" class="img-fluid  ">
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider end-->

<!--collection banner start-->
<section class="collection-banner section-pt-space">
    <div class="custom-container">
        <div class="row collection collection-layout1">
            <div class="col-md-4 offset-xl-2 p-r-md-0">
                <div class="collection-banner-main p-left">
                    <div class="collection-img">
                        <img src="../assets/images/collection/BigDeal_images/547-275/electronics_1.jpg" class="img-fluid bg-img  " alt="banner">
                    </div>
                    <div class="collection-banner-contain">
                        <div>
                            <h3>fresh</h3>
                            <h4>orange juice</h4>
                            <div class="shop">
                                <a>
                                    shop now
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-4">
                <div class="collection-banner-main p-left">
                    <div class="collection-img">
                        <img src="../assets/images/collection/BigDeal_images/547-275/g2.jpg" class="img-fluid bg-img  " alt="banner">
                    </div>
                    <div class="collection-banner-contain">
                        <div>
                            <h3>fresh</h3>
                            <h4>pineapple</h4>
                            <div class="shop">
                                <a>
                                    shop now
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2  pl-md-0">
                <div class="collection-banner-main p-top banner-6">
                    <div class="collection-img">
                        <img src="../assets/images/layout-6/collection-banner/3.jpg" class="img-fluid bg-img  " alt="banner">
                    </div>
                    <div class="collection-banner-contain">
                        <div>
                            <h6>10% off</h6>
                            <h4>fresh juice</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--collection banner end-->



<!--rounded category start-->
<section class="rounded-category vagitable-category  section-mt-space">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="slide-6 no-arrow ">
                <?php 
                $sql3 = "SELECT * FROM sub_category;";
                $result3 = $conn->query($sql3);
                if($result3->num_rows>0){
                    while($row=$result3->fetch_assoc()){
                        $sub_category_name = $row['sub_category_name'];
                        $sub_category_icon = $row['sub_category_icon'];
                        echo'<div>
                        <div class="category-contain">
                            <a href="#">
                                <div class="img-wrapper">
                                    <img src="'.$sub_category_icon.'" alt="category-img" class="img-fluid">
                                </div>
                                <div>
                                    <div class="btn-rounded">
                                       '.$sub_category_name.'
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>';
                    }
                }
            ?> 
                </div>
            </div>
        </div>
    </div>
</section>
<!--rounded category end-->


<!--services start-->
<section class="services services-inverse">
    <div class="container">
        <div class="row service-block">
            <div class="col-lg-3 col-md-6  col-sm-12">
                <div class="media">
                    <svg height="679pt" viewBox="0 -117 679.99892 679" width="679pt" xmlns="http://www.w3.org/2000/svg"><path d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0"/></svg>
                    <div class="media-body">
                        <h5>free shipping</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-12">
                <div class="media">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 417.12 417.12" style="enable-background:new 0 0 417.12 417.12;" xml:space="preserve">
<g>
	<g>
		<path d="M409.12,200.741c-4.418,0-8,3.582-8,8c-0.06,106.525-86.464,192.831-192.988,192.772
			C101.607,401.453,15.3,315.049,15.36,208.524C15.42,102,101.824,15.693,208.348,15.753c51.36,0.029,100.587,20.54,136.772,56.988
			l-17.84-0.72c-4.418,0-8,3.582-8,8s3.582,8,8,8l36.72,1.52c1.013,0.003,2.018-0.188,2.96-0.56l0.88-0.56
			c1.381-0.859,2.534-2.039,3.36-3.44c0.034-0.426,0.034-0.854,0-1.28c0.183-0.492,0.317-1.001,0.4-1.52l3.2-36.72
			c0.376-4.418-2.902-8.304-7.32-8.68s-8.304,2.902-8.68,7.32l-1.6,18.16c-80.799-82.092-212.848-83.14-294.939-2.341
			s-83.14,212.848-2.341,294.939s212.848,83.14,294.939,2.341c39.786-39.159,62.212-92.635,62.261-148.459
			C417.12,204.323,413.538,200.741,409.12,200.741z"/>
	</g>
</g>
                        <g>
	<g>
		<path d="M200.4,256.341c-3.716-2.516-8.162-3.726-12.64-3.44h-56c1.564-2.442,3.302-4.768,5.2-6.96
			c6.727-7.402,14.088-14.201,22-20.32c10.667-8.747,18.293-15.147,22.88-19.2c5.252-4.976,9.752-10.689,13.36-16.96
			c4.377-7.234,6.649-15.545,6.56-24c-0.009-11.177-4.27-21.931-11.92-30.08c-3.725-3.941-8.181-7.12-13.12-9.36
			c-8.709-3.645-18.08-5.443-27.52-5.28c-8.048-0.163-16.055,1.194-23.6,4c-6.2,2.328-11.862,5.894-16.64,10.48
			c-4.219,4.117-7.565,9.042-9.84,14.48c-2.098,4.853-3.213,10.074-3.28,15.36c-0.192,3.547,1.081,7.018,3.52,9.6
			c2.345,2.352,5.56,3.626,8.88,3.52c3.499,0.231,6.903-1.19,9.2-3.84c2.503-3.303,4.424-7.01,5.68-10.96
			c0.939-3.008,2.144-5.926,3.6-8.72c4.562-7.738,12.94-12.416,21.92-12.24c4.114,0.077,8.149,1.147,11.76,3.12
			c3.625,1.82,6.693,4.583,8.88,8c2.194,3.673,3.329,7.882,3.28,12.16c-0.067,4.437-1.105,8.806-3.04,12.8
			c-2.129,4.829-5.019,9.286-8.56,13.2c-4.419,4.617-9.298,8.772-14.56,12.4c-5.616,4.247-10.96,8.843-16,13.76
			c-7.787,7.04-16.453,15.467-26,25.28c-2.638,2.966-4.773,6.344-6.32,10c-1.632,3.159-2.612,6.614-2.88,10.16
			c-0.018,3.939,1.605,7.707,4.48,10.4c3.393,3.096,7.896,4.684,12.48,4.4h78.4c3.842,0.312,7.641-0.993,10.48-3.6
			c2.291-2.379,3.53-5.579,3.44-8.88C204.691,262.051,203.173,258.598,200.4,256.341z"/>
	</g>
</g>
                        <g>
	<g>
		<path d="M333.76,222.901c-4.254-1.637-8.809-2.346-13.36-2.08h-4.56v-82.48c0-12.373-5.333-18.56-16-18.56
			c-3.185-0.052-6.261,1.155-8.56,3.36c-3.331,3.343-6.382,6.956-9.12,10.8l-56.48,75.6l-3.92,5.2c-1.067,1.44-2.107,2.907-3.12,4.4
			c-0.916,1.374-1.668,2.851-2.24,4.4c-0.475,1.308-0.718,2.689-0.72,4.08c-0.237,4.699,1.607,9.263,5.04,12.48
			c4.323,3.358,9.742,4.984,15.2,4.56h53.52v20.08c-0.273,4.252,1.006,8.459,3.6,11.84c5.276,5.346,13.887,5.403,19.233,0.127
			c0.043-0.042,0.085-0.084,0.127-0.127c2.587-3.384,3.866-7.589,3.6-11.84v-20h6.48c4.242,0.298,8.476-0.677,12.16-2.8
			c2.877-2.141,4.425-5.63,4.08-9.2C339.301,228.744,337.319,224.811,333.76,222.901z M289.36,220.581h-45.84l45.84-61.92V220.581z"
        />
	</g>
</g>
</svg>
                    <div class="media-body">
                        <h5>24X7 SERVICE</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-12 ">
                <div class="media">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 295.82 295.82" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 295.82 295.82">
                        <g>
                            <g>
                                <path d="m269.719,43.503h-243.617c-13.921,0-26.102,12.181-26.102,26.102v156.611c0,13.921 12.181,26.102 26.102,26.102h243.617c13.921,0 26.102-12.181 26.102-26.102v-156.611c-0.001-13.921-12.182-26.102-26.102-26.102zm-243.617,17.401h243.617c5.22,0 8.701,3.48 8.701,8.701v13.921h-261.019v-13.921c-1.06581e-14-5.22 3.481-8.701 8.701-8.701zm252.317,40.023v13.921h-261.018v-13.921h261.018zm-8.7,133.989h-243.617c-5.22,0-8.701-3.48-8.701-8.701v-93.966h261.018v93.966c0,5.221-3.48,8.701-8.7,8.701z"/>
                                <path d="m45.243,172.272h45.243c5.22,0 8.701-3.48 8.701-8.701 0-5.22-3.48-8.701-8.701-8.701h-45.243c-5.22,0-8.701,3.48-8.701,8.701 0.001,5.221 3.481,8.701 8.701,8.701z"/>
                                <path d="m151.391,191.413h-106.148c-5.22,0-8.701,3.48-8.701,8.701s3.48,8.701 8.701,8.701h106.147c3.48,0 8.701-3.48 8.701-8.701s-3.48-8.701-8.7-8.701z"/>
                            </g>
                        </g>
                    </svg>
                    <div class="media-body">
                        <h5>EASY RETURN</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-12 ">
                <div class="media">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 448 448" style="enable-background:new 0 0 448 448;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M384,172.4C384,83.6,312.4,12,224,12S64,83.6,64,172c0,0,0,0,0,0.4C28.4,174.4,0,204,0,240v8c0,37.6,30.4,68,68,68h3.6
				l28.4,45.2c20,32,54,50.8,91.6,50.8h5.6c3.6,13.6,16,24,30.8,24c17.6,0,32-14.4,32-32c0-17.6-14.4-32-32-32
				c-14.8,0-27.2,10.4-30.8,24h-5.6c-32,0-61.2-16.4-78-43.6L90.4,316H96c8.8,0,16-7.2,16-16V188c0-8.8-7.2-16-16-16H80
				c0-79.6,64.4-144,144-144s144,64.4,144,144h-16c-8.8,0-16,7.2-16,16v112c0,8.8,7.2,16,16,16h28c37.6,0,68-30.4,68-68v-8
				C448,204,419.6,174.4,384,172.4z M228,388c8.8,0,16,7.2,16,16s-7.2,16-16,16s-16-7.2-16-16S219.2,388,228,388z M96,188v112H68
				c-28.8,0-52-23.2-52-52v-8c0-28.8,23.2-52,52-52H96z M432,248c0,28.8-23.2,52-52,52h-28V188h28c28.8,0,52,23.2,52,52V248z"/>
            <path d="M290.4,72.4c-0.8-0.4-2-1.2-3.2-2c-1.2-0.8-2.4-1.6-3.2-2c-3.6-2.4-8.8-1.2-10.8,2.8S272,79.6,276,82
				c0.8,0.4,2,1.2,3.2,2s2.4,1.6,3.6,2c1.2,0.8,2.8,1.2,4,1.2c2.8,0,5.2-1.2,6.8-4C295.6,79.6,294.4,74.8,290.4,72.4z"/>
            <path d="M224,52c-34,0-66,14.8-88,40.4c-2.8,3.2-2.4,8.4,0.8,11.2c1.6,1.2,3.2,2,5.2,2c2.4,0,4.4-0.8,6-2.8
				c19.2-22,46.8-34.8,76-34.8c7.2,0,14.4,0.8,21.6,2.4c4.4,0.8,8.4-2,9.6-6s-2-8.4-6-9.6C240.8,52.8,232.4,52,224,52z"/>
		</g>
	</g>
</g>
</svg>
                    <div class="media-body">
                        <h5>ONLINE PAYMENT</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--services end-->

<!--payment offer start -->
<section class="section-pt-space">
    <div class="custom-container">
        <div class="row">
            <div class="col-12 pr-0">
                <div class="slide-5 no-arrow">
                   <div>
                       <div class="paymant-offer-mian">
                           <div>
                               <img src="../assets/images/layout-6/payment-offer/1.png" alt="paymet-offer" class="img-fluid">
                               <h2>$202</h2>
                               <h3>OUR FEATURED OFFERS</h3>
                               <h4>shop for <span>$50 +</span></h4>
                               <div class="payment-cod">code <span> &nbsp; : &nbsp; citioct</span></div>
                           </div>
                       </div>
                   </div>
                    <div>
                        <div class="paymant-offer-mian">
                            <div>
                                <img src="../assets/images/layout-6/payment-offer/2.png" alt="paymet-offer" class="img-fluid">
                                <h2>$202</h2>
                                <h3>OUR FEATURED OFFERS</h3>
                                <h4>shop for <span>$50 +</span></h4>
                                <div class="payment-cod">code <span> &nbsp; : &nbsp; citioct</span></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="paymant-offer-mian">
                            <div>
                                <img src="../assets/images/layout-6/payment-offer/1.png" alt="paymet-offer" class="img-fluid">
                                <h2>$202</h2>
                                <h3>OUR FEATURED OFFERS</h3>
                                <h4>shop for <span>$50 +</span></h4>
                                <div class="payment-cod">code <span> &nbsp; : &nbsp; citioct</span></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="paymant-offer-mian">
                            <div>
                                <img src="../assets/images/layout-6/payment-offer/2.png" alt="paymet-offer" class="img-fluid">
                                <h2>$202</h2>
                                <h3>OUR FEATURED OFFERS</h3>
                                <h4>shop for <span>$50 +</span></h4>
                                <div class="payment-cod">code <span> &nbsp; : &nbsp; citioct</span></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="paymant-offer-mian">
                            <div>
                                <img src="../assets/images/layout-6/payment-offer/1.png" alt="paymet-offer" class="img-fluid">
                                <h2>$202</h2>
                                <h3>OUR FEATURED OFFERS</h3>
                                <h4>shop for <span>$50 +</span></h4>
                                <div class="payment-cod">code <span> &nbsp; : &nbsp; citioct</span></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="paymant-offer-mian">
                            <div>
                                <img src="../assets/images/layout-6/payment-offer/2.png" alt="paymet-offer" class="img-fluid">
                                <h2>$202</h2>
                                <h3>OUR FEATURED OFFERS</h3>
                                <h4>shop for <span>$50 +</span></h4>
                                <div class="payment-cod">code <span> &nbsp; : &nbsp; citioct</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--payment offer end-->

<!--title start-->
<div class="title4 section-my-space">
    <h4>trending <span>product</span></h4>
</div>
<!--title end-->

<!--product box start -->
<section class=" ratio_asos product  section-big-pb-space">
    <div class="custom-container  addtocart_count ">
        <div class="row">
            <div class="col pr-0">
                <div class="product-slide-6 no-arrow">
                <?php
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $product_name = $row['product_name'];
                        $initial_cost = $row['initial_cost'];
                        $final_cost = $row['final_cost'];
                        $product_image = $row['product_image'];
                        $discount = ($initial_cost - $final_cost)/($initial_cost) * 100;  
                        echo'<div>
                        <div class="product-box ">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="'.$product_image.'" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="on-sale4">
                                    on sale
                                </div>
                                <div class="new-label1">'.round($discount,0).'%</div>
                            </div>
                            <div class="product-detail detail-center1">
                                <ul class="rating-star">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <a href = "details_1.php"><h6>'.$product_name.'</h6></a>
                                <span class="detail-price">'.$initial_cost.'<span>'.$final_cost.' &emsp; &emsp; &emsp;<a href="javascript:void(0)" title="Add to Wishlist" style="color:blue">
                                <i class="ti-heart" aria-hidden="true"  ></i>
                            </a></span></span>
                            </div>
                            <div class="addtocart_btn">
                                <button class="add-button add_cart" onclick = "window.location.href= cart.php" title="Add to cart">
                                    add to cart
                                </button>
                            </div>
                        </div>
                    </div>';
                    }
                }
                ?>
                    
                  
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="product-detail detail-center1">
                                <ul class="rating-star">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h6>Vaccinium cyanococcus .</h6>
                                <span class="detail-price">$56.21<span>$24.00</span></span>
                            </div>
                            <div class="addtocart_btn">
                                <button class="add-button add_cart" title="Add to cart">
                                    add to cart
                                </button>
                                <div class="qty-box cart_qty">
                                    <div class="input-group">
                                        <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                        <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                                <div class="new-label1">50%</div>
                                <div class="on-sale4">
                                    on sale
                                </div>
                                <div class="new-label1">50%</div>
                            </div>
                            <div class="product-detail detail-center1">
                                <ul class="rating-star">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h6>Vaccinium cyanococcus .</h6>
                                <span class="detail-price">$56.21<span>$24.00</span></span>
                            </div>
                            <div class="addtocart_btn">
                                <button class="add-button add_cart" title="Add to cart">
                                    add to cart
                                </button>
                                <div class="qty-box cart_qty">
                                    <div class="input-group">
                                        <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                        <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--product box end-->


<!-- masonary-banner start -->
<!-- <section class="masonory-banner o-hidden">
    <div class="container-fluid">
        <div class="row masonary-banner-block1 gutter-15">
            <div class="col-xl-6 col-lg-12 ">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row masonary-banner-block">
                            <div class="col-md-12">
                                <div class="masonary-banner-main">
                                    <div class="masonory-banner-img">
                                        <img src="../assets/images/layout-6/masonory-banner/1.jpg" class="img-fluid bg-img" alt="masonory-banner">
                                    </div>
                                    <div class="masonary-banner-contant p-center">
                                        <h5>union bed</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="masonary-banner-main">
                                    <div class="masonory-banner-img">
                                        <img src="../assets/images/layout-6/masonory-banner/2.jpg" class="img-fluid bg-img" alt="masonory-banner">
                                    </div>
                                    <div class="masonary-banner-contant p-center">
                                        <h5>strawberry</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pl-3">
                        <div class="masonary-banner-main">
                            <div class="masonory-banner-img masonory-img1">
                                <img src="../assets/images/layout-6/masonory-banner/3.jpg" class="img-fluid bg-img" alt="masonory-banner">
                            </div>
                            <div class="masonary-banner-contant p-center">
                                <div >
                                    <h5>chili</h5>
                                    <a class="btn-rounded">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 ">
                <div class="row masonary-banner-block masonary-inner1">
                    <div class="col-md-12">
                        <div class="row masonary-banner-block2">
                            <div class="col-sm-6 pr-0">
                                <div class="masonary-banner-main">
                                    <div class="masonory-banner-img">
                                        <img src="../assets/images/layout-6/masonory-banner/4.jpg" class="img-fluid bg-img" alt="masonory-banner">
                                    </div>
                                    <div class="masonary-banner-contant p-center">
                                        <h5>tomato</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="masonary-banner-main">
                                    <div class="masonory-banner-img">
                                        <img src="../assets/images/layout-6/masonory-banner/5.jpg" class="img-fluid bg-img" alt="masonory-banner">
                                    </div>
                                    <div class="masonary-banner-contant p-center">
                                        <h5>lemon</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 pr-0">
                        <div class="masonary-banner-main">
                            <div class="masonory-banner-img">
                                <img src="../assets/images/layout-6/masonory-banner/6.jpg" alt="masonary-banner" class="img-fluid bg-img">
                            </div>
                            <div class="masonary-banner-contant p-right">
                                <div class="masonary-banner-subcontant">
                                    <div>
                                        <h2>organic</h2>
                                        <h5>fruits</h5>
                                        <a class="btn-rounded">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- masonory-banner end -->

<!--tab product-->
<section class="section-pt-space " >
    <div class="tab-product-main">
        <div class="tab-prodcut-contain">
            <ul class="tabs tab-title">
                <li class="current"><a href="tab-1">elcetronics</a></li>
                <li class=""><a href="tab-2">fashion</a></li>
                <li class=""><a href="tab-3">footware</a></li>
                <li class=""><a href="tab-4">sports</a></li>
                <li class=""><a href="tab-5">toys</a></li>
                <li class=""><a href="tab-6">books</a></li>
            </ul>
        </div>
    </div>
</section>
<!--tab product-->

<!-- product tab  -->
<section class="section-py-space ratio_square ">
    <div class="custom-container addtocart_count">
        <div class="row">
            <div class="col pr-0">
                <div class="theme-tab product no-arrow mb--5">
                    <div class="tab-content-cls ">
                        <div id="tab-1" class="tab-content active default product">
                            <div class="product-slide-6 no-arrow">
                            <?php
                            $sql1 = "SELECT * FROM products;";
                            $result1 = $conn->query($sql1);
                            if($result1->num_rows>0){
                                while($row=$result1->fetch_assoc()){
                                    $product_name = $row['product_name'];
                                    $initial_cost = $row['initial_cost'];
                                    $final_cost = $row['final_cost'];
                                    $product_image = $row['product_image'];
                                    $discount = ($initial_cost - $final_cost)/($initial_cost) * 100;  
                                    echo' <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="'.$product_image.'" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                               
                                            </div>
                                            <div class="new-label1">'.round($discount).'%</div>
                                            

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <a href = "details_1.php?id='.$product_name.'"><h6>'.$product_name.'</h6></a>
                                            <span class="detail-price">Rs '.$final_cost.'<span>Rs '.$initial_cost.'
                                            </span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button" title="Buy Now" style = "background-color:#ffaa1d">
                                                Buy Now
                                            </button>
                                        </div>
                                        <div class="">
                                        <button class="add-button"><a class="addtocart_btn" href="cart_1.php?id='.$product_name.'" style="color:white">Add to Cart</a>
                                        </button>
                                        </div>
                                    </div>
                                </div>';
                                }
                            }
                            ?>
                                
                                
                        </div>
                    </div>
                        <div id="tab-2" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="../assets/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="../assets/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->


<!-- Parallax banner -->
<section class="section-big-pt-space">
    <div class="full-banner parallax text-left p-left">
        <img src="../assets/images/layout-6/parallax-banner/parelex.jpg" alt="" class="bg-img ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>2019</h2>
                        <h3>food market</h3>
                        <h4>special offer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallax banner end -->

<!--title start-->
    <div class="title4 section-my-space mt-0">
        <!-- <h4>letest <span>blog</span></h4> -->
    </div>
<!--title end-->

<!--blog start-->
<!-- <section class="blog section-big-mb-space mb--5 ">
    <div class="custom-container">
        <div class="row">
            <div class="col pr-0">
                <div class="blog-slide-4 no-arrow">
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="../assets/images/layout-6/blog/1.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="../assets/images/layout-6/blog/2.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="../assets/images/layout-6/blog/3.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="../assets/images/layout-6/blog/4.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="../assets/images/layout-6/blog/2.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--blog end-->


<!--contact banner start-->
<section class="contact-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact-banner-contain">
                    <div class="contact-banner-img"><img src="../assets/images/layout-1/call-img.png" class="img-fluid" alt="call-banner"></div>
                    <div><h3>if you have any question please call us</h3></div>
                    <div><h2>123-456-7890</h2></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact banner end-->


<!--footer start-->
<footer class="footer-2">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="footer-main-contian">
                    <div class="row ">
                        <div class="col-lg-4 col-md-12 ">
                            <div class="footer-left">
                                <div class="footer-logo">
                                    <img src="../assets/images/logo.jpeg" class="img-fluid  " alt="logo">
                                </div>
                                <div class="footer-detail">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                                    <ul class="paymant-bottom">
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/1.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/2.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/3.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/4.png" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="../assets/images/layout-1/pay/5.png" class="img-fluid" alt="pay"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 ">
                            <div class="footer-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="subscribe-section">
                                            <div class="row">
                                                <div class="col-md-5 ">
                                                    <div class="subscribe-block">
                                                        <div class="subscrib-contant ">
                                                            <h4>subscribe to newsletter</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 ">
                                                    <div class="subscribe-block">
                                                        <div class="subscrib-contant">
                                                            <div class="input-group" >
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" ><i class="fa fa-envelope-o" ></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="your email" >
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text telly" ><i class="fa fa-telegram" ></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class=account-right>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="footer-box">
                                                        <div class="footer-title">
                                                            <h5>my account</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <ul>
                                                                <li><a href="#">about us</a></li>
                                                                <li><a href="#">contact us</a></li>
                                                                <li><a href="#">terms & conditions</a></li>
                                                                <li><a href="#">returns & exchanges</a></li>
                                                                <li><a href="#">shipping & delivery</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="footer-box">
                                                        <div class="footer-title">
                                                            <h5>quick link</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <ul>
                                                                <li><a href="#">store location</a></li>
                                                                <li><a href="#"> my account</a></li>
                                                                <li><a href="#"> orders tracking</a></li>
                                                                <li><a href="#"> size guide</a></li>
                                                                <li><a href="#">FAQ </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="footer-box footer-contact-box">
                                                        <div class="footer-title">
                                                            <h5>contact us</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <ul class="contact-list">
                                                                <li><i class="fa fa-map-marker"></i><span>big deal store demo store <br> <span> india-3654123</span></span></li>
                                                                <li><i class="fa fa-phone"></i><span>call us: 123-456-7898</span></li>
                                                                <li><i class="fa fa-envelope-o"></i><span>email us: support@bigdeal.com</span></li>
                                                                <li><i class="fa fa-fax"></i><span>fax 123456</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-link-block  bg-transparent">
        <div class="container">
            <div class="row">
                <div class="app-link-bloc-contain app-link-bloc-contain-1">
                    <div class="app-item-group">
                        <div class="app-item">
                            <img src="../assets/images/layout-1/app/1.png" class="img-fluid" alt="app-banner">
                        </div>
                        <div class="app-item">
                            <img src="../assets/images/layout-1/app/2.png" class="img-fluid" alt="app-banner">
                        </div>
                    </div>
                    <div class="app-item-group ">
                        <div class="sosiyal-block" >
                            <h6>follow us</h6>
                            <ul class="sosiyal">
                                <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" ></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" ></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" ></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sub-footer-contain">
                        <p><span>2018 - 19 </span>copy right by themeforest powered by pixel strap</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->


<!-- tap to top -->
<div class="tap-top bg-white">
    <div>
        <img src="../assets/images/icon/tap-top.png" class="img-fluid" alt="tap top"/>
    </div>
</div>
<!-- tap to top End -->

<!-- Add to cart bar -->
<div id="cart_side" class=" add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-6/product/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-6/product/5.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="../assets/images/layout-6/product/1.jpg"></a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4><span>1 x $ 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="cart.html" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="#" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->

<!--Newsletter modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="news-latter">
                    <div class="modal-bg">
                        <div class="offer-content vagi-offer-contant">
                            <div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h2>newsletter</h2>
                                <p>Subscribe to our website mailling list <br> and get a Offer, Just for you!</p>
                                <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                    <div class="form-group mx-sm-3">
                                        <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                        <button type="submit" class="btn btn-theme btn-normal btn-sm " id="mc-submit">subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Newsletter Modal popup end-->

<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="../assets/images/layout-6/product/a6.jpg" alt="quick" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>Pear - Green/Naspatit</h2>
                            <h3>$32.96</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href="#" class="btn btn-normal">view detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->

<!-- My account bar start-->
<div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" id="review" placeholder="Enter your password" required="">
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-rounded btn-block ">Login</a>
            </div>
            <div>
                <h5 class="forget-class"><a href="forget-pwd.html" class="d-block">forget password?</a></h5>
                <h6 class="forget-class"><a href="register.html" class="d-block">new to store? Signup now</a></h6>
            </div>
        </form>
    </div>
</div>
<!-- Add to account bar end-->

<!-- Add to wishlist bar -->
<div id="wishlist_side" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my wishlist</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeWishlist()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="../assets/images/layout-1/media-banner/3.jpg"></a>
                        <div class="media-body">
                            <a href="#"><h4>item name</h4></a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4><span>$ 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="wishlist.html" class="btn btn-normal btn-block  view-cart">view wislist</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to wishlist bar end-->

<!-- add to  setting bar  start-->
<div id="mySetting" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my setting</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeSetting()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="setting-block">
            <div >
                <h5>language</h5>
                <ul>
                    <li><a href="#">english</a></li>
                    <li><a href="#">french</a></li>
                </ul>
                <h5>currency</h5>
                <ul>
                    <li><a href="#">uro</a></li>
                    <li><a href="#">rupees</a></li>
                    <li><a href="#">pound</a></li>
                    <li><a href="#">doller</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Add to setting bar end-->

 <!-- notification product -->
  <div class="product-notification" id="dismiss">
    <span  onclick="dismiss();" class="close" aria-hidden="true">×</span>
    <div class="media">
      <img class="mr-2" src="../assets/images/layout-6/product/5.jpg" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Latest trending</h5>
        Cras sit amet nibh libero, in gravida nulla.
      </div>
    </div>
  </div>
  <!-- notification product -->


<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- popper js-->
<script src="../assets/js/popper.min.js" ></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap-notify.min.js"></script>

<!-- Timer js-->
<script src="../assets/js/menu.js"></script>

<!-- slick js-->
<script src="../assets/js/slick.js"></script>

<!-- Theme js-->
<script src="../assets/js/modal.js"></script>
<script src="../assets/js/slider-animat-one.js"></script>
<script src="../assets/js/script.js"></script>
</body>
</html>
