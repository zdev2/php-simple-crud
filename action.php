<?php
include 'koneksi.php';

$nama = $_POST['nama-barang'];
$tipe = $_POST['tipe-barang'];
$stok = $_POST['stok-barang'];
$status = $_POST['status-barang'];

// Determine the tipe_id based on the tipe
if($tipe == 'MAKANAN'){
    $tipe_id = 'MA';
} 
elseif($tipe == 'MINUMAN'){
    $tipe_id = 'MI';
} 
else{
    $tipe_id = 'L';
}

// Construct the kode_barang
$result = mysqli_query($koneksi, "SELECT MAX(SUBSTRING_INDEX(kode_barang, '-', -1)) AS max_id FROM barang WHERE tipe = '$tipe'");
$row = mysqli_fetch_assoc($result);
$max_id = ($row['max_id'] !== null) ? $row['max_id'] + 1 : 1;
$kode_barang = $tipe_id . '-' . $max_id;

// Insert data into the table without specifying the id column
$query = "INSERT INTO barang (nama_barang, tipe, stok, status, kode_barang) VALUES ('$nama', '$tipe', '$stok', '$status', '$kode_barang')";
mysqli_query($koneksi, $query);

header("location:index.php");
?>
