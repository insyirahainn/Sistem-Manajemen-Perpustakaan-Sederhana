<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data nim yang di kirim dari url
$password = $_GET['password'];
 
// menghapus data dari database dengan prepared statement
$stmt = $koneksi->prepare("DELETE FROM admin WHERE password = ?");
$stmt->bind_param("s", $password);
$stmt->execute();
$stmt->close();
 
// mengalihkan halaman kembali ke index.php
header("location:databaseusnpw.php");
exit;
?>