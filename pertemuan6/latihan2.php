<?php
// $mahasiswa = [
//     ["Rizaldi Bagus", "212281503065", "RPL", 
//             "rizalldii123@gmail.com"],
//     ["Faisal Ahmad", "2122815083273", "TKJ", 
//             "faisal123@gmail.com"],
//     ["Kaqa Zidane", "23767426827483", "PD", 
//             "kaqazidane@gmail.com"]      
// ];

$mahasiswa = [[
      "nama" => "Rizaldi Bagus",
     "nis" => "212281503065",
      "email" => "rizaldi@gmail.com",
       "jurusan" => "RPL",
      "foto" => "rijal.jpg"
    ],
    [
        "nama" => "Firmansyah",
        "nis" => "41151515151",
        "email" => "dody@gmail.com",
        "jurusan" => "TIK",
        "foto" => "faisal.png"
        // "tugas" => [90, 95, 100]
        ]
];
// echo $mahasiswa[1]["tugas"][1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["foto"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NIS : <?= $mhs["nis"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>