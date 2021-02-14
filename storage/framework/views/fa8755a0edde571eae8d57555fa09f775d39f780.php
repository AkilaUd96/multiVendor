<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/icons/favicon.png')); ?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/animate/animate.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/css-hamburgers/hamburgers.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/animsition/css/animsition.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/select2/select2.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/daterangepicker/daterangepicker.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/slick/slick.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/MagnificPopup/magnific-popup.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <!--===============================================================================================-->
    <style>
        @import  url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', serif;
            background: #eee
        }

        .content {
            width: 420px;
            margin-top: 100px
        }

        .ratings {
            background-color: #fff;
            padding: 54px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0px 10px 10px #E0E0E0
        }

        .product-rating {
            font-size: 50px
        }

        .stars i {
            font-size: 16px;
            color: #FFE601;
        }

        .stars i:hover{
            font-size: 16px;
            color: #ffab3e;
        }

        .rating-text {
            margin-top: 10px;
        }
    </style>
</head>
<footer class="animsition">

<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar" style="background-color: #FFE601;">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    <p class="text-dark" style = "font-size: 13px;" >Free shipping for standard order over $100</p>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <p class="text-dark" style = "font-size: 13px;" >Help & FAQs</p>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <p class="text-dark" style = "font-size: 13px;" >My Account</p>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <p class="text-dark" style = "font-size: 13px;" >EN</p>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <p class="text-dark" style = "font-size: 13px;" >USD</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop" >
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="<?php echo e(asset('assets/images/icons/logo-01.png')); ?>" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage 1</a></li>
                                <li><a href="home-02.html">Homepage 2</a></li>
                                <li><a href="home-03.html">Homepage 3</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="product.html">Shop</a>
                        </li>

                        <li >
                            <a href="shoping-cart.html">Features</a>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                        </li>

                        <li>
                            <a href="about.html">About</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="Login.html">Login</a>
                        </li>
                        <li>
                            <a href="Register.html">Register</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="<?php echo e(asset('assets/images/icons/logo-01.png')); ?>" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    <p class="text-dark" style = "font-size: 13px;" >Free shipping for standard order over $100</p>
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        <p class="text-dark" style = "font-size: 13px;" >Help & FAQs</p>
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        <p class="text-dark" style = "font-size: 13px;" >My Account</p>
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        <p class="text-dark" style = "font-size: 13px;" >EN</p>
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        <p class="text-dark" style = "font-size: 13px;" >USD</p>
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="index.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="product.html">Shop</a>
            </li>

            <li>
                <a href="shoping-cart.html" >Features</a>
            </li>

            <li>
                <a href="blog.html">Blog</a>
            </li>

            <li>
                <a href="about.html">About</a>
            </li>

            <li>
                <a href="contact.html">Contact</a>
            </li>
            <li>
                <a href="Login.html">Login</a>
            </li>
            <li>
                <a href="Register.html">Register</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="<?php echo e(asset('assets/images/icons/icon-close2.png')); ?>" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="<?php echo e(asset('assets/images/item-cart-01.jpg')); ?>" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            White Shirt Pleat
                        </a>

                        <span class="header-cart-item-info">
								1 x $19.00
							</span>
                    </div>
                </li>

                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="<?php echo e(asset('assets/images/item-cart-02.jpg')); ?>" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            Converse All Star
                        </a>

                        <span class="header-cart-item-info">
								1 x $39.00
							</span>
                    </div>
                </li>

                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="<?php echo e(asset('assets/images/item-cart-03.jpg')); ?>" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            Nixon Porter Leather
                        </a>

                        <span class="header-cart-item-info">
								1 x $17.00
							</span>
                    </div>
                </li>
            </ul>

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: $75.00
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(<?php echo e(asset('assets/images/slide-01-edit.png);')); ?>">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Save up to 50%
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                BLACK FRIDAY
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600" >
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(<?php echo e(asset('assets/images/slide-02-edit.png);')); ?>">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Save up to 50%
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                BLACK FRIDAY
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(<?php echo e(asset('assets/images/slide-03-edit.png);')); ?>">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Save up to 50%
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                BLACK FRIDAY
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--features icon section-->
<div class="container-fluid" style="background: #FFE601; margin-top: 80px;" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >
                <h3 class="ltext-103 cl5"
                    style="
						text-transform: none;
						text-align: center;
						font-family: Poppins-Medium;
						margin-top: 80px;
						margin-bottom: 50px;">
                    Featured Categories
                </h3>
                <div class="row" style="margin-bottom: 80px;" >
                    <div class="col-sm-2" style="width: 100%; ">
                        <img src="<?php echo e(asset('assets/images/123 (1).png')); ?>" style="height: 70px; margin: auto; display: block; margin-bottom: 20px;" />
                        <p style="font-family: Poppins-Medium; font-size: 14px; text-align: center; padding-bottom: 25px;">Photography</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="<?php echo e(asset('assets/images/123 (2).png')); ?>" style="height: 70px; margin: auto; display: block; margin-bottom: 20px;"/>
                        <p style="font-family: Poppins-Medium; font-size: 14px; text-align: center; padding-bottom: 25px;">Households</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="<?php echo e(asset('assets/images/123 (3).png ')); ?>" style="height: 70px; margin: auto; display: block; margin-bottom: 20px;"/>
                        <p style="font-family: Poppins-Medium; font-size: 14px; text-align: center; padding-bottom: 25px;">Groceries</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="<?php echo e(asset('assets/images/123 (4).png')); ?>" style="height: 70px; margin: auto; display: block; margin-bottom: 20px;"/>
                        <p style="font-family: Poppins-Medium; font-size: 14px; text-align: center; padding-bottom: 25px;">Pet Items</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="<?php echo e(asset('assets/images/123 (5).png')); ?>" style="height: 70px; margin: auto; display: block; margin-bottom: 20px;"/>
                        <p style="font-family: Poppins-Medium; font-size: 14px; text-align: center; padding-bottom: 25px;">Travelling</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="<?php echo e(asset('assets/images/123 (6).png')); ?>" style="height: 70px; margin: auto; display: block; margin-bottom: 20px;"/>
                        <p style="font-family: Poppins-Medium; font-size: 14px; text-align: center; padding-bottom: 25px;">Utilities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--features section end-->

<!-- Banner -->
<!--<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">-->
<!-- Block1 -->
<!--<div class="block1 wrap-pic-w">
    <img src="images/banner-01.jpg" alt="IMG-BANNER">

    <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
        <div class="block1-txt-child1 flex-col-l">
            <span class="block1-name ltext-102 trans-04 p-b-8">
                Women
            </span>

            <span class="block1-info stext-102 trans-04">
                Spring 2018
            </span>
        </div>

        <div class="block1-txt-child2 p-b-4 trans-05">
            <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
            </div>
        </div>
    </a>
</div>
</div>

<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">-->
<!-- Block1 -->
<!--<div class="block1 wrap-pic-w">
    <img src="images/banner-02.jpg" alt="IMG-BANNER">

    <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
        <div class="block1-txt-child1 flex-col-l">
            <span class="block1-name ltext-102 trans-04 p-b-8">
                Men
            </span>

            <span class="block1-info stext-102 trans-04">
                Spring 2018
            </span>
        </div>

        <div class="block1-txt-child2 p-b-4 trans-05">
            <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
            </div>
        </div>
    </a>
</div>
</div>

<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">-->
<!-- Block1 -->
<!--<div class="block1 wrap-pic-w">
    <img src="images/banner-03.jpg" alt="IMG-BANNER">

    <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
        <div class="block1-txt-child1 flex-col-l">
            <span class="block1-name ltext-102 trans-04 p-b-8">
                Accessories
            </span>

            <span class="block1-info stext-102 trans-04">
                New Trend
            </span>
        </div>

        <div class="block1-txt-child2 p-b-4 trans-05">
            <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
            </div>
        </div>
    </a>
</div>
</div>
</div>
</div>
</div>-->


<!-- Product -->
<?php echo $__env->yieldContent('section'); ?>


<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Categories
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Women
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Men
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shoes
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Watches
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    GET IN TOUCH
                </h4>

                <p class="stext-107 cl7 size-201">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <!--<div class="flex-c-m flex-w p-b-18">
                <a href="#" class="m-all-1">
                    <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
                </a>
            </div>-->

            <p class="stext-107 cl6 txt-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="<?php echo e(asset('assets/images/icons/icon-close.png')); ?>" alt="CLOSE">
            </button>

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php echo e(asset('assets/images/product-detail-01.jpg')); ?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php echo e(asset('assets/images/product-detail-02.jpg')); ?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php echo e(asset('assets/images/product-detail-03.jpg')); ?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            Lightweight Jacket
                        </h4>

                        <span class="mtext-106 cl2">
								$58.79
							</span>

                        <p class="stext-102 cl3 p-t-23">
                            Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                        </p>

                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</footer>

<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\Laravel\VdeployMultiVendor\resources\views/layouts/app.blade.php ENDPATH**/ ?>