<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
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
    <form action="" method="get">
        Masukkan jumlah data penjualan : <input type="text" name="jlh_data">
        <input type="submit" value="Proses" name="proses">
    </form>
    <hr>
    <?php
    if (isset($_GET['proses'])) {
        $jlh_data = $_GET['jlh_data'];
    ?>
        <form action="" method="get">
            <input type="hidden" name="jlh_data" value="<?= $jlh_data; ?>">
            <?php
            for ($i = 1; $i <= $jlh_data; $i++) {
            ?>
                Nama produk : <input type="text" name="nama_produk<?= $i; ?>"><br>
                Harga per produk : <input type="text" name="harga_produk<?= $i; ?>"><br>
                Harga terjual : <input type="text" name="jlh_jual<?= $i; ?>"><br>
                <hr>
            <?php
            }
            ?>
            <input type="submit" value="Simpan" name="simpan">
        </form>
    <?php
    }
    if (isset($_GET['simpan'])) {
    ?>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga per Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total</th>
            </tr>
            <?php
            $jlh_data = $_GET['jlh_data'];
            $total_jual = 0;
            $total_semua = 0;
            for ($i = 1; $i <= $jlh_data; $i++) {
                $total = $_GET['harga_produk' . $i] * $_GET['jlh_jual' . $i];
            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $_GET['nama_produk' . $i]; ?></td>
                    <td><?= $_GET['harga_produk' . $i]; ?></td>
                    <td><?= $_GET['jlh_jual' . $i]; ?></td>
                    <td><?= $total; ?></td>
                </tr>
            <?php
                $total_jual += $_GET['jlh_jual' . $i];
                $total_semua += $total;
            }
            ?>
            <tr>
                <td colspan="3">Total Penjualan</td>
                <td><?= $total_jual; ?></td>
                <td><?= $total_semua; ?></td>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>