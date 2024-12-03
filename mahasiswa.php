<?php
$mysqli = new mysqli('localhost', 'root', '', 'tedc');

$result = $mysqli->query("SELECT students.nim, students.nama, study_program.name 
                          FROM students 
                          INNER JOIN study_program ON students.study_program_id = study_program.id 
                          WHERE study_program.id = 11;");

$mahasiswa = [];

while ($row = $result->fetch_assoc()) {
    array_push($mahasiswa, $row);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAHASISWA</title>

    <!-- Bootstrap CSS (without integrity and crossorigin attributes) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for centering the table and lavender color -->
    <style>
        body {
            background-color: #f3e6f7; /* Lavender background */
        }
        .table {
            background-color: #fff;
            border-radius: 8px;
        }
        .table th,
        .table td {
            text-align: center; /* Center all text by default */
        }
        .table td:nth-child(3) { /* Nama column */
            text-align: left; /* Left-align Nama */
        }
        .table td:nth-child(1), /* # column */
        .table td:nth-child(2), /* NIM column */
        .table td:nth-child(4) { /* Program Studi (name) column */
            text-align: center; /* Center-align #, NIM, and Program Studi */
        }
        h1 {
            color: #5e2f89; /* Dark Lavender color for the title */
        }
        .table-bordered th,
        .table-bordered td {
            border-color: #e1c6f0; /* Lavender border */
        }
    </style>
</head>
<body>
    <h1 align="center">Data Mahasiswa KA 2021</h1>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['name']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
