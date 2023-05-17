<?php
include 'config/koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = '$id'";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
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

    <title>Checkout : Shome - Shoes eCommerce Website Template</title>

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
    <link rel="stylesheet" href="public/frontend/css/sweetalert.css" type="text/css" />
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
                                        <a href="index.html">
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
                                            <a class="shopping-wishlist-btn" href="shop-wishlist.html">
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

            <!--== Start Shopping Checkout Area Wrapper ==-->
            <section class="shopping-checkout-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--== Start Billing Accordion ==-->
                            <div class="checkout-billing-details-wrap">
                                <h2 class="title">Billing details</h2>
                                <div class="billing-form-wrap">
                                    <form action="#" id="billing-form" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="nama_pemesan">Nama Pemesan<abbr class="required" title="required">*</abbr></label>
                                                    <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="alamat_pemesan">Alamat Pemesan</label>
                                                    <textarea class="form-control" name="alamat_pemesan" rows="2" cols="30"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="qty">Jumlah<abbr class="required" title="required">*</abbr></label>
                                                    <input id="qty" name="qty" type="number" class="form-control" min="1">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-theme">Place order</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--== End Billing Accordion ==-->
                        </div>
                        <div class="col-lg-6">
                            <!--== Start Order Details Accordion ==-->
                            <div class="checkout-order-details-wrap">
                                <div class="order-details-table-wrap table-responsive">
                                    <h2 class="title mb-25">Your order</h2>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-body">
                                            <tr class="cart-item">
                                                <td class="product-name"><?= $result['nama'] ?>
                                                    <span class="product-quantity" id="quantity"></span>
                                                </td>
                                                <td class="product-total" id="harga"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--== End Order Details Accordion ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Shopping Checkout Area Wrapper ==-->
        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">

            <!--== Start Footer Bottom ==-->
            <div class="footer-bottom">
                <div class="container pt--0 pb--0">
                    <div class="row">
                        <div class="col-md-7 col-lg-6">
                            <p class="copyright">© 2021 Shome. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival/portfolio">Codecarnival.</a></p>
                        </div>
                        <div class="col-md-5 col-lg-6">
                            <div class="payment">
                                <a href=""><img src="public/frontend/img/photos/payment-card.webp" width="192" height="21" alt="Payment Logo"></a>
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
    <script src="public/frontend/js/sweetalert.js"></script>
    <script>
        $(document).ready(function() {
            // when qty changes or keyup event fires    
            $('input[name="qty"]').on('change keyup', function() {
                var qty = $(this).val();
                var harga = <?= $result['harga'] ?>;
                var total_harga = qty * harga;
                $('#quantity').html('x ' + qty);
                $('#harga').html(total_harga);
            });


            $('#billing-form').submit(function(e) {
                e.preventDefault();
                var harga = <?= $result['harga'] ?>;
                var nama_pemesan = $('[name="nama_pemesan"]').val();
                var alamat_pemesan = $('[name="alamat_pemesan"]').val();
                var qty = $('[name="qty"]').val();
                var total_harga = qty * harga;
                $.ajax({
                    type: 'POST',
                    url: 'function.php',
                    data: {
                        nama_pemesan: nama_pemesan,
                        alamat_pemesan: alamat_pemesan,
                        qty: qty,
                        total_harga: total_harga,
                        nama_produk: '<?= $result['nama'] ?>',
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            Swal.fire({
                                title: 'Success',
                                text: response.message,
                                icon: "success",
                                confirmButtonText: 'OK'
                            }).then(function() {
                                window.location.href = "detail-pesanan.php?id=" + response.id;
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: "error",
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>