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
                <td>Masukkan nilai matakuliah ke-1</td>
                <td>:</td>
                <td><input type="text" name="mk1"></td>
            </tr>
            <tr>
                <td>Masukkan nilai matakuliah ke-2</td>
                <td>:</td>
                <td><input type="text" name="mk2"></td>
            </tr>
            <tr>
                <td>Masukkan nilai matakuliah ke-3</td>
                <td>:</td>
                <td><input type="text" name="mk3"></td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input type="submit" value="Proses" name="proses"></td>
            </tr>
        </table>
    </form>
    <hr>
    <?php
    if (isset($_GET['proses'])) {
        $mk1 = $_GET['mk1'];
        $mk2 = $_GET['mk2'];
        $mk3 = $_GET['mk3'];
        $total = $mk1 + $mk2 + $mk3;
        $rata = $total / 3;
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