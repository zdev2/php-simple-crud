<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Stok Barang!</h1>
    <?php
    include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from barang where id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form action="update.php" method="post">
                <table>
                    <tr>
                        <td>Stok</td>
                        <td><input type="hidden" name="id" value="<?php echo $d['id']?>">
                            <input type="number" name="stok-barang" id="stok"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><select name="status-barang" id="status">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN" class="btn bg-blue"></td>
                    </tr>	
                </table>
            </form>
            <?php
        }
    ?>
</body>
</html>