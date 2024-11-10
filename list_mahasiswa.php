<?php
// Array mahasiswa
$mahasiswa = [
    [
        "nim" => "D212111006",
        "nama" => "Gita Septiani"
    ],
    [
        "nim" => "D212111007",
        "nama" => "Ikhlas Wandana"
    ],
    [
        "nim" => "D212111008",
        "nama" => "Intan Khorunnisa"
    ],
    [
        "nim" => "D212111009",
        "nama" => "Islah Nurhasanah"
    ],
    [
        "nim" => "D212111010",
        "nama" => "Kenia Nurazizah"
    ],
];
// Tampilkan tabel
echo "<table border= 1 cellpadding= 5 cellspacing= 0 width= 50%>";
echo "<tr><th>No</th><th>NIM</th><th>Nama</th></tr>";
$no = 1;
foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td align = center>" . $no++ . "</td>";
    echo "<td>" . $mhs["nim"] . "</td>";
    echo "<td>" . $mhs["nama"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>