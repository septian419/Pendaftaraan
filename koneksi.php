<?php
$host = "localhost"; // Host database
$user = "root";      // Username MySQL
$pass = "";          // Password MySQL
$db   = "pendaftaran"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
