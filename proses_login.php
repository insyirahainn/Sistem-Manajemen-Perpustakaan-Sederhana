<?php
session_start(); // memulai session
include "koneksi.php"; // memanggil file koneksi.php
$nama = $_POST['nama'];
// $username = $_POST['username']; // mengambil data password dari form login 
$email = $_POST['email']; // mengambil data password dari form login

$login = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE email='$email'"); // query untuk memeriksa apakah data username dan password sesuai dengan data di database
$cek = mysqli_num_rows($login); // menghitung jumlah data yang ditemukan
if($cek > 0){ // jika data ditemukan
    $data = mysqli_fetch_assoc($login); // mengambil data user
    $_SESSION['nama'] = $nama; // menyimpan data username ke dalam session
    $_SESSION['status'] = "login"; // menyimpan status login ke dalam session
    header("location:bukuberanda.php"); // mengarahkan user ke halaman index.php
}else{ // jika data tidak ditemukan
    echo "<script>alert('Harap memasukkan data dengan benar');window.location='index.php'</script>";
}
?>
