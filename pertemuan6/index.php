<?php

$mobil = [[
        "pemilik" => "Rizaldi Bagus",
      "alamat" => "Malang",
       "harga" => "Rp. 2.100.000.000",
        "merek" => "Toyota Alphard",
      "foto" => "alphard.jpg"
    ],
    [
        "pemilik" => "Rody Ardiansyah",
        "alamat" => "Surabaya",
        "harga" => "Rp. 400.000.000",
        "merek" => "Toyota Avanza",
        "foto" => "avanza.jpg"
    ],
    [
        "pemilik" => "Lia Mo Xiao",
        "alamat" => "Sidoarjo",
        "harga" => "Rp. 850.000.000",
        "merek" => "Toyota Kijang Innova",
        "foto" => "kijang.jpg"
    ],
    [
        "pemilik" => "Faisal Dani",
        "alamat" => "Gresik",
        "harga" => "Rp. 350.000.000",
        "merek" => "Toyota Avanza Veloz",
        "foto" => "veloz.jpg"
    ],
    [
        "pemilik" => "Satrio Setyawan",
        "alamat" => "Bogor",
        "harga" => "Rp. 650.000.000",
        "merek" => "Toyota Rush",
        "foto" => "rush.jpg"
    ],
    [
        "pemilik" => "Haryanto",
        "alamat" => "Pasuruan",
        "harga" => "Rp. 530.000.000",
        "merek" => "Honda Brio",
        "foto" => "brio.jpg"
    ],
    [
        "pemilik" => "Firman Utina",
        "alamat" => "Jakarta",
        "harga" => "Rp. 834.000.000",
        "merek" => "Mitsubhisi Xpander",
        "foto" => "xpander.jpg"
    ],
    [
        "pemilik" => "Roby Hermawan",
        "alamat" => "Banten",
        "harga" => "Rp. 790.000.000",
        "merek" => "Toyota Yaris",
        "foto" => "yaris.jpg"
    ],
    [
        "pemilik" => "Indika Prawira",
        "alamat" => "Sorong",
        "harga" => "Rp. 400.000.000",
        "merek" => "Toyota Raize",
        "foto" => "raize.jpg"
    ],
    [
        "pemilik" => "Rico Firmanudin",
        "alamat" => "Palembang",
        "harga" => "Rp. 308.000.000",
        "merek" => "Toyota Calya",
        "foto" => "calya.jpg"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mobil</title>
</head>
<body>
    <h1>Daftar Mobil</h1>

    <?php foreach( $mobil as $ml ) : ?>
    <ul>
        <li>
            <img src="img/<?= $ml["foto"]; ?>">
        </li>
        <li>Pemilik : <?= $ml["pemilik"]; ?></li>
        <li>Merek : <?= $ml["merek"]; ?></li>
        <li>Harga : <?= $ml["harga"]; ?></li>
        <li>Alamat : <?= $ml["alamat"]; ?></li>
    </ul>
    <?php endforeach; ?>
<a href="login.php">Logout</a>
</body>
</html>