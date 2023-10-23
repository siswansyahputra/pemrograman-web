<?php
$produk = array(
    array(
        "nama_produk" => "Produk A",
        "harga_produk" => 10000,
        "jlh_jual" => 5
    ),
    array(
        "nama_produk" => "Produk B",
        "harga_produk" => 7500,
        "jlh_jual" => 10
    ),
    array(
        "nama_produk" => "Produk C",
        "harga_produk" => 12000,
        "jlh_jual" => 8
    )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan</title>
    <style>
        table,
        tr,
        th,
        td {
            border-collapse: collapse;
            border: solid 1px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Laporan Penjualan</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>
        <?php
        $total_jual = 0;
        $total_semua = 0;
        $no = 0;
        foreach ($produk as $produk) {
            $no++;
            $total = $produk['harga_produk'] * $produk['jlh_jual'];
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $produk['nama_produk']; ?></td>
                <td><?= $produk['harga_produk']; ?></td>
                <td><?= $produk['jlh_jual']; ?></td>
                <td><?= $total; ?></td>
            </tr>
        <?php
            $total_jual += $produk['jlh_jual'];
            $total_semua += $total;
        }
        ?>
        <tr>
            <td colspan="3">Total Penjualan</td>
            <td><?= $total_jual; ?></td>
            <td><?= $total_semua; ?></td>
        </tr>
    </table>
</body>

</html>