<?php
$angka = [3,23,353,35,35,35,2,232];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: cyan;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
    <title>Latihan 2</title>
</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>    

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>