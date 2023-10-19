<?php
$jlh_data = 3;
$produk = array(
    for($i=1;$i<=$jlh_data;$i++){
        array();
    }
);
// $produk = array(
//     array(
//         "nama_produk" => "Sepatu",
//         "harga_produk" => 80000,
//         "jlh_jual" => 7,
//     ),
//     array(
//         "nama_produk" => "Kaos",
//         "harga_produk" => 60000,
//         "jlh_jual" => 6,
//     ),
//     array(
//         "nama_produk" => "Sendal",
//         "harga_produk" => 20000,
//         "jlh_jual" => 5,
//     ),
// );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        th,
        td {
            border-collapse: collapse;
            border: solid 1px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>
        <?php
        $no = 0;
        $total_jual = 0;
        $total_semua = 0;
        foreach ($produk as $produk) {
            $no++;
            $total_jual += $produk['jlh_jual'];
            $total = $produk['harga_produk'] * $produk['jlh_jual'];
            $total_semua += $total;
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $produk['nama_produk']; ?></td>
                <td><?= $produk['harga_produk']; ?></td>
                <td><?= $produk['jlh_jual']; ?></td>
                <td><?= $total; ?></td>
            </tr>
        <?php
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