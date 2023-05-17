<?php
include 'config/koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = '$id'";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM produk WHERE id != '$id'";
$query = $con->prepare($sql);
$query->execute();
$produk = $query->fetchAll(PDO::FETCH_ASSOC);
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

    <title>Shome - Shoes eCommerce Website Template</title>

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
                                            <img class="logo-main" src="public/frontend//img/logo.webp" width="131" height="34" alt="Logo" />
                                            <img class="logo-light" src="public/frontend//img/logo-light.webp" width="131" height="34" alt="Logo" />
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
            <!--== Start Product Single Area Wrapper ==-->
            <section class="product-area product-single-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-single-item">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--== Start Product Thumbnail Area ==-->
                                        <div class="product-single-thumb">
                                            <div class="swiper-container single-product-thumb single-product-thumb-slider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="public/images/produk/<?= $result['gambar'] ?>">
                                                            <img src="public/images/produk/<?= $result['gambar'] ?>" width="570" height="541" alt="Image-HasTech">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-container single-product-nav single-product-nav-slider">
                                                    <div class="swiper-wrapper">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-single-info">
                                            <h3 class="main-title"><?= $result['nama'] ?></h3>
                                            <div class="prices">
                                                <span class="price">Rp. <?= number_format($result['harga'], 0, ',', '.') ?></span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="review-status">
                                                    <a href="javascript:void(0)">(5 Customer Review)</a>
                                                </div>
                                            </div>
                                            <p>SEPATU WANITA SNEAKERS F875-FO
                                               BAHAN : CANVAS
                                               TYPE : REGULER
                                               DETAIL : Sepatu sneakers wanita Ready warna biru dan putih Ukuran 37-40
                                               NOTE :
                                            * MUNGKIN TERJADI SEDIKIT PERBEDAAN WARNA, KARENA PENCAHAYAAN SAAT FOTO
                                            * HARAP PERHATIKAN DETAIL UKURAN SEBELUM MEMBELI
                                            * JIKA ADA ITEM YANG TIDAK BISA DIPILIH, ARTINYA SUDAH SOLD OUT
                                            * HAPPY SHOPPING !!</p>
                                            <div class="product-size">
                                                <h6 class="title">Stock</h6>
                                                <span><?= $result['stok'] ?></span>
                                            </div>
                                            <div class="product-quick-action">
                                                <a class="btn-theme ml--0" href="pesan.php?id=<?= $result['id'] ?>">Pesan Sekarang</a>
                                            </div>
                                            <div class="product-wishlist-compare">
                                                <a href="javascript:;"><i class="pe-7s-like"></i>Add to Wishlist</a>
                                                <a href="javascript:;"><i class="pe-7s-shuffle"></i>Add to Compare</a>
                                            </div>
                                            <div class="product-info-footer">
                                                <h6 class="code"><span>Code :</span><?= $result['kode'] ?></h6>
                                                <div class="social-icons">
                                                    <span>Share</span>
                                                    <a href="#/"><i class="fa fa-facebook"></i></a>
                                                    <a href="#/"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Info Area ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="product-review-tabs-content">
                                <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                                    <li role="presentation">
                                        <a class="active" id="information-tab" data-bs-toggle="pill" href="#information" role="tab" aria-controls="information" aria-selected="true">Information</a>
                                    </li>
                                    <li role="presentation">
                                        <a id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                                    </li>
                                    <li role="presentation">
                                        <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews <span>(05)</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content product-tab-content" id="ReviewTabContent">
                                    <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                                        <div class="product-information">
                                            <p> Sepatu adalah suatu jenis alas kaki (footwear) yang biasanya terdiri bagianbagian sol, hak, kap, tali, dan lidah yang fungsinya sebagai alas kaki.
                                                Pengelompokkan sepatu biasanya dilakukan berdasarkan fungsinya, seperti sepatu
                                                resmi (pesta), sepatu santai (kasual), sepatu dansa, sepatu olah raga, dan sepatu kerja.
                                                Sepatu Sneakers wanita merk fashionne ini banyak diminati anak muda dikarenakan 
                                               harganya yang relatif terjangkau dan desain gayanya yang trendy menjadi daya tarik utama.
                                               Pilihan warnanya yang banyak membuat siapapun yang melihatnya akan membelinya. <p>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="product-description">
                                            <p>SEPATU WANITA SNEAKERS, HIGH HEELS, SPORT FASHION  VFSO-066
                                               BAHAN : CANVAS
                                               TYPE : REGULER
                                               DETAIL : Sepatu sneakers wanita Ready warna biru putih, dll Ukuran 37-40
                                               NOTE :
                                            * MUNGKIN TERJADI SEDIKIT PERBEDAAN WARNA, KARENA PENCAHAYAAN SAAT FOTO
                                            * HARAP PERHATIKAN DETAIL UKURAN SEBELUM MEMBELI
                                            * JIKA ADA ITEM YANG TIDAK BISA DIPILIH, ARTINYA SUDAH SOLD OUT
                                            * HAPPY SHOPPING !!
                                            
                                            Sepatu Sneakers wanita ini banyak diminati anak muda dikarenakan 
                                               harganya yang relatif terjangkau dan desain gayanya yang trendy menjadi daya tarik utama.
                                               Pilihan warnanya yang banyak membuat siapapun yang melihatnya akan membelinya.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                        <div class="product-review-content">
                                            <div class="review-content-header">
                                                 <!--== Start Reviews Content Item ==-->
                                            <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                            </ul>
                                            <h3 class="title">Customer Reviews</h3>
                                                    <h5 class="sub-title"><span>Jakarta, Indonesia</span> no <span>Sep 30, 2022</span></h3>
                                                    <p> <b>Alea Hafshayah<b></h5>
                                                    <p>Produk nya sangat bagus dan bahannya enak untuk dipakai pengiriman juga sangat cepat
                                                    seller pun ramah</p>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                 <!--== End Reviews Content Item ==-->

                                                 <!--== Start Reviews Content Item ==-->
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                <h3>Customer Reviews</h3>
                                                <h5 class="sub-title"><span>Bogor, Indonesia</span> no <span>July, 20 2022</span></h3>
                                                <p> <b>Syafira Ramadhani<b>
                                                 <h5>
                                                    Bagus banget, muantapp poll, pengemasaan cepat apalagi pengirimannya cepatt juga, bahan lembut, jahitan rapih <h5>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                 <!--== End Reviews Content Item ==-->

                                                 <!--== Start Reviews Content Item ==-->
                                                 <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                <h3>Customer Reviews</h3>
                                                <h5 class="sub-title"><span>Medan, Sumatera Utara Indonesia</span> no <span>April,27 2023</span></h5>
                                                <p> <b>Nicholas Saputra<b>
                                                 <h5>
                                                    Produknya bagus buat anak saya cocok dan pas ukurannya terimakasih seller dan kurir <h5>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                <!--== End Reviews Content Item ==-->


                                                <div class="review-info">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star-o"></li>
                                                    </ul>
                                                    <span class="review-caption">Based on 5 reviews</span>
                                                    <span class="review-write-btn">Write a review</span>
                                                </div>
                                            </div>

                                            <!--== Start Reviews Form Item ==-->
                                            <div class="reviews-form-area">
                                                <h4 class="title">Write a review</h4>
                                                <div class="reviews-form-content">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="for_name">Name</label>
                                                                    <input id="Alea Hafshayah" class="form-control" type="text" placeholder="Alea Hafshayah">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="for_email">Email</label>
                                                                    <input id="for_email" class="form-control" type="email" placeholder="john.smith@example.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <span class="title">Rating</span>
                                                                    <ul class="review-rating">
                                                                        <li class="fa fa-star-o"></li>
                                                                        <li class="fa fa-star-o"></li>
                                                                        <li class="fa fa-star-o"></li>
                                                                        <li class="fa fa-star-o"></li>
                                                                        <li class="fa fa-star-o"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="for_review-title">Review Title</label>
                                                                    <input id="for_review-title" class="form-control" type="text" placeholder="Give your review a title">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="for_comment">Body of Review (1500)</label>
                                                                    <textarea id="for_comment" class="form-control" placeholder="Write your comments here"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-submit-btn">
                                                                    <button type="submit" class="btn-submit">Post comment</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--== End Reviews Form Item ==-->

                                            <div class="reviews-content-body">
                                                <!--== Start Reviews Content Item ==-->
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                    <h3 class="title"> <b>Aurelia<b></h3>
                                                    <h3 class="sub-title"> <b><span><b>Surabaya, Jawa Timur</span> no <span>Januari,19 2023</span><b></h3>
                                                    <h5> <p>First Time beli disinii, bagus bangett soalnya empuk sepatunya, ukurannya pas, modelnya cakeppp poll,
                                                         next mau beli lagi yang beda model</p> <h5>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                <!--== End Reviews Content Item ==-->

                                                <!--== Start Reviews Content Item ==-->
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star-o"></li>
                                                        <li class="fa fa-star-o"></li>
                                                    </ul>
                                                    <h3 class="title"><b>Amira</b></h3>
                                                    <h5 class="sub-title"><span></span> Palembang, Sumatra Selatan</span> tanggal <span>Maret 10, 2023</span></h5>
                                                    <p>Sedih banget sepatunya ada yang robek ternyata, dan jahitannya juga gak rapih saya sangat kecewa</p>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                <!--== End Reviews Content Item ==-->

                                                <!--== Start Reviews Content Item ==-->
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                    <h3 class="title"><b>Adzkiya</b></h3>
                                                    <h5 class="sub-title"><span>Bandung, Jawa Barat</span> no <span>Maret 22, 2023</span></h5>
                                                    <p>Bagues bangettt sihh, ga mengecewakann pokoknya, semoga tokonya laris manis</p>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                <!--== End Reviews Content Item ==-->

                                                <!--== Start Reviews Content Item ==-->
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star-o"></li>
                                                    </ul>
                                                    <h3 class="title"><b>Bella Swan</b></h3>
                                                    <h5 class="sub-title"><span>Los Angeles, America</span> no <span>April,12 2023</span></h5>
                                                    <p>The shoes are really good, the price here is also really cheap compared to my own country, the shoes are also nice and comfortable to wear, thank you seller.</p>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                <!--== End Reviews Content Item ==-->

                                                <!--== Start Reviews Content Item ==-->
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                    <h3 class="title"><b>Diana</b></h3>
                                                    <h5 class="sub-title"><span>Denpasar, Bali</span> no <span>15, Februari 2023</span></h5>
                                                    <p>Bagus, memang gak pernah ragu sama kualitas sepatuu iniii, pengiriman juga cepatt.</p>
                                                    <a href="#/">Report as Inappropriate</a>
                                                </div>
                                                <!--== End Reviews Content Item ==-->
                                            </div>

                                            <!--== Start Reviews Pagination Item ==-->
                                            <div class="review-pagination">
                                                <span class="pagination-pag">1</span>
                                                <span class="pagination-pag">2</span>
                                                <span class="pagination-next">Next »</span>
                                            </div>
                                            <!--== End Reviews Pagination Item ==-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Single Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area product-best-seller-area">
                <div class="container pt--0">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="title">Related Products</h3>
                                <div class="desc">
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-slider-wrap">
                                <div class="swiper-container product-slider-col4-container">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($produk as $key => $row) : ?>
                                            <div class="swiper-slide">
                                                <!--== Start Product Item ==-->
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
                                                <!--== End prPduct Item ==-->
                                            </div>
                                        <?php endforeach ?>
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
        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <!--== Start Footer Bottom ==-->
            <div class="footer-bottom">
                <div class="container pt--0 pb--0">
                    <div class="row">
                        <div class="col-md-7 col-lg-6">
                            <p class="copyright">© 2023 Shome. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival/portfolio">Codecarnival.</a></p>
                        </div>
                        <div class="col-md-5 col-lg-6">
                            <div class="payment">
                                <a href="account-login.html"><img src="public/frontend//img/photos/payment-card.webp" width="192" height="21" alt="Payment Logo"></a>
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