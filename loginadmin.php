<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssall.css">
	<title>PERPUSTAKAAN</title>
<style type="text/css">
	body {
		background: 
		linear-gradient(
			skyblue,
			transparent
		),
		linear-gradient(
			-45deg,
			black,
			transparent
		),
		linear-gradient(
			45deg,
			black,
			transparent
		);

		background-blend-mode: screen;
		background-attachment: fixed;
		
	}

	.ins {
		margin-top: 40px;
		margin-bottom: 20px;
		text-align: center;
		font-family: arial black;
	}
	.walktext {
		margin-top: 20px;
		margin-bottom: 50px;
		text-align: center;
		font-family: times new roman;
		font-weight: 500;
	}
	div {
		background: #69696940;
		color: white;
		font-family: sans-serif;
		font-weight: bold;
		font-size: 90%;
		border-radius: 10px;
		width: 300px;
		height: 400px;
		margin: 0 auto 10px;
	}
	img {
		margin-top: 25px;
		margin-bottom: 30px;
		margin-left: 20px;
		height: 130px;
		width: 5px 500px 5px;
	}
	.input {
		color: white;
		background-color: #00000085;
		border-radius: 2px;
		border: 1px solid grey;
	}
	.submitlog {
		background-color: #9F817090;
		height: 30px;
		color: white;
		border-radius: 4px;
		width: 100px;
		margin-top: 10px;
	}
	.submitlog:hover {
		background-color: #9F817080;
	}
	input {
		border: 0;
		height: 30px;
		margin-bottom: 15px;
	}
		.cpr {
		margin-top: 50px;
		font-size: 10px;
		color: white;
	}
</style>
	<script>
		function validateForm() {
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if (username == "" || password == "") {
				alert("Username dan password tidak boleh kosong");
				return false;
			}
		}
	</script>

</head>
<body>
	<h3 class="ins">PERPUSTAKAAN UMUM BALAI PENJAMINAN MUTU PENDIDIKAN<br>PROVINSI BANGKA BELITUNG</h3>
	<marquee class="walktext" behaviour="alternate" direction="left" scrollamount="6">BPMP Kepulauan Bangka Belitung, Jl. Pulau Bangka, Padang Baru, Kec. Pangkalan Baru, Kabupaten Bangka Tengah, Kepulauan Bangka Belitung 33684</marquee>

	<center>
	<div>
		<form method="post" action="proses_logadmin.php" onsubmit="return validateForm()">
			<table border="0">
				<tr><td><img src="gambar/bpmp.png"></td></tr>
				<tr><td>Username</td></tr>
				<tr><td><input type="text" class="input" name="username"></td></tr>
				<tr><td>Password</td></tr>
				<tr><td><input type="password" class="input" name="password"></td></tr>
				<tr><td><center><input type="submit" class="submitlog" name="login" value="Login"></center></td></tr>
			</table>
		</form>
	</div>
		<p class="cpr">Copyright &copy; 2023 - BPMP Provinsi Kepulauan Bangka Belitung | All Right Reserved.</p>
	</center>
</body>
</html>