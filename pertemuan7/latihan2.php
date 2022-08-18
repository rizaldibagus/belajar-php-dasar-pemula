<?php
if( !isset($_GET["pemilik"]) || 
    !isset($_GET["alamat"]) || 
    !isset($_GET["harga"]) || 
    !isset($_GET["merek"]) || 
    !isset($_GET["foto"])) {
        header("Location: latihan1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mobil</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["foto"]; ?>"></li>
        <li>Pemilik : <?= $_GET["pemilik"]; ?></li>
        <li>Alamat : <?= $_GET["alamat"]; ?></li>
        <li>Harga : <?= $_GET["harga"]; ?></li>
        <li>Merek : <?= $_GET["merek"]; ?></li>
    </ul>

<a href="latihan1.php">Kembali Ke Daftar Mobil</a>

</body>
</html>