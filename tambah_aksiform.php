<?php
// koneksi database
include "functionglobal.php";
$koneksi = mysqli_connect("localhost","root","","perpustakaan");

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$id_form = uniqid();
$jd_buku = $_POST['jd_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

// Fungsi untuk mengurangi stok buku dalam database
function pinjamBuku($idbuku, $koneksi) {
    // Mengurangi stok buku dalam database
    $query = "UPDATE buku SET stock = stock - 1 WHERE idbuku = $idbuku";
    $result = $koneksi->query($query);
}

// Mengambil nilai judul buku dari form
$jd_buku = $_POST['jd_buku'];

// Mengecek apakah judul buku ada dalam database
$query_check = "SELECT idbuku, stock FROM buku WHERE jdl_buku = '$jd_buku'";
$result_check = $koneksi->query($query_check);

if ($result_check->num_rows > 0) {
    $row = $result_check->fetch_assoc();
    $idbuku = $row['idbuku'];
    $stock = $row['stock'];

    if ($stock > 0) {
        // Mengecek apakah sudah meminjam 2 buku pada hari yang sama
        $query_check_peminjaman = "SELECT COUNT(*) AS total_peminjaman FROM form_pinjam WHERE tgl_pinjam = CURDATE()";
        $result_check_peminjaman = $koneksi->query($query_check_peminjaman);
        $row_peminjaman = $result_check_peminjaman->fetch_assoc();
        $total_peminjaman = $row_peminjaman['total_peminjaman'];

        if ($total_peminjaman < 2) {
            // Memanggil fungsi pinjamBuku untuk mengurangi stok buku
            pinjamBuku($idbuku, $koneksi);

            // menginput data ke database
            mysqli_query($koneksi,"INSERT INTO form_pinjam (nama, telp, id_form, jd_buku, tgl_pinjam, tgl_kembali) VALUES ('$nama','$telp','$id_form','$jd_buku','$tgl_pinjam','$tgl_kembali')");

            echo "<script> alert ('Buku berhasil dipinjam! Silahkan mengambil buku Anda.'); window.location.href='formpinjam.php'; </script>";
            $koneksi->close();
        } else {
            // Menampilkan alert jika sudah meminjam 2 buku pada hari yang sama
            echo "<script> alert ('Maaf, Anda sudah meminjam 2 buku pada hari ini.'); window.location.href='formpinjam.php'; </script>";
        }
    } else {
        // Menampilkan alert jika stok buku = 0
        echo "<script> alert ('Maaf, stock buku sudah habis.'); window.location.href='formpinjam.php'; </script>";
    }
} else {
    // Menampilkan alert jika judul buku tidak ditemukan
    echo "<script> alert ('Tidak bisa meminjam buku. Judul buku tidak ditemukan.'); window.location.href='formpinjam.php'; </script>";
    $koneksi->close();
}
?>
