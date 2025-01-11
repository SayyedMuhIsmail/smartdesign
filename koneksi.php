<?php
session_start();

// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "smartdesignundangan"
// Membuat koneksi ke database
$con = mysqli_connect($host, $user, $pass, $dbname);
//koneksi berhasil
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
