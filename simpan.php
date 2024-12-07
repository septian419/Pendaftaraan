<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pendaftaran";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $conn->real_escape_string($_POST['id']);
    $nama = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $telepon = $conn->real_escape_string($_POST['phone']);
    $alamat = $conn->real_escape_string($_POST['address']);

    // Query untuk menyimpan data
    $sql = "INSERT INTO peserta (id,nama, email, telepon, alamat) VALUES ($id, '$nama', '$email', '$telepon', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Data berhasil disimpan!</h1>";
        echo "<p>Terima kasih, $nama. Data Anda telah tersimpan.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "<h1>Akses tidak valid!</h1>";
}
?>
