<?php
require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Laporan Penjualan</h1>
    <a class="btn btn-primary" href="form-input.php" target="_blank" rel="noopener noreferrer">Tambah Transaksi</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php
        $query = "select * from transaksi";
        $result = $mysqli->query($query);
        $no = 0;
        $total_jual = 0;
        $total_all = 0;
        while ($row = $result->fetch_assoc()) {
            $no++;
            $total = $row['harga_produk'] * $row['jlh_jual'];
            $total_jual += $row['jlh_jual'];
            $total_all += $total;
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_produk']; ?></td>
                <td><?= $row['harga_produk']; ?></td>
                <td><?= $row['jlh_jual']; ?></td>
                <td><?= $total; ?></td>
                <td>Edit | Hapus</td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="3">Total Keseluruhan</td>
            <td><?= $total_jual; ?></td>
            <td><?= $total_all; ?></td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>

</html>