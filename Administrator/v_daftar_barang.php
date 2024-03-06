<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
    //kembali ke halaman login
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR BARANG</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body style="background-color: #212529;">
    <?php include "navbar.php"; ?>
    <div class="container">
        <h1 style="color: white;">Daftar Barang</h1>
        <a href="v_tambah_barang.php" class="btn btn-light">Tambah Barang</a>
        <br>
        <br>
        <table class="table">
            <tr>
                <td>Id Barang</td>
                <td>Nama Barang</td>
                <td>Stok</td>
                <td>Harga</td>
                <td colspan="2">Aksi</td>
            </tr>
            <?php
            //ambil koneksi
            include "../config.php";
            //ambil data di tb_barang
            $sql = mysqli_query($koneksi, 'SELECT * FROM tb_barang ORDER BY id_barang DESC');
            foreach ($sql as $barang) {
            ?>
                <tr>
                    <td><?= $barang['id_barang'] ?> </td>
                    <td><?= $barang['nama_barang'] ?></td>
                    <td><?= $barang['stok_barang'] ?></td>
                    <td><?= $barang['harga_barang'] ?></td>
                    <td><a href="v_ubah_barang.php?id_barang=<?= $barang['id_barang'] ?>" class="btn btn-info">Ubah</a></td>
                    <td><a href="m_hapus_barang.php?id_barang=<?= $barang['id_barang'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <script src="../js/bootstrap.min.js"></script>
            <?php } ?>
        </table>
    </div>
</body>

</html>