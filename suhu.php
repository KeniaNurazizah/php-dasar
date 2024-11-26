<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <h1>Konversi Suhu</h1>

    <form method="post" action="">
        <label style="font-size: 18px;">Konversi ke:</label>
        <select name="konversi" style="font-size: 18px;">
            <option value="fahrenheit">Fahrenheit</option>
            <option value="reamur">Reamur</option>
        </select>
        <br>

        <label style="font-size: 18px;">Suhu:</label>
        <input type="number" name="suhu" required style="font-size: 18px;">
        <br>

        <input type="submit" value="Hitung" style="font-size: 18px;">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $suhu = $_POST['suhu'];
        $konversi = $_POST['konversi'];

        if ($konversi == "fahrenheit") {
            $hasil = ($suhu * 9/5) + 32;
            echo "<p style='font-size: 18px;'>Hasil konversi ke Fahrenheit adalah: " . $hasil . "</p>";
        } else if ($konversi == "reamur") {
            $hasil = $suhu * 4/5;
            echo "<p style='font-size: 18px;'>Hasil konversi ke Reamur adalah: " . $hasil . "</p>";
        }
    }
    ?>
</body>
</html>
