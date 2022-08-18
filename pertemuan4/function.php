<?php

function salam($waktu = "Datang", $nama = "Bosku") {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Sore","Rizal"); ?></h1>
    <h1><?= salam(); ?></h1>
</body>
</html>