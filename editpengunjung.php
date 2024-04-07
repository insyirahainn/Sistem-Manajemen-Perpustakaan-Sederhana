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
		input[type=text], input[type=number], input[type=password] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 3px;
			margin-bottom: 10px;
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
		}
		input[type=submit]:hover {
			background-color: #00000040;
		}
	</style>
</head>
<body class="baseform">
	<center><h2 class="jdformbase">DATA PENGUNJUNG</h2>
	<br/>
	<a href="databasepengunjung.php">KEMBALI</a>
	<br/>
	<br/>
	<h3 class="jdformbase"></h3>
	<?php
	include 'koneksi.php';
	$email = $_GET['email'];
	$data = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE email='$email'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form class="formedit" method="post" action="updatepengunjung.php" enctype="multipart/form-data">
			<label>Nama</label>
			<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $d['username']; ?>">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $d['email']; ?>">	
			<label>Password</label>
			<input type="password" name="password" value="<?php echo $d['password']; ?>">			


			<input type="submit" value="SIMPAN">
		</form>
		<?php 
	}
	?>
</body>
</html>
</center>