<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];




$stmt = $koneksi->prepare("UPDATE pengunjung SET nama=?, username=?, password=? WHERE email=?");
$stmt->bind_param("ssss", $nama, $username, $password, $email);

// execute the statement
$stmt->execute();

// mengalihkan halaman kembali
header("location:databasepengunjung.php");
?>