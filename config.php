<?php
$servername = "localhost";
$username = "root"; // username default untuk XAMPP adalah root
$password = ""; // password default untuk XAMPP adalah kosong
$dbname = "songfess_db"; // nama database yang sudah kamu buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
