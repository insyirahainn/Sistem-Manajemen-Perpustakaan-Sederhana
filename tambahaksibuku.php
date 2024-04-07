<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$jdl_buku = $_POST['jdl_buku'];
$idbuku = $_POST['idbuku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$ISBN = $_POST['ISBN'];
$bahasa = $_POST['bahasa'];
$deskripsi = $_POST['deskripsi'];
$edisi = $_POST['edisi'];
$tahun = $_POST['tahun'];
$sampul = $_FILES['sampul']['name'];
$stock = $_POST['stock'];
$sinopsis = $_POST['sinopsis'];


$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['sampul']['name'];
$ukuran = $_FILES['sampul']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['sampul']['tmp_name'], 'buku/'.$rand.'_'.$filename);
 
		// menginput data ke database
		mysqli_query($koneksi,"INSERT INTO buku VALUES('$jdl_buku','$idbuku','$penulis','$penerbit','$ISBN','$bahasa','$deskripsi','$edisi','$tahun','$xx','$stock','$sinopsis')");
 
		// mengalihkan halaman kembali ke index.php
		header("location:databasebuku.php");

	}
	else {
		header("location:tambahbuku.php?alert=gagal_ukuran");
	}
}
?>
