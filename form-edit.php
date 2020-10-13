<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-boba.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tabel_boba WHERE id=$id";
$query = mysqli_query($db, $sql);
$boba = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penjualan Boba | BEAT Boba</title>
</head>

<body>
    <header>
        <h3>Form Edit Boba</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $boba['id'] ?>" />

        <p>
            <label for="nama_boba">Nama boba: </label>
            <input type="text" name="nama_boba" placeholder="nama boba" value="<?php echo $boba['nama_boba'] ?>" />
        </p>
        <p>
            <label for="size">Size: </label>
            <?php $size = $boba['size']; ?>
            <label><input type="radio" name="size" value="medium" <?php echo ($size == 'medium') ? "checked": "" ?>> Medium</label>
            <label><input type="radio" name="size" value="large" <?php echo ($size == 'large') ? "checked": "" ?>> Large</label>
        </p>
        <p>
            <label for="topping">Topping: </label>
            <?php $topping = $boba['topping']; ?>
            <select name="topping">
                <option <?php echo ($topping == 'Pearl') ? "selected": "" ?>>Pearl</option>
                <option <?php echo ($topping == 'Pudding') ? "selected": "" ?>>Pudding</option>
                <option <?php echo ($topping == 'Coconut') ? "selected": "" ?>>Coconut</option>
                <option <?php echo ($topping == 'Jelly') ? "selected": "" ?>>Jelly</option>
                <option <?php echo ($topping == 'Boba') ? "selected": "" ?>>Boba</option>
            </select>
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <input type="text" name="jumlah" placeholder="jumlah cup" value="<?php echo $boba['jumlah'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>