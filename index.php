<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penjualan Boba | BEAT Boba</title>
</head>

<body>
    <header>
        <h3>Daftar Penjualan Boba</h3>
        <h1>Beat Boba</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data baru berhasil dimasukkan!";
            } else {
                echo "Data gagal dimasukkan!";
            }
        ?>
    </p>
<?php endif; ?>
        <ul>
            <li><a href="form-boba.php">Tambah Baru</a></li>
            <li><a href="list-boba.php">Daftar Boba</a></li>
        </ul>
    </nav>

    </body>
</html>