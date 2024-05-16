<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data Barang</h1>
    <a href="index.php">Balik!</a>
    <form action="action.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama-barang" id="namab"></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td><select name="tipe-barang" id="tipeb">
                    <option value="MAKANAN">Makanan</option>
                    <option value="MINUMAN">Minuman</option>
                    <option value="LAINNYA">Lainnya</option>
                </select></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok-barang" id="stok"></td>
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
</body>
</html>