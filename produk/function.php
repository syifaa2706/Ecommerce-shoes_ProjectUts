<?php
require_once('../../config/koneksi.php');
global $con;
header('Content-Type: application/json');
if ($_POST['action'] == 'tambah') {
    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);
    $gambar = $_FILES['gambar']['name'];
    if (empty($kode)) {
        $response = array(
            'status' => 'error',
            'message' => 'Kode tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($nama)) {
        $response = array(
            'status' => 'error',
            'message' => 'Nama tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($harga)) {
        $response = array(
            'status' => 'error',
            'message' => 'Harga tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($stok)) {
        $response = array(
            'status' => 'error',
            'message' => 'Stok tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($gambar)) {
        $response = array(
            'status' => 'error',
            'message' => 'Gambar tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    //  upload gambar
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = time() . rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../../public/images/produk/' . $nama_gambar_baru);
    }
    //   insert data using PDO
    $sql = "INSERT INTO produk (kode, nama, harga, stok, gambar) VALUES ('$kode', '$nama', '$harga', '$stok', '$nama_gambar_baru')";
    $query = $con->prepare($sql);
    $query->execute();
    if ($query) {
        $response = array(
            'status' => 'success',
            'message' => 'Berhasil menambahkan data',
        );
        echo json_encode($response);
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Gagal menambahkan data'
        );
        echo json_encode($response);
    }
} elseif ($_POST['action'] == 'edit') {
    $id = htmlspecialchars($_POST['id']);
    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);
    $gambar = $_FILES['gambar']['name'];
    if (empty($kode)) {
        $response = array(
            'status' => 'error',
            'message' => 'Kode tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($nama)) {
        $response = array(
            'status' => 'error',
            'message' => 'Nama tidak boleh kosong'
        );
        echo json_encode($response);
    }
    if (empty($harga)) {
        $response = array(
            'status' => 'error',
            'message' => 'Harga tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (empty($stok)) {
        $response = array(
            'status' => 'error',
            'message' => 'Stok tidak boleh kosong'
        );
        echo json_encode($response);
        return false;
    }
    if (!empty($gambar)) {
        //  upload gambar
        $ekstensi_diperbolehkan    = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak     = time() . rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            // hapus gambar
            $sql = "SELECT * FROM produk WHERE id = '$id'";
            $query = $con->prepare($sql);
            $query->execute();
            $data = $query->fetch();
            $gambar = $data['gambar'];
            unlink('../../public/images/produk/' . $gambar);
            move_uploaded_file($file_tmp, '../../public/images/produk/' . $nama_gambar_baru);
        }
        //   update data using PDO
        $sql = "UPDATE produk SET kode = '$kode', nama = '$nama', harga = '$harga', stok = '$stok', gambar = '$nama_gambar_baru' WHERE id = '$id'";
        $query = $con->prepare($sql);
        $query->execute();
        if ($query) {
            $response = array(
                'status' => 'success',
                'message' => 'Berhasil mengubah data',
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal mengubah data'
            );
            echo json_encode($response);
        }
        return false;
    } else {
        //   update data using PDO
        $sql = "UPDATE produk SET kode = '$kode', nama = '$nama', harga = '$harga', stok = '$stok' WHERE id = '$id'";
        $query = $con->prepare($sql);
        $query->execute();
        if ($query) {
            $response = array(
                'status' => 'success',
                'message' => 'Berhasil mengubah data',
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal mengubah data'
            );
            echo json_encode($response);
        }
        return false;
    }
} elseif ($_POST['action'] == 'hapus') {
    $id = htmlspecialchars($_POST['id']);
    // hapus gambar
    $sql = "SELECT * FROM produk WHERE id = '$id'";
    $query = $con->prepare($sql);
    $query->execute();
    $data = $query->fetch();
    $gambar = $data['gambar'];
    unlink('../../public/images/produk/' . $gambar);
    //   Delete data using PDO
    $sql = "DELETE FROM produk WHERE id = '$id'";
    $query = $con->prepare($sql);
    $query->execute();
    if ($query) {
        $response = array(
            'status' => 'success',
            'message' => 'Berhasil menghapus data',
            'url' =>  'index.php'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Gagal menghapus data'
        );
        echo json_encode($response);
    }
}
