<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PERPUSTAKAAN</title>
</head>
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
		margin-top: 25px;
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
		background: #ffffff80;
		color: grey;
		font-family: sans-serif;
		font-weight: bold;
		font-size: 70%;
		border-radius: 10px;
		width: 300px;
		height: 500px;
		margin: 0 auto 10px;
		padding: 10px;
	}
	hr {
		border-top: 1px solid #ffffff;
		padding-top: 0.1em;
		margin-top: 0em;
		margin-bottom: 40px;
	}
	
	.img1 {
		margin-top: 25px;
		margin-bottom: 10px;
		margin-left: 20px;
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
		color: black;
		background-color: #00000025;
		border-radius: 2px;
		border: 1px solid grey;
		font-size: 12px;
	}
	.submitreg {
		background-color: #2072AF;
		font-size: 100%;
		height: 30px;
		color: white;
		border-radius: 4px;
		width: 100px;
		margin-top: 10px;
		border: 1px;
		margin-bottom: 40px;
	}
	.submitreg:hover {
		background-color: #0047AB;
	}

	input {
		border: 0;
		height: 30px;
		margin-bottom: 15px;
		width: 200px;
	}
	.reg {
		margin-top: 5px;
		font-size: 10px;

	}
	.cpr {
		margin-top: 150px;
		font-size: 10px;
		color: black;
	}


</style>
<body>
	<img class="img2" src="gambar/bpmp.png">
	<img class="img2" src="gambar/LogoPendidikan.png">
	<br>
	<h3 class="ins">PERPUSTAKAAN UMUM BALAI PENJAMINAN MUTU PENDIDIKAN<br>PROVINSI BANGKA BELITUNG</h3>
	<marquee class="walktext" behaviour="alternate" direction="left" scrollamount="6">BPMP Kepulauan Bangka Belitung, Jl. Pulau Bangka, Padang Baru, Kec. Pangkalan Baru, Kabupaten Bangka Tengah, Kepulauan Bangka Belitung 33684</marquee>
	<center>
	<div>
		<form method="post" action="tambah_aksiakun.php">
			<table>
				<center><h2>Registrasi</center></h2>
				<hr>
				<tr><td>Nama</td></tr>
				<tr><td><input type="text" class="input" name="nama" placeholder="Masukkan nama lengkap anda" required=""></td></tr>
				<tr><td>Username</td></tr>
				<tr><td><input type="text" class="input" name="username" placeholder="Masukkan username anda" required=""></td></tr>
				<tr><td>Email</td></tr>
				<tr><td><input type="text" class="input" name="email" placeholder="Masukkan email anda" required=""></td></tr>
				<tr><td>Password</td></tr>
				<tr><td><input type="password" class="input" name="password" placeholder="Masukkan password anda" required=""></td></tr>
				<tr><td><input type="submit" class="submitreg" name="login" value="Daftar"></td></tr>
				<tr><td>Sudah punya akun? </td></tr>
				<tr><td><a href="index.php">Login</a></td></tr>
			</table>
		</form>
	</div>
	<p class="cpr">Copyright &copy; 2023 - BPMP Provinsi Kepulauan Bangka Belitung | All Right Reserved.</p>
	</center>
</body>
</html>