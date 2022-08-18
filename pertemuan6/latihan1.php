<!-- <?php

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "tulisan", false];

print_r($arr);

echo $arr[0];
?> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <h1>Latihan Array</h1>

    <?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [8,9,10]
    ];
    // echo $angka[2][2];
    ?>

    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
        <div class="clear"></div>
    <?php endforeach; ?>
    <?php endforeach; ?>

</body>
</html>