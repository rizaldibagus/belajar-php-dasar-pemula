<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
        $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    global $conn;

    $pemilik = htmlspecialchars($data["pemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $merek = htmlspecialchars($data["merek"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "INSERT INTO tb_mobil
    VALUES
    ('', '$pemilik', '$alamat', '$merek', '$harga', '$foto')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_mobil WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $pemilik = htmlspecialchars($data["pemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $merek = htmlspecialchars($data["merek"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "UPDATE tb_mobil SET
                pemilik = '$pemilik',
                alamat = '$alamat',
                merek = '$merek',
                harga = '$harga',
                foto = '$foto'
                WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>