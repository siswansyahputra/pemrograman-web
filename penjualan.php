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
            padding: 5px;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        input jumlah transaksi : <input type="number" name="jlh_transaksi">
        <input type="submit" value="Proses">
    </form>
    <hr>
    <?php
    if (isset($_GET['jlh_transaksi'])) {
        $jlh = $_GET['jlh_transaksi'];
    ?>
        <form action="" method="post">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga per Produk</th>
                    <th>Jumlah Terjual</th>
                </tr>
                <?php
                for ($i = 1; $i <= $jlh; $i++) {
                ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><input type="text" name="nama_produk<?= $i; ?>"></td>
                        <td><input type="text" name="harga_produk<?= $i; ?>"></td>
                        <td><input type="text" name="jlh_jual<?= $i; ?>"></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="4" align="right"><input type="submit" value="Simpan" name="simpan"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
    <hr>
    <?php
    if (isset($_POST['simpan'])) {
    ?>
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
            $baris = $jlh;
            $kolom = 3;
            $transaksi = array();
            $total_jual = 0;
            $total_seluruh = 0;
            for ($i = 1; $i <= $baris; $i++) {
                $transaksi[$i][1] = $_POST['nama_produk' . $i];
                $transaksi[$i][2] = $_POST['harga_produk' . $i];
                $transaksi[$i][3] = $_POST['jlh_jual' . $i];
                $total = $_POST['harga_produk' . $i] * $_POST['jlh_jual' . $i];
            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $transaksi[$i][1]; ?></td>
                    <td><?= $transaksi[$i][2]; ?></td>
                    <td><?= $transaksi[$i][3]; ?></td>
                    <td><?= $total; ?></td>
                </tr>
            <?php
                $total_jual += $_POST['jlh_jual' . $i];
                $total_seluruh += $total;
            }
            ?>
            <tr>
                <td colspan="3">Total Penjualan</td>
                <td><?= $total_jual; ?></td>
                <td><?= $total_seluruh; ?></td>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>