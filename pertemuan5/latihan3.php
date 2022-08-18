<?php
$mahasiswa = [
    ["Rizaldi Bagus", "212281503065", "RPL", 
            "rizalldii123@gmail.com"],
    ["Faisal Ahmad", "2122815083273", "TKJ", 
            "faisal123@gmail.com"],
    ["Kaqa Zidane", "23767426827483", "PD", 
            "kaqazidane@gmail.com"]      
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
        <li>Rizaldi Bagus</li>
        <li>212281503065</li>
        <li>RPL</li>
        <li>rizalldii123@gmail.com</li>
    </ul> -->

    <!-- <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIS : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>