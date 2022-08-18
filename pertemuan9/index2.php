<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data dari tabel
$result = mysqli_query($conn, "SELECT * FROM tb_mobil");
// var_dump($result);
// ambil data mobil dari object result
// while( $ml = mysqli_fetch_assoc($result) ) {
//     var_dump($ml);
// }

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
        <?php while( $ml = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">EDIT</a> |
                <a href="">HAPUS</a>
            </td>
            <td><img src="img/<?= $ml["foto"]; ?>"width="50"></td>
            <td><?= $ml["pemilik"]; ?></td>
            <td><?= $ml["alamat"]; ?></td>
            <td><?= $ml["harga"]; ?></td>
            <td><?= $ml["merek"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>