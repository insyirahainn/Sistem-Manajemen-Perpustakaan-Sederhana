<?php
$koneksi = mysqli_connect("localhost","root","","perpustakaan");

//Mengambil idbuku
$idbuku = $_GET['idbuku'];

// Mengecek idbuku yang dipanggil
$query_check = "SELECT idbuku, stock FROM buku WHERE idbuku = '$idbuku'";
$result_check = mysqli_query($koneksi, $query_check);

if (mysqli_num_rows($result_check) > 0) {
    // Buku ditemukan maka menambahkan buku
    $query_update = "UPDATE buku SET stock = stock + 1 WHERE idbuku = '$idbuku'";
    $result_update = mysqli_query($koneksi, $query_update);

    if ($result_update) {
       echo "<script>alert('Stock buku berhasil ditambahkan'); window.location='databasebuku.php';</script>";
    }

} 

$koneksi->close();

?>
