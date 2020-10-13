<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $namaboba = $_POST['nama_boba'];
    $size = $_POST['size'];
    $topping = $_POST['topping'];
    $jumlah = $_POST['jumlah'];

    // buat query
    $sql = "INSERT INTO tabel_boba (nama_boba, size, topping, jumlah) VALUE ('$namaboba', '$size', '$topping', '$jumlah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>