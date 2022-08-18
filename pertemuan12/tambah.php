<?php
require "functions.php";
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

if( isset($_POST["submit"]) ) {
    // $pemilik = $_POST["pemilik"];
    // $alamat = $_POST["alamat"];
    // $merek = $_POST["merek"];
    // $harga = $_POST["harga"];
    // $foto = $_POST["foto"];

    // $query = "INSERT INTO tb_mobil
    //             VALUES
    //             ('', '$pemilik', '$alamat', '$merek', '$harga', '$foto')
    //             ";
    // mysqli_query($conn, $query);

    // if ( mysqli_affected_rows($conn) > 0 ) {
    //     echo "Berhasil!";
    // } else {
    //     echo "Gagal!";
    //     echo "<br>";
    //     echo mysqli_errno($conn);
    // }

    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
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
    <title>Tambah Data Mobil</title>
</head>
<body>
    <h1>Tambah Data Mobil</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="pemilik">Pemilik : </label>
                <input type="text" name="pemilik" id="pemilik" required>
            </li>
            <li>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek" required>
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="foto">Foto : </label>
                <input type="text" name="foto" id="foto" required>
            </li>
            <li>
                <button type="submit" name="submit">SUBMIT</button>
            </li>
        </ul>

    </form>
    
</body>
</html>