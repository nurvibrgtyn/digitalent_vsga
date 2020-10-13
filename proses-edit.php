<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $namaboba = $_POST['nama_boba'];
    $size = $_POST['size'];
    $topping = $_POST['topping'];
    $jumlah = $_POST['jumlah'];

    // buat query update
    $sql = "UPDATE tabel_boba SET nama_boba='$namaboba', size='$size', topping='$topping', jumlah='$jumlah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-boba.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>