<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pengguna</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body style="background-color: #212529;">
    <?php include "navbar.php"; ?>
    <div class="container">
        <h1>Ubah Pengguna</h1>
        <?php
        include "../config.php";

        $id_login = $_GET['id_login'];
        $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_login='$id_login'");
        $pengguna = mysqli_fetch_assoc($sql);
        ?>
        <form action="m_ubah_pengguna.php" method="post">
            <input type="hidden" name="id_login" id="" value="<?= $pengguna['id_login'] ?>">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pengguna" id="" value="<?= $pengguna['nama_pengguna'] ?>"
                            class="form-control"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username_pengguna" id="" value="<?= $pengguna['username_pengguna'] ?>"
                            class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password_pengguna" id="" value="<?= $pengguna['password_pengguna'] ?>"
                            class="form-control"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="" class="form-select form-select-lg mb-3">
                            <?php
                            if ($pengguna['status'] == "Administrator") {
                                echo "<option value='Administrator' selected>Administrator</option>";
                            } else {
                                echo "<option value='Administrator'>Administrator</option>";
                            }

                            if ($pengguna['status'] == "Petugas") {
                                echo "<option value='Petugas' selected>Petugas</option>";
                            } else {
                                echo "<option value='Petugas'>Petugas</option>";
                            }
                            ?>
                        </select>
                    </td>
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