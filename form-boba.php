<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penjualan Boba | BEAT Boba</title>
</head>

<body>
    <header>
        <h3>Form Penjualan Boba | BEAT Boba</h3>
    </header>

    <form action="proses-boba.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_boba">Nama Boba: </label>
            <input type="text" name="nama_boba" placeholder="nama boba" />
        </p>
        <p>
            <label for="size">Size Boba: </label>
            <label><input type="radio" name="size" value="medium"> Medium</label>
            <label><input type="radio" name="size" value="large"> Large</label>
        </p>
        <p>
            <label for="topping">Topping: </label>
            <select name="topping">
                <option>Pearl</option>
                <option>Pudding</option>
                <option>Coconut</option>
                <option>Jelly</option>
                <option>Boba</option>
            </select>
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <input type="text" name="jumlah" placeholder="jumlah cup" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>