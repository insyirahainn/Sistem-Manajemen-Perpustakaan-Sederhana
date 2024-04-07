<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data nim yang di kirim dari url
$email = $_GET['email'];
 
// menghapus data dari database dengan prepared statement
$stmt = $koneksi->prepare("DELETE FROM pengunjung WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->close();
 
// mengalihkan halaman kembali ke index.php
header("location:databasepengunjung.php");
exit;
?>