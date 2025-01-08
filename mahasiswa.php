<?php
session_start();
    if (!isset($_SESSION['login'])) {
        if ($_SESSION['login'] != true) {
          header("Location: login.php");
           exit;
    }
}
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f3e6f7; }
        .table { background-color: #fff; border-radius: 8px; }
        .table th, .table td { text-align: center; }
        .table td:nth-child(3) { text-align: left; }
        h1 { color: #5e2f89; }
        .table-bordered th, .table-bordered td { border-color: #e1c6f0; }
    </style>
</head>
<body>
    <h1 align="center">Data Mahasiswa KA 2021</h1>
    <div class="container">
        <?php if (isset($_SESSION['success']) && $_SESSION['success'] == true ) { ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['message'] ?>
            </div>
        <?php } ?>
        <a href="input.mahasiswa.php" class="btn btn-primary">Tambah</a>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td>
                        <a href="edithapus.mahasiswa.php?nim=<?= $row['nim'] ?>" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="hapus.mahasiswa.php?nim=<?= $row['nim'] ?>" class="btn btn-danger"
                           onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
<?php 
    unset($_SESSION['success']);
    unset($_SESSION['message']);
?>