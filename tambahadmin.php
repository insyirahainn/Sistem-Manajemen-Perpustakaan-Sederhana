<!DOCTYPE html>
<html>
<head>
	<title>Admin Perpustakaan</title>
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
		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 3px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		.tambahadmin {
			margin-top: 70px;
			padding: 7px 24px;
			border: ;
			border-radius: 1px;
			background-color: #adb5bd;
			color: white;
			font-weight: bold;
			box-shadow: 0 .5rem 1.0rem rgba(0, 0, 0,.3);
		}
		.tambahadmin:hover {
			background-color: #8d99ae;
		}
	</style>
</head>
<body class="baseform">
	<center><h2 class="jdformbase">DATA ADMIN</h2>
	<br/>
	<a href="databaseusnpw.php">KEMBALI</a>
	<br/>
	<br/>
	
	<form method="post" action="tambahaksiadmin.php" id="formpinjam">
			<table class="tableform">
				<hr>
				<tr><td>Username</td><td><input type="text" class="inpform" name="username"></td></tr>
				<tr><td>Password</td><td><input type="password" class="inpform" name="password"></td></tr>
			</table>
			<input type="submit" class="tambahadmin" name="pinjam_buku" value="SIMPAN">
			<input type="reset" class="tambahadmin" name="reset" value="HAPUS">
			</form>
</body>
</html>
</center>