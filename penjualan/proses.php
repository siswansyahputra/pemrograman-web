<?php
require_once('koneksi.php');
if ($_GET['act'] == "input" or $_GET['act'] == "update") {
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $jlh_terjual = $_POST['jlh_terjual'];
}
if ($_GET['act'] == "input") {
    $query = "insert into transaksi(nama_produk, harga_produk, jlh_terjual) values('$nama_produk','$harga_produk','$jlh_terjual')";
    $mysqli->query($query);
} elseif ($_GET['act'] == "update") {
    $query = "update transaksi set nama_produk='$nama_produk', harga_produk='$harga_produk',jlh_terjual='$jlh_terjual' where id='$_GET[id]'";
    $mysqli->query($query);
} elseif ($_GET['act'] == "delete") {
    $query = "delete from transaksi where id='$_GET[id]'";
    $mysqli->query($query);
}
header('location:index.php');
