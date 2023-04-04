<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $berat_beban = $_POST['berat_beban'];
            $jarak = $_POST['jarak'];
            $bensin = $_POST['bensin'];
            $harga = $_POST['harga'];
    
            // Menghitung bensin yang digunakan
            $bensin_digunakan = $jarak / $bensin;
    
            // Menghitung total harga bensin yang diperlukan
            $total_harga_bensin = $bensin_digunakan * $harga;
    
            // Menampilkan hasil perhitungan
            echo "<h2>Hasil Perhitungan</h2>";
            echo "<p>Beban Berat: " . $berat_beban . " Kg<br>";
            echo "<p>Jarak Tempuh: " . $jarak . " Km<br>";
            echo "<p>Bensin yang Digunakan: " . $bensin_digunakan . " liter<br>";
            echo "<p>Harga Bensin: Rp " . $harga . " / liter<br>";
            echo "<p>Total Harga Bensin: Rp " . $total_harga_bensin . "<br>";
        }



    ?>
</body>
</html>