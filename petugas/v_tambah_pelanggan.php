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
    <title>Tambah Pelanggan Baru</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body style="background-color: #d63384;;">
    <?php include "navbar.php" ?>
    <br>
    <div class="container">
        <h1><b>Tambah pelanggan baru</b></h1>
        <br>
        <form action="m_tambah_pelanggan.php" method="post">
            <input type="hidden" name="id_login" value="<?= $_SESSION['id_login'] ?>">
            <table class="table table-striped">
                <tr>
                    <td>Id Pelanggan</td>
                    <td>:</td>
                    <td><input type="text" name="id_pelanggan" id="" value="<?= date('mis'); ?>" class="form-control" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pelanggan" id="" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat_pelanggan" id="" class="form-control"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="telepon_pelanggan" id="" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan" class="btn btn-secondary"></td>
                </tr>
                <script src="../js/bootstrap.min.js"></script>
            </table>
        </form>
    </div>
</body>

</html>