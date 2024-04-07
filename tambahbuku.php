<!DOCTYPE html>
<html>
<head>
	<title>Buku Perpustakaan</title>
	<style>
		a {
			text-decoration: none;
			color: white;
		}
		.tableform {
			margin: 0px;
			width: 481px ;
			height: 50px;
			background-color: ;
			font-size: 13px;
			font-weight: bold;
			color: #dee2e6;
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
		.tambahbuku {
			margin-left: 1px;
			margin-top: 20px;
			padding: 7px 24px;
			border-radius: 1px;
			background-color: #adb5bd;
			color: white;
			font-weight: bold;
			box-shadow: 0 .5rem 1.0rem rgba(0, 0, 0,.3);
		}
		.tambahbuku:hover {
			background-color: #8d99ae;
		}
	</style>
</head>
<body class="baseform">
	<center><h2 class="jdformbase">DATA BUKU PERPUSTAKAAN</h2>
	<br/>
	<a href="databasebuku.php">KEMBALI</a>
	<br/>
	<br/>
	
	<form method="post" action="tambahaksibuku.php" id="formpinjam" enctype="multipart/form-data">
			<table class="tableform">
				<hr>
				<tr><td>Judul Buku</td><td><input type="text" class="inpform" name="jdl_buku" required=""></td></tr>
				<tr><td>ID Buku</td><td><input type="text" class="inpform" name="idbuku" required=""></td></tr>
				<tr><td>Penulis</td><td><input type="text" class="inpform" name="penulis" required=""></td></tr>
				<tr><td>Penerbit</td><td><input type="text" class="inpform" name="penerbit" required=""></td></tr>
				<tr><td>ISBN</td><td><input type="text" class="inpform" name="ISBN" required=""></td></tr>
				<tr><td>Bahasa</td><td><input type="text" class="inpform" name="bahasa" required=""></td></tr>
				<tr><td>Deskripsi</td><td><input type="text" class="inpform" name="deskripsi" required=""></td></tr>
				<tr><td>Edisi</td><td><input type="text" class="inpform" name="edisi" required=""></td></tr>
				<tr><td>Tahun</td><td><input type="text" class="inpform" name="tahun" required=""></td></tr>
				<tr><td>Stock</td><td><input type="text" class="inpform" name="stock" required=""></td></tr>
				<tr><td>Sinopsis</td><td><textarea rows="4" cols="50" name="sinopsis" required=""></textarea></td></tr>
				<tr><td>Sampul</td><td><input type="file" class="inpform" name="sampul" required=""></td></tr>
			</table>
			<input type="submit" class="tambahbuku" name="pinjam_buku" value="SIMPAN">
			<input type="reset" class="tambahbuku" name="reset" value="HAPUS">
			</form>
</body>
</html>
</center>