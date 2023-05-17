<?php
require_once('../../config/koneksi.php');
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id='$id'";
$query = $con->prepare($sql);
$query->execute();
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce | Jenis Produk</title>
    <link rel="icon" type="image/x-icon" href="../../public/backend/img/favicon.png" />
    <?php
    require_once('../include/head.php');
    ?>

</head>

<body>
    <?php
    require_once('../include/header.php');
    require_once('../include/sidebar.php');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon">
                                        <i data-feather="shopping-bag"></i>
                                    </div>
                                    Edit Produk
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">
                                <a class="btn btn-sm btn-light text-primary" href="../produk/index.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left me-1">
                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                        <polyline points="12 19 5 12 12 5"></polyline>
                                    </svg>
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Tambah Produk</div>
                    <div class="card-body">
                        <form id="form" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (kode)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="kode">Kode</label>
                                    <input class="form-control" id="kode" name="kode" type="text" placeholder="Kode" value="<?= $data['kode'] ?>" />
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (nama)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="nama">Nama</label>
                                    <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" value="<?= $data['nama'] ?>" />
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (harga)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="harga">Harga</label>
                                    <input class="form-control" id="harga" name="harga" type="text" placeholder="Harga" value="<?= $data['harga'] ?>" />
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (stok)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="harga">Stok</label>
                                    <input class="form-control" id="stok" name="stok" type="text" placeholder="Harga" value="<?= $data['stok'] ?>" />
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (gambar)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="gambar">Gambar</label>
                                    <input class="form-control" id="gambar" name="gambar" type="file" placeholder="Gambar" />
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" id="tombol_submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php
        require_once('../include/footer.php');
        ?>
    </div>
    <?php
    require_once('../include/modal.php');
    require_once('../include/script.php');
    ?>

    <script>
        $('#form').submit(function(e) {
            e.preventDefault();
            var data = new FormData(this);
            data.append('action', 'edit');
            $.ajax({
                type: 'POST',
                url: 'function.php',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                enctype: 'multipart/form-data',
                beforeSend: function() {
                    $('#tombol_submit').prop("disabled", true);
                    $('#tombol_submit').text('Please wait...');
                },
                success: function(response) {
                    if (response.status == "success") {
                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: "success",
                            confirmButtonText: 'OK'
                        }).then(function() {
                            window.location.href = "index.php";

                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response.message,
                            icon: "error",
                            confirmButtonText: 'OK'
                        });
                        setTimeout(function() {
                            $('#tombol_submit').prop("disabled", false);
                            $('#tombol_submit').html('Simpan');
                        }, 2000);
                    }
                }
            });
        });
    </script>
</body>

</html>