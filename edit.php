<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
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
		}
		input[type=text], input[type=number] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 3px;
			margin-bottom: 15px;
			box-sizing: border-box;
		}
		input[type=date] {
			width: 22.5%;
			padding: 5px;
			border: 1px solid #ddd;
			border-radius: 3px;
			margin-bottom: 15px;
			box-sizing: border-box;
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
	<center><h2 class="jdformbase">DATA PEMINJAMAN BUKU</h2>
	<br/>
	<a href="databaseform.php">KEMBALI</a>
	<br/>
	<br/>
	<h3 class="jdformbase"></h3>
	<?php
	include 'koneksi.php';
	$id_form = $_GET['id_form'];
	$data = mysqli_query($koneksi, "SELECT * FROM form_pinjam WHERE id_form='$id_form'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form class="formedit" method="post" action="update.php" enctype="multipart/form-data">
			<label>ID Form</label>
			<input type="text" name="id_form" value="<?php echo $d['id_form']; ?>">
			<label>Nama</label>
			<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
			<!--<label>NIP</label>
			<input type="text" name="id" value="<?php echo $d['id']; ?>">-->
			<label>No Telepon</label>
			<input type="text" name="telp" value="<?php echo $d['telp']; ?>">
			<label>Judul Buku</label>
			<input type="text" name="jd_buku" value="<?php echo $d['jd_buku']; ?>">
			<label>Tanggal Peminjaman</label>
			<input type="date" name="tgl_pinjam" value="<?php echo $d['tgl_pinjam']; ?>">
			<label>Tanggal Kembali</label>
			<input type="date" name="tgl_kembali" value="<?php echo $d['tgl_kembali']; ?>">


			<input type="submit" value="SIMPAN">
		</form>
		<?php 
	}
	?>
</body>
</html>
</center>