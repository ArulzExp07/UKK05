<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "UKK05";

$koneksi = mysqli_connect($hostname, $username, $password, $database);


//cek koneksi
if (!$koneksi) {
    echo "GAGAL KONEKSI KE DATABASE";
}
