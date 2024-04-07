<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
// $username = $_POST['username'];
$email = $_POST['email'];
// $password = $_POST['password'];

// menginput data ke database
// mysqli_query($koneksi,"insert into pengunjung values('$nama','$username','$email','$password')");
mysqli_query($koneksi,"insert into pengunjung values('$nama','$NIP','$email')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>