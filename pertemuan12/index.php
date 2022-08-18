<?php
require 'functions.php';
$mobil = query("SELECT * FROM tb_mobil");

if ( isset($_POST["cari"]) ) {
    $mobil = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mobil</h1>

    <a href="tambah.php">Tambah Data Mobil</a>
    <br><br>
    <a href="index.php">Kembali Ke Home</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus
        placeholder="Masukkan Keyword Pencarian..." autocomplete="off">
        <button type="submmit" name="cari">Cari!</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>Pemilik</th>
            <th>Alamat</th>
            <th>Harga</th>
            <th>Merek</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mobil as $ml ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $ml["id"]; ?>">EDIT</a> |
                <a href="hapus.php?id=<?= $ml["id"]; ?>" onclick="return confirm('yakin?');">HAPUS</a>
            </td>
            <td><img src="img/<?= $ml["foto"]; ?>"width="50"></td>
            <td><?= $ml["pemilik"]; ?></td>
            <td><?= $ml["alamat"]; ?></td>
            <td><?= $ml["harga"]; ?></td>
            <td><?= $ml["merek"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>