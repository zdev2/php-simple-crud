<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
    <link rel="stylesheet" href="src\css\style.css">
</head>
<body>
    <h1>Stok Barang!</h1>
    <a href="inputdata.php">Input!</a>
    <table class="tb-1">
        <tr class="tb-1">
            <th class="tb-1">No</th>
            <th class="tb-1">Kode</th>
            <th class="tb-1">Nama Barang</th>
            <th class="tb-1">Tipe</th>
            <th class="tb-1">Stok</th>
            <th class="tb-1">Status</th>
            <th class="tb-1">Opsi</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from barang");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr class="tb-1">
                <td id="nomor" class="tb-1"><?php echo $no++; ?></td>
                <td id="kodeb" class="tb-1"><?php echo $d['kode_barang']; ?></td>
                <td id="namab" class="tb-1"><?php echo $d['nama_barang']; ?></td>
                <td id="tipeb" class="tb-1"><?php echo $d['tipe']; ?></td>
                <td id="stok" class="tb-1"><?php echo $d['stok']; ?></td>
                <td id="status" class="tb-1"><?php echo $d['status']; ?></td>
                <td id="opsi" class="tb-1">
                    <a class="btn bg-blue" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a class="btn bg-red" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>
