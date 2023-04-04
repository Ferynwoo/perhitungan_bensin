<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bensin</h1>
    <form action="proses.php" method='post'>
        <label for="berat_beban">Beban Berat(Kg)</label>
        <input type="number" name="berat_beban" required><br><br>

        <label for="jarak">Jarak Tempuh(Km)</label>
        <input type="number" name="jarak" min="0" required><br><br>

        <label for="bensin">Bensin yang digunakan(Km/liter)</label>
        <input type="number" name="bensin" min="0" required><br><br>

        <label for="harga">Harga Bensin</label>
        <input type="number" name="harga" min="0" required><br><br>

        <input type="submit" name="submit" value="Hitung">
    </form>
</body>
</html>