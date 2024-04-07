<!DOCTYPE html>
<html>
<head>
	<title>EDIT BUKU</title>
	<style>
		a {
			text-decoration: none;
			color: white;
		}
		.jdformbase {
	      margin-top: 50px;
	      color: #FEFEFA;
	      font-family: arial black;
	      font-size: 18px;
	      margin-bottom: 40px;
	    }
		.baseform{
	      background-color: #1e6091;
	    }
		h2 {
			text-align: center;
		}
		.formedit {
			width: 40%;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
			color: white;
			font-weight: bold;
			text-align: left;
			padding-bottom: 10px;
			font-size: 14px;
		}
		input[type=text], input[type=number], input[type=file] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 3px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 3px;
			margin-bottom: 10px;
			box-sizing: border-box;
			height: 200px;
			text-align: justify;
			font-family: sans-serif;
		}
		input[type=submit] {
			background-color: #00000070;
			color: #fff;
			padding: 10px;
			margin-top: 15px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			width: 100%;
			box-sizing: border-box;
			font-weight: bold;
		}
		input[type=submit]:hover {
			background-color: #00000040;
		}
	</style>
</head>
<body class="baseform">
	<center><h2 class="jdformbase">DATA BUKU PERPUSTAKAAN</h2>
	<br/>
	<a href="databasebuku.php">KEMBALI</a>
	<br/>
	<br/>
	<h3 class="jdformbase"></h3>
	<?php
	include 'koneksi.php';
	$idbuku = $_GET['idbuku'];
	$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$idbuku'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form class="formedit" method="post" action="updatebuku.php" enctype="multipart/form-data">
			<label>Judul Buku</label>
			<input type="text" name="jdl_buku" value="<?php echo $d['jdl_buku']; ?>">
			<label>ID Buku</label>
			<input type="text" name="idbuku" value="<?php echo $d['idbuku']; ?>">
			<label>Penulis</label>
			<input type="text" name="penulis" value="<?php echo $d['penulis']; ?>">
			<label>Penerbit</label>
			<input type="text" name="penerbit" value="<?php echo $d['penerbit']; ?>">
			<label>ISBN</label>
			<input type="text" name="ISBN" value="<?php echo $d['ISBN']; ?>">
			<label>Bahasa</label>
			<input type="text" name="bahasa" value="<?php echo $d['bahasa']; ?>">
			<label>Deskripsi</label>
			<input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>">
			<label>Edisi</label>
			<input type="text" name="edisi" value="<?php echo $d['edisi']; ?>">
			<label>Tahun</label>
			<input type="text" name="tahun" value="<?php echo $d['tahun']; ?>">
			<label>Stock</label>
			<input type="text" name="stock" value="<?php echo $d['stock']; ?>">
			<label>Sinopsis</label>
			<textarea rows="4" cols="50" name="sinopsis"><?php echo $d['sinopsis']; ?></textarea>
			<label>Sampul Buku</label>
			<input type="file" name="sampul"/> <?php echo $d['sampul']; ?>


			<input type="submit" value="SIMPAN">
		</form>
		<?php 
	}
	?>
</body>
</html>
</center>