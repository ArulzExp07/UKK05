<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna Baru</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body style="background-color: #212529;">
    <?php include "navbar.php"; ?>

    <h1 style="color: whitesmoke;">Tambah Pengguna Baru</h1>
    <form action="m_tambah_pengguna_baru.php" method="post">
        <table class="table table-hover">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_pengguna" id="" class="form-control"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username_pengguna" id="" class="form-control"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password_pengguna" id="" class="form-control"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status" id="" class="form-control">
                        <option value="Administrator">Administator</option>
                        <option value="Petugas">Petugas</option>
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