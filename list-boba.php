<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penjualan Boba | BEAT Boba</title>
</head>

<body>
    <header>
        <h3>Boba yang sudah terjual</h3>
    </header>

    <nav>
        <a href="form-boba.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Boba</th>
            <th>Size</th>
            <th>Topping</th>
            <th>Jumlah</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tabel_boba";
        $query = mysqli_query($db, $sql);

        while($boba = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$boba['id']."</td>";
            echo "<td>".$boba['nama_boba']."</td>";
            echo "<td>".$boba['size']."</td>";
            echo "<td>".$boba['topping']."</td>";
            echo "<td>".$boba['jumlah']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$boba['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$boba['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>