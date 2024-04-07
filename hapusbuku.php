<?php
// koneksi database
include 'koneksi.php';
 

$idbuku = $_GET['idbuku'];
 
// menghapus data dari database dengan prepared statement
$stmt = $koneksi->prepare("DELETE FROM buku WHERE idbuku = ?");
$stmt->bind_param("d", $idbuku);
$stmt->execute();
$stmt->close();
 
// mengalihkan halaman kembali ke index.php
header("location:databasebuku.php");
exit;
?>