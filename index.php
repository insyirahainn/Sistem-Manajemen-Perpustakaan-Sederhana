<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>PERPUSTAKAAN</title>
<style type="text/css">
	body {
    background:
        linear-gradient(
            skyblue,
            rgba(255,255,255,0)
        ),
        linear-gradient(
            black,
            rgba(0,0,0,0) 
        );
   		background-blend-mode:screen;
	}
	.ins {
		margin-top: 30px;
		margin-bottom: 20px;
		text-align: center;
		font-family: arial black;
	}
	.walktext {
		margin-top: 12px;
		margin-bottom: 25px;
		text-align: center;
		font-family: times new roman;
		font-weight: 500;
	}
	div {
		/*background: #69696940;*/
		background: #ffffff80;
		color: grey;
		font-family: sans-serif;
		font-weight: bold;
		font-size: 90%;
		border-radius: 10px;
		width: 300px;
		height: 420px;
		margin: 0 auto 10px;
	}
	div table {
		font-size: 90%;
	}
	.img1 {
		margin-top: 25px;
		margin-bottom: 10px;
		margin-left: 40px;
		height: 130px;
		width: 5px 500px 5px;
	}
	.img2 {
		float: left;
		margin: left;
		display: block;
		height: 38px;
		width: 38px;
		padding-top: 5px;
		padding-right: 0px;
		padding-left: 12px;
	}
	.input {
		color: white;
		background-color: #00000085;
		border-radius: 4px;
		border: 1px solid grey;
		width: 200px;
		font-size: 100%;

	}
	.submitlog {
		/*background-color: #318CE7;*/
		background-color: #2072AF;
		height: 30px;
		color: white;
		border-radius: 4px;
		width: 200px;
		margin-top: 10px;
		border: 1px;
	}
	.submitlog:hover {
		background-color: #0047AB;
	}
	input {
		border: 0;
		height: 30px;
		margin-bottom: 15px;
	
		color: white;
	}
	.input {
		background-color: #00000025;
		color: black;
	}
	.reg {
		margin-top: 5px;
		font-size: 10px;

	}
	.cpr {
		margin-top: 100px;
		font-size: 10px;
		color: black;
	}


</style>
	<script>
		function validateForm() {
			var nama = document.getElementById("nama").value;
			var NIP = document.getElementById("NIP").value;
			var email = document.getElementById("email").value;
			if (nama == "" || NIP == "" || email == "") {
				alert("Data tidak boleh kosong");
				return false;
			}
		}
	</script>

</head>
<body>
	<img class="img2" src="gambar/bpmp.png">
	<img class="img2" src="gambar/LogoPendidikan.png">
	<br>
	<h3 class="ins">PERPUSTAKAAN UMUM BALAI PENJAMINAN MUTU PENDIDIKAN<br>PROVINSI BANGKA BELITUNG</h3>
	<marquee class="walktext" behaviour="alternate" direction="left" scrollamount="6">BPMP Kepulauan Bangka Belitung, Jl. Pulau Bangka, Padang Baru, Kec. Pangkalan Baru, Kabupaten Bangka Tengah, Kepulauan Bangka Belitung 33684</marquee>

	<center>
	<div>
		<form method="post" action="proses_login.php" onsubmit="return validateForm()">
		<!--<form action="proses_logadmin.php" method="POST">-->
			<table>
				<tr><td><img class="img1" src="gambar/profil.png"></td></tr>
				<tr><td>Nama</td></tr>
				<tr><td><input type="text" class="input" name="nama" required=""></td></tr>
				<tr><td>Email</td></tr>
				<tr><td><input type="text" class="input" name="email" required=""></td></tr>
				<!--<tr><td>NIP</td></tr>
				<tr><td><input type="text" class="input" name="NIP"></td></tr>-->
				<tr><td><center><input type="submit" class="submitlog" name="login" value="Login"></center></td></tr>
				<tr><td><p class="reg">Belum punya akun?&nbsp;<a href="register.php">Daftar</a></p></td></tr>
			</table>
		</form>
	</div>
		<p class="cpr">Copyright &copy; 2023 - BPMP Provinsi Kepulauan Bangka Belitung | All Right Reserved.</p>
	</center>
</body>
</html>