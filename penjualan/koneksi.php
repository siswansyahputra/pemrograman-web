<?php
// Koneksi dengan PDO
// try {
//     $pdo = new PDO("mysql:host=localhost;dbname=penjualan", "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Koneksi ke database berhasil";
// } catch (PDOException $e) {
//     echo "Koneksi gagal : " . $e->getMessage();
// }

// Koneksi dengan Mysqli
$mysqli = new mysqli("localhost", "root", "", "penjualan");
if ($mysqli->connect_error) {
    die("koneksi gagal :" . $mysqli->connect_error);
}
