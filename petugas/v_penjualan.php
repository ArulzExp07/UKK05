<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
    //kembali ke halaman login
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body style="background-color:#d63384;;">
    <?php include "navbar.php" ?>
    <br>
    <div class="container">
        <h1><b>Daftar Pelangga</b>n</h1>
        <br>
        <a href="v_tambah_pelanggan.php" class="btn btn-dark">Tambah Pelanggan</a>
        <br>
        <br>
        <table class="table table-striped">
            <tr class="table-light">
                <td><b>ID Pelanggan</b></td>
                <td><b>Nama</b></td>
                <td><b>Alamat</b></td>
                <td><b>Telepon</b></td>
                <td colspan="2"><b>Aksi</b></td>
            </tr>
            <?php
            //ambil koneksi
            include "../config.php";
            //ambil data di tb_pelanggan
            $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC');
            foreach ($sql as $pelanggan) {
            ?>
                <tr>
                    <td><?= $pelanggan['id_pelanggan'] ?> </td>
                    <td><?= $pelanggan['nama_pelanggan'] ?></td>
                    <td><?= $pelanggan['alamat'] ?></td>
                    <td><?= $pelanggan['telepon_pelanggan'] ?></td>
                    <td><a href="m_hapus_pelanggan.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-danger">Hapus</a></td>
                    <td><a href="v_detail_penjualan.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-primary">Beli</a></td>
                </tr>
                <script src="../js/bootstrap.min.js"></script>
            <?php } ?>
        </table>
    </div>
</body>

</html>