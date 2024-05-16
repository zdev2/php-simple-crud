<?php 
$host = "localhost";
$username = "root";
$password = "xxx";
$database = "crud";

// create koneksi$koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// check koneksi$koneksi
if ($koneksi->connect_error) {
    die("koneksi$koneksi failed: " . $koneksi->connect_error);
} 
echo "Koneksi berhasil.";