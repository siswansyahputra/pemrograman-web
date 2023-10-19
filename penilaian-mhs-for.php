<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
</head>

<body>
    <h1>Aplikasi Penilaian Mahasiswa</h1>
    <form action="" method="get">
        <table>
            <tr>
                <td>Masukkan jumlah matakuliah</td>
                <td>:</td>
                <td><input type="number" name="jlh_mk"></td>
                <td><input type="submit" value="Proses" name="proses"></td>
            </tr>
        </table>
    </form>
    <hr>
    <?php
    if (isset($_GET['proses'])) {
    ?>
        <form action="" method="post">
            <table>
                <?php
                $jlh_mk = $_GET['jlh_mk'];
                for ($i = 1; $i <= $jlh_mk; $i++) {
                ?>
                    <tr>
                        <td>Masukkan nilai matakuliah ke-<?= $i; ?></td>
                        <td>:</td>
                        <td><input type="text" name="mk<?= $i; ?>"></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="3" align="right"><input type="submit" value="Simpan" name="simpan"></td>
                </tr>
            </table>
        </form>
        <hr>
    <?php
    }
    if (isset($_POST['simpan'])) {
        $total = 0;
        for ($i = 1; $i <= $jlh_mk; $i++) {
            $total += $_POST['mk' . $i];
        }
        $rata = $total / $jlh_mk;
        if ($rata >= 60) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }
        echo "Nilai rata - rata : $rata <br>";
        echo "Status kelulusan : $status";
    }
    ?>
</body>

</html>