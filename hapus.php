<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data nim yang di kirim dari url
$id_form = $_GET['id_form'];
 
// menghapus data dari database dengan prepared statement
$stmt = $koneksi->prepare("DELETE FROM form_pinjam WHERE id_form = ?");
$stmt->bind_param("s", $id_form);
$stmt->execute();
$stmt->close();
 
// mengalihkan halaman kembali ke index.php
header("location:databaseform.php");
exit;
?>