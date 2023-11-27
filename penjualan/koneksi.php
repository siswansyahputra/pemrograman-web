<?php
// try {
//     $pdo = new PDO("mysql:host=localhost;dbname=penjualan", "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Koneksi ke database berhasil";
// } catch (PDOException $e) {
//     die("Koneksi gagal :" . $e->getMessage());
// }
$mysqli = new mysqli("localhost", "root", "", "penjualan");
if ($mysqli->connect_error) {
    die("koneksi gagal :" . $mysqli->connect_error);
} else {
    // echo "Koneksi ke database menggunakan mysqli berhasil";
}
