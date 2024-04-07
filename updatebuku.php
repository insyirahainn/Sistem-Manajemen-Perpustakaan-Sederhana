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
$stock = $_POST['stock'];
$sinopsis = $_POST['sinopsis'];
$sampul = $_FILES['sampul']['name'];


// mengecek apakah file foto sudah diupload
if (strlen($sampul) > 0) {
	// upload file foto ke folder buku
	move_uploaded_file($_FILES['sampul']['tmp_name'], "buku/".$sampul);

	// update nama file foto pada database
	$stmt = $koneksi->prepare("UPDATE buku SET jdl_buku=?, penulis=?, penerbit=?, ISBN=?, bahasa=?, deskripsi=?, edisi=?, tahun=?, stock=?, sinopsis=?, sampul=? WHERE idbuku=?");
	$stmt->bind_param("sssdssdsdssd", $jdl_buku, $penulis, $penerbit, $ISBN, $bahasa, $deskripsi, $edisi, $tahun, $stock, $sinopsis, $sampul, $idbuku);
} else {
	
	$stmt = $koneksi->prepare("UPDATE buku SET jdl_buku=?, penulis=?, penerbit=?, ISBN=?, bahasa=?, deskripsi=?, edisi=?, tahun=?, stock=?, sinopsis=? WHERE idbuku=?");
	$stmt->bind_param("sssdssdsdsd", $jdl_buku, $penulis, $penerbit, $ISBN, $bahasa, $deskripsi, $edisi, $tahun, $stock, $sinopsis, $idbuku);
}

// execute the statement
$stmt->execute();

// mengalihkan halaman kembali
header("location:databasebuku.php");
?>