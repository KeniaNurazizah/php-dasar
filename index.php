<?php
    $nama = "Kenia Nurazizah";
    $jenis_kelamin = "Perempuan"; 
    $umur = 21;
    $berat_badan = 53;
    $tinggi_badan = 157;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>:</td>
            <td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td>:</td>
            <td><?php echo $umur; ?></td>
        </tr>
        <tr>
            <th>Berat Badan</th>
            <td>:</td>
            <td><?php echo $berat_badan; ?> kg</td>
        </tr>
        <tr>
            <th>Tinggi Badan</th>
            <td>:</td>
            <td><?php echo $tinggi_badan; ?> cm</td>
        </tr>
    </table>
</body>
</html>
