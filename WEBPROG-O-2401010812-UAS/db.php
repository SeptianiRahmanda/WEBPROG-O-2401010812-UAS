<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "reservasi_hotel";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>