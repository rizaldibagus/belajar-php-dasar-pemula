<?php
require "functions.php";

$id = $_GET["id"];

$mb = query("SELECT * FROM tb_mobil WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mobil</title>
</head>
<body>
    <h1>Edit Data Mobil</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mb["id"]; ?>"
        <ul>
            <li>
                <label for="pemilik">Pemilik : </label>
                <input type="text" name="pemilik" id="pemilik" required value="<?= $mb["pemilik"]; ?>">
            </li>
            <li>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek" required value="<?= $mb["merek"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required value="<?= $mb["alamat"]; ?>">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required value="<?= $mb["harga"]; ?>">
            </li>
            <li>
                <label for="foto">Foto : </label>
                <input type="text" name="foto" id="foto" required value="<?= $mb["foto"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">SUBMIT</button>
            </li>
        </ul>

    </form>
    
</body>
</html>