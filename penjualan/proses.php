<?php
require_once('koneksi.php');
$nama_produk = $_GET['nama_produk'];
$harga_produk = $_GET['harga_produk'];
$jlh_jual = $_GET['jlh_jual'];
$query = "insert into transaksi (nama_produk,harga_produk,jlh_jual)values('$nama_produk','$harga_produk','$jlh_jual')";
$mysqli->query($query);
header('location:index.php');
