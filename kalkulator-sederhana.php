<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <h1>Aplikasi Kalkulator Sederhana</h1>
    <form action="" method="get">
        <table>
            <tr>
                <td>Input Bilangan 1</td>
                <td>:</td>
                <td><input type="text" name="bil1"></td>
            </tr>
            <tr>
                <td>Input Bilangan 2</td>
                <td>:</td>
                <td><input type="text" name="bil2"></td>
            </tr>
            <tr>
                <td>Pilih Operasi</td>
                <td>:</td>
                <td>
                    <input type="radio" name="operator" value="penjumlahan">+
                    <input type="radio" name="operator" value="pengurangan">-
                    <input type="radio" name="operator" value="perkalian">*
                    <input type="radio" name="operator" value="pembagian">/
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input type="submit" value="Hitung" name="hitung"></td>
            </tr>
        </table>
    </form>
    <hr>
    <?php
    if (isset($_GET['hitung'])) {
        $bil1 = $_GET['bil1'];
        $bil2 = $_GET['bil2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "penjumlahan":
                $hasil = $bil1 + $bil2;
                break;
            case "pengurangan":
                $hasil = $bil1 - $bil2;
                break;
            case "perkalian":
                $hasil = $bil1 * $bil2;
                break;
            case "pembagian":
                $hasil = $bil1 / $bil2;
                break;
            default:
                $hasil = 0;
        }
        echo "Hasil $operator $bil1 dan $bil2 adalah $hasil";
    }
    ?>
</body>

</html>