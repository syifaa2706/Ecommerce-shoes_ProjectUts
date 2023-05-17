<?php
include 'config/koneksi.php';
$sql = "SELECT * FROM produk";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Shome - Shoes eCommerce Website Template" />
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce" />
    <meta name="author" content="codecarnival" />

    <title>Syifa Shoes - eCommerce Website Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="public/frontend/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&amp;display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="public/frontend/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="public/frontend/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Pe7 Stroke Icon CSS ==-->
    <link href="public/frontend/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="public/frontend/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="public/frontend/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="public/frontend/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="public/frontend/css/style.css" rel="stylesheet" />
</head>

<body>

    <!--wrapper start-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        <header class="main-header-wrapper position-relative">
            <div class="header-top">
                <div class="container pt--0 pb--0">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-top-align">
                                <div class="header-top-align-start">
                                    <div class="desc">
                                        <p>World Wide Completely Free Returns and Free Shipping</p>
                                    </div>
                                </div>
                                <div class="header-top-align-end">
                                    <div class="header-info-items">
                                        <div class="info-items">
                                            <ul>
                                                <li class="account">
                                                    <i class="fa fa-user"></i>
                                                    <a href="backend/dashboard/">Go To Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container pt--0 pb--0">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="header-middle-align">
                                <div class="header-middle-align-start">
                                    <div class="header-logo-area">
                                        <a href="index.php">
                                            <img class="logo-main" src="public/frontend/img/logo.webp" width="131" height="34" alt="Logo" />
                                            <img class="logo-light" src="public/frontend/img/logo-light.webp" width="131" height="34" alt="Logo" />
                                        </a>
                                    </div>
                                </div>
                                <div class="header-middle-align-center">

                                </div>
                                <div class="header-middle-align-end">
                                    <div class="header-action-area">
                                        <div class="shopping-search">
                                            <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                                        </div>
                                        <div class="shopping-wishlist">
                                            <a class="shopping-wishlist-btn" href="javascript:;">
                                                <i class="pe-7s-like icon"></i>
                                            </a>
                                        </div>
                                        <div class="shopping-cart">
                                            <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                                                <i class="pe-7s-shopbag icon"></i>
                                                <sup class="shop-count">02</sup>
                                            </button>
                                        </div>
                                        <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                            <i class="pe-7s-menu"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area header-default">
                <div class="container">
                    <div class="row no-gutter align-items-center position-relative">
                        <div class="col-12">
                            <div class="header-align">
                                <div class="header-navigation-area position-relative">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->

        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="home-slider-area">
                <div class="swiper-container home-slider-container default-slider-container">
                    <div class="swiper-wrapper home-slider-wrapper slider-default">
                        <div class="swiper-slide">
                            <div class="slider-content-area" data-bg-img="public/frontend/img/shape/1.webp">
                                <div class="container">
                                    <div class="slider-container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-sm-6 col-md-5">
                                                <div class="slider-content">
                                                    <div class="content">
                                                        <div class="title-box">
                                                            <h2 class="title">Exclusive New Shoes</h2>
                                                        </div>
                                                        <div class="desc-box">
                                                            <p class="desc">Up To 50% Off All Shoes & Products</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a class="btn-slider" href="javascript:;">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="slider-thumb">
                                                    <div class="thumb scene">
                                                        <span class="scene-layer" data-depth=".3"><img src="public/frontend/img/slider/slider-01.webp" width="461" height="489" alt="Image-HasTech"></span>
                                                    </div>
                                                    <div class="shape-group mousemove">
                                                        <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="public/frontend/img/shape/2.webp"></div>
                                                        <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="public/frontend/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="slider-text-shape">NEW 2022</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-content-area" data-bg-img="public/frontend/img/shape/1.webp">
                                <div class="container">
                                    <div class="slider-container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-sm-6 col-md-5">
                                                <div class="slider-content">
                                                    <div class="content">
                                                        <div class="title-box">
                                                            <h2 class="title">Exclusive New Shoes</h2>
                                                        </div>
                                                        <div class="desc-box">
                                                            <p class="desc">Up To 30% Off All Shoes & Products</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a class="btn-slider" href="javascript:;">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="slider-thumb">
                                                    <div class="thumb scene">
                                                        <span class="scene-layer" data-depth=".3"><img src="public/frontend/img/slider/slider-03.webp" width="548" height="649" alt="Image-HasTech"></span>
                                                    </div>
                                                    <div class="shape-group mousemove">
                                                        <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="public/frontend/img/shape/2.webp"></div>
                                                        <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="public/frontend/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="slider-text-shape">NEW 2022</h2>
                            </div>
                        </div>
                    </div>

                    <!--== Add Swiper Arrows ==-->
                    <div class="swiper-btn-wrap">
                        <div class="swiper-btn-prev">
                            <i class="pe-7s-angle-left"></i>
                        </div>
                        <div class="swiper-btn-next">
                            <i class="pe-7s-angle-right"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->

            <!--== Start Product Collection Area Wrapper ==-->
            <section class="product-area product-collection-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!--== Start Product Collection Item ==-->
                            <div class="product-collection">
                                <div class="inner-content">
                                    <div class="product-collection-content">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:;">Sports Shoes</a></h3>
                                            <h4 class="price">From $95.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-collection-thumb" data-bg-img="public/frontend/img/shop/collection/1.webp"></div>
                                    <a class="banner-link-overlay" href="javascript:;"></a>
                                </div>
                            </div>
                            <!--== End Product Collection Item ==-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--== Start Product Collection Item ==-->
                            <div class="product-collection">
                                <div class="inner-content">
                                    <div class="product-collection-content">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:;">Latest Shoes</a></h3>
                                            <h4 class="price">From $90.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-collection-thumb" data-bg-img="public/frontend/img/shop/collection/2.webp"></div>
                                    <a class="banner-link-overlay" href="javascript:;"></a>
                                </div>
                            </div>
                            <!--== End Product Collection Item ==-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--== Start Product Collection Item ==-->
                            <div class="product-collection">
                                <div class="inner-content">
                                    <div class="product-collection-content">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:;">Office Shoes</a></h3>
                                            <h4 class="price">From $82.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-collection-thumb" data-bg-img="public/frontend/img/shop/collection/3.webp"></div>
                                    <a class="banner-link-overlay" href="javascript:;"></a>
                                </div>
                            </div>
                            <!--== End Product Collection Item ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Collection Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area product-default-area">
                <div class="container pt--0">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="title">Featured Items</h3>
                                <div class="desc">
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($result as $key => $row) : ?>
                            <div class="col-sm-6 col-lg-3">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <div class="inner-content">
                                        <div class="product-thumb">
                                            <a href="detail.php?id=<?= $row['id'] ?>">
                                                <img src="public/images/produk/<?= $row['gambar'] ?>" width="270" height="274" alt="Image-HasTech">
                                            </a>
                                            <div class="product-flag">
                                                <!-- <ul>
                                                    <li class="discount">-10%</li>
                                                </ul> -->
                                            </div>
                                            <div class="product-action">
                                                <!-- <a class="btn-product-wishlist" href=""><i class="fa fa-heart"></i></a> -->
                                                <!-- <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a> -->
                                                <!-- <button type="button" class="btn-product-quick-view-open">
                                                    <i class="fa fa-arrows"></i>
                                                </button> -->
                                                <!-- <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a> -->
                                            </div>
                                            <a class="banner-link-overlay" href="javascript:;"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="category">
                                                <ul>
                                                    <li><a href="javascript:;">Men</a></li>
                                                    <li class="sep">/</li>
                                                    <li><a href="javascript:;">Women</a></li>
                                                </ul>
                                            </div>
                                            <h4 class="title">
                                                <a href="detail.php?id=<?= $row['id'] ?>">
                                                    <?= $row['nama'] ?>
                                                </a>
                                            </h4>
                                            <div class="prices">
                                                <span class="price">Rp. <?= number_format($row['harga'], 0, ',', '.') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End prPduct Item ==-->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Divider Area Wrapper ==-->
            <section class="bg-color-f2 position-relative z-index-1">
                <div class="container pt--0 pb--0">
                    <div class="row divider-wrap divider-style1">
                        <div class="col-lg-6">
                            <div class="divider-content" data-title="NEW">
                                <h4 class="sub-title">Saving 50%</h4>
                                <h2 class="title">All Online Store</h2>
                                <p class="desc">Offer Available All Shoes & Products</p>
                                <a class="btn-theme" href="javascript:;">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-layer-wrap">
                    <div class="bg-layer-style z-index--1 parallax" data-speed="1.05" data-bg-img="public/frontend/img/photos/bg1.webp"></div>
                </div>
            </section>
            <!--== End Divider Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area product-best-seller-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="title">Best Seller</h3>
                                <div class="desc">
                                    <p>There are many variations of passages of available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-slider-wrap">
                                <div class="swiper-container product-slider-col4-container">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($result as $key => $row) : ?>
                                            <div class="swiper-slide">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="detail.php?id=<?= $row['id'] ?>">
                                                                <img src="public/images/produk/<?= $row['gambar'] ?>" width="270" height="274" alt="Image-HasTech">

                                                            </a>
                                                            <div class="product-flag">
                                                                <!-- <ul>
                                                                    <li class="discount">-10%</li>
                                                                </ul> -->
                                                            </div>
                                                            <div class="product-action">
                                                                <!-- <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a> -->
                                                                <!-- <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a> -->
                                                                <!-- <button type="button" class="btn-product-quick-view-open">
                                                                    <i class="fa fa-arrows"></i>
                                                                </button> -->
                                                                <!-- <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a> -->
                                                            </div>
                                                            <a class="banner-link-overlay" href="javascript:;"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="category">
                                                                <ul>
                                                                    <li><a href="javascript:;">Men</a></li>
                                                                    <li class="sep">/</li>
                                                                    <li><a href="javascript:;">Women</a></li>
                                                                </ul>
                                                            </div>
                                                            <h4 class="title"><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['nama'] ?></a></h4>
                                                            <div class="prices">
                                                                <span class="price">Rp. <?= number_format($row['harga'], 0, ',', '.') ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <!--== Add Swiper Arrows ==-->
                                <div class="product-swiper-btn-wrap">
                                    <div class="product-swiper-btn-prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </div>
                                    <div class="product-swiper-btn-next">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Divider Area Wrapper ==-->
            <section>
                <div class="container pt--0 pb--0">
                    <div class="row flex-md-row-reverse justify-content-between divider-wrap divider-style2">
                        <div class="col-lg-6">
                            <div class="divider-thumb-content">
                                <div class="thumb">
                                    <a href="javascript:;">
                                        <img src="public/frontend/img/shop/banner/1.webp" width="570" height="350" alt="Image-HasTech">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="title">Sports Shoes</h2>
                                    <p class="desc">Up To 50% Off All Shoes & Products</p>
                                    <a class="btn-theme" href="javascript:;">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="divider-thumb-content">
                                <div class="thumb">
                                    <a href="javascript:;">
                                        <img src="public/frontend/img/shop/banner/2.webp" width="570" height="700" alt="Image-HasTech">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Divider Area Wrapper ==-->

        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area mt-5">
            <!--== Start Footer Bottom ==-->
            <div class="footer-bottom">
                <div class="container pt--0 pb--0">
                    <div class="row">
                        <div class="col-md-7 col-lg-6">
                            <p class="copyright">© 2021 Syifa  Made with <i class="fa fa-heart"></i> by
                                <a target="_blank" href="https://themeforest.net/user/codecarnival/portfolio">Codecarnival.</a>
                            </p>
                        </div>
                        <div class="col-md-5 col-lg-6">
                            <div class="payment">
                                <a href="account-login.html">
                                    <img src="public/frontend/img/photos/payment-card.webp" width="192" height="21" alt="Payment Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Bottom ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>
    </div>

    <!--=======================Javascript============================-->

    <!--=== jQuery Modernizr Min Js ===-->
    <script src="public/frontend/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="public/frontend/js/jquery-main.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="public/frontend/js/jquery-migrate.js"></script>
    <!--=== jQuery Popper Min Js ===-->
    <script src="public/frontend/js/popper.min.js"></script>
    <!--=== jQuery Bootstrap Min Js ===-->
    <script src="public/frontend/js/bootstrap.min.js"></script>
    <!--=== jQuery Ui Min Js ===-->
    <script src="public/frontend/js/jquery-ui.min.js"></script>
    <!--=== jQuery Swiper Min Js ===-->
    <script src="public/frontend/js/swiper.min.js"></script>
    <!--=== jQuery Fancybox Min Js ===-->
    <script src="public/frontend/js/fancybox.min.js"></script>
    <!--=== jQuery Waypoint Js ===-->
    <script src="public/frontend/js/waypoint.js"></script>
    <!--=== jQuery Parallax Min Js ===-->
    <script src="public/frontend/js/parallax.min.js"></script>
    <!--=== jQuery Aos Min Js ===-->
    <script src="public/frontend/js/aos.min.js"></script>

    <!--=== jQuery Custom Js ===-->
    <script src="public/frontend/js/custom.js"></script>

</body>

</html>