<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_form = $_POST['id_form'];
$nama = $_POST['nama'];
$id = $_POST['id'];
$telp = $_POST['telp'];
$jd_buku = $_POST['jd_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];


$stmt = $koneksi->prepare("UPDATE form_pinjam SET nama=?, id=?, telp=?, jd_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_form=?");
$stmt->bind_param("sssssss", $nama, $id, $telp, $jd_buku, $tgl_pinjam, $tgl_kembali, $id_form);

// execute the statement
$stmt->execute();

// mengalihkan halaman kembali
header("location:databaseform.php");
?>