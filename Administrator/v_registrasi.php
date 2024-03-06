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
    <title>Registrasi</title>
    <link rel="stylesheet" href="../js/bootstrap.min.js">
</head>

<body style="background-color: #212529;">
    <?php include "navbar.php"; ?>
    <div class="container">

        <h1 style="color: whitesmoke;">Daftar Pengguna</h1>
        <a href="v_tambah_pengguna_baru.php" class="btn btn-light">Tambah Pengguna</a>
        <br><br>
        <table class="table">
            <tr>
                <td>Id Login</td>
                <td>Nama</td>
                <td>Username</td>
                <td>Password</td>
                <td>Status</td>
                <td>Aksi</td>
            </tr>
            <?php
            include "../config.php";
            $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login ORDER BY id_login DESC');
            foreach ($sql as $pengguna) {
            ?>
                <tr>
                    <td><?= $pengguna['id_login'] ?></td>
                    <td><?= $pengguna['nama_pengguna'] ?></td>
                    <td><?= $pengguna['username_pengguna'] ?></td>
                    <td><?= $pengguna['password_pengguna'] ?></td>
                    <td><?= $pengguna['status'] ?></td>
                    <td><a href="v_ubah_pengguna.php?id_login=<?= $pengguna['id_login'] ?>" class="btn btn-info">Ubah</a>
                    </td>
                </tr>
                <script src="../js/bootstrap.min.js"></script>
            <?php } ?>
        </table>
    </div>
</body>

</html>