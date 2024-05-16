<?php
include 'koneksi.php';
$id = $_POST['id'];
$stok = $_POST['stok-barang'];
$status = $_POST['status-barang'];

mysqli_query($koneksi,"update barang set stok='$stok', status='$status' where id='$id'");
header("location:index.php");
?>