<?php
session_start();
include "functionglobal.php";
$books = query("SELECT * FROM buku");


if ($_SESSION['status'] != "login") {
  header("location:index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>BUKU PERPUSTAKAAN</title>

<style type="text/css">
* {
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}

.box-container div {
	margin: 0;
	padding: 0;
}

a {
	color: inherit;
	text-decoration: 0;
}

.catalog .container h3 {
	font-family: arial black;
	color: #536878;
	padding-top: 1px;
	padding-bottom: 40px;
}

.detail-buku {
	max-width: 100%;
	height: auto;
}

.box {
	border-radius: 0px;
	padding: 0px;
	margin: auto;
	background-color: white;
	color: black;
	padding-bottom: 0px;
	margin-bottom: 20px;
}

button.btnbuku {
	padding-bottom: 0px;
	height: auto;
	margin: auto;
}

.btnbuku {
	border: 1px solid grey;
	border-radius: 4px;
	padding: 4px 5px;
}

.btnbuku:hover {
	background-color: #dbd7d2;
	border-radius: 8px;
}

.jdbuku {
	padding-top: 10px;
	padding-bottom: 10px;
	color: black;
	font-size: 85%;
	font-weight: bold;
	text-align: center;
}

.btn-detailbuku {
	max-width: 16%;
}

.img2 {
	float: left;
	margin: left;
	display: block;
	height: 38px;
	width: 38px;
	padding-top: 10px;
	padding-right: 0px;
	padding-left: 12px;
}

.dropbtn {
	background-color: #ffffff20;
	color: white;
	padding-top: 0px;
	padding: auto;
	margin: auto;
	font-size: 16px;
	border: none;
	cursor: pointer;
	transition: all .2s ease;
	height: 25px;
}

.img4 {
	float: left;
	margin: left;
	display: block;
	height: 38px;
	width: 38px;
	padding-top: 0px;
	padding-right: 0px;
	padding-left: 0px;
}

.dropdown {
	position: relative;
	display: inline-block;
	margin-top: 10px;
}

.dropdown-content {
	display: none;
	position: absolute;
	right: 0;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}

.dropdown-content a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	font-size: 70%;
	font-weight: bold;
}

.dropdown-content a:hover {
	background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
	display: block;
}

.dropdown:hover .dropbtn {
	background-color: #ffffff50;
}

.subbtn {
	border: 2px;
	padding: 18px;
	background-color: #eaecee;
	text-align: left;
	font-weight: bold;
	color: #17202a;
	width: 100%;
	margin-bottom: 20px;
	font-size: 15px;
}

.subbtn:hover {
	background-color: #00000030;
	color: white;
	cursor: pointer;
}

a {
	text-decoration: none;
	font-weight: bold;
}

.active {
	display: flex;
	flex-direction: column;
	border: 2px;
	padding: 18px;
	text-align: left;
	font-weight: bold;
	width: 100%;
	margin-bottom: 20px;
	font-size: 15px;
	background-color: #00000030;
	color: white;
	cursor: pointer;
}
.subbtn {
	display: flex;
	flex-direction: column;
	border: 2px;
	padding: 18px;
	text-align: left;
	font-weight: bold;
	width: 100%;
	margin-bottom: 20px;
	font-size: 15px;
	background-color: #eaecee;
	color: #17202a;
	cursor: pointer;
}
.container {
	width: 95%;
	margin: 0 auto;
}

.container:after {
	content: " ";
	display: block;
	clear: both;
}

.ins {
	margin-top: 30px;
	margin-bottom: 20px;
	text-align: center;
	font-family: arial black;
}

.walktxtper {
	margin-top: 12px;
	margin-bottom: 30px;
	text-align: center;
	font-family: times new roman;
	font-weight: 500;
}

header {
	background-color: #1e6091;
	height: 190px;
	margin-left: 0px;
}

header .container {
	font-weight: bold;
}

.img3 {
	height: 130px;
	width: 130px;
	margin: 60px 70px;
	margin-bottom: 25px;
}

.greeting {
	margin-top: 0px;
	text-align: center;
	margin-bottom: 100px;
	color: #1d3557;
	font-size: 17px;
}

.sidebar {
	height: 700px;
	position: relative;
	display: flex;
	align-items: stretch;
	min-width: 20%;
	float: left;
}

.sidebar:after {
	content: " ";
	display: block;
	clear: both;
}

.sidebar h2 {
	color: #fffff0;
	font-size: 35px;
	padding: 5px;
}

section {
	padding: 50px 0;
}

section .sidebar {
	float: left;
	display: flex;
	align-items: stretch;
	min-width: 40%;
}

section .catalog {
	float: right;
	display: flex;
	align-items: stretch;
	max-width: 60%;
}

section h3 {
	text-align: center;
	padding: 20px 0;
	color: #a52a2a;
}

section h2 {
	text-align: center;
	padding: 20px 0;
	color: #a52a2a;
}

.about p {
	margin-left: 60px;
	margin-right: 60px;
	text-align: center;
	color: #666;
	word-spacing: 2px;
	line-height: 25px;
}

.catalog {
	background-color: #1e609199;
	display: flex;
}

.catalog .box-container .box .image {
	padding-top: 1rem;
	padding-bottom: 4rem;
	width: 30px 30px;
}

.catalog .box-container {
	display: flex;
	flex-wrap: wrap;
	gap: 2.5rem;
	padding: auto;
	padding: 0px;
	margin-right: 0;
}

.catalog .box-container .box {
	box-shadow: 0 .5rem 1.0rem rgba(0,0,0,.2);
	border-radius: .5rem;
	position: relative;
	padding-bottom: 0px;
}

.catalog .box-container div .box {
	padding-bottom: 0px;
}

.box-container .box .image .icons p {
	font-size: 80%;
}

.box .col-4 {
	width: 25%;
	padding: 20px;
	box-sizing: border-box;
	float: left;
}

.box .col-4 h4 {
	margin: 10px 0;
}

footer {
	padding: 10px 10px;
	padding-top: px;
	background-color: #17202a;
	color: white;
	text-align: center;
	font-size: 10px;
}

button img {
	justify-content: flex-start;
}

.image {
	padding-bottom: 0px;
}

button {
	cursor: pointer;
}

@media (max-width: 800px) {
	header .walktxtper {
		font-size: 13px;
	}

	.container .header h3 .ins {
		font-size: 50px;
	}

	.img3 {
		margin: auto;
		display: flex;
		align-items: center;
		width: 94px;
		height: 90px;
	}

	.box-container {
		width: 100%;
	}

	.catalog .box-container {
		gap: 1.7rem;
		padding-left: 5%;
	}

	.greeting {
		font-size: 15px;
	}

	.sidebar {
		width: 25%;
	}

	.sidebar {
		width: 30%;
	}

	.sidebar h3 {
		font-size: 70%;
	}

	.sidebar li a button {
		font-size: 70%;
	}

	.leftside {
		width: 100%;
	}

	.header h3 {
		font-size: 14px;
		padding: 20px 3px;
	}

	.box {
		margin: auto;
		display: flex;
		align-items: center;
	}
}
#cari {
	padding: 10px;
	border-radius: 6px;
}
#btncari {
	padding: 10px;
	border-radius: 4px;
}
</style>
</head>
<body>

	<header>
		<div class="container">
			<div class="header">
				<div class="dropdown" style="float:right;">
				  <button class="dropbtn"><span class="material-symbols-outlined">density_small</span></button>
				  <div class="dropdown-content">
				  <a href="loginadmin.php">Admin</a>
				  <a href="bukuberanda.php">Beranda</a>
				  <a href="about.php">About</a>
				  <a href="logout.php">Logout</a>
				  </div>
				</div>

				<img class="img2" src="gambar/bpmp.png">
				<img class="img2" src="gambar/LogoPendidikan.png">
				<br>
				<h3 class="ins">PERPUSTAKAAN UMUM BALAI PENJAMINAN MUTU PENDIDIKAN<br>PROVINSI BANGKA BELITUNG</h3>
				<marquee class="walktxtper" behaviour="alternate" direction="left" scrollamount="6">BPMP Kepulauan Bangka Belitung, Jl. Pulau Bangka, Padang Baru, Kec. Pangkalan Baru, Kabupaten Bangka Tengah, Kepulauan Bangka Belitung 33684</marquee>
			</div>
		</div>
	</header>


	<section class=" sidebar" >
		<div class="leftside">
			<img class="img3" src="gambar/profil.png">	
			<h3 class="greeting">Selamat Datang,<br><?php echo $_SESSION['nama']; ?>!</h3>
			<ul>
				<li>
					<td><a href="bukuberanda.php"><input type="submit" value="Daftar Buku" class="active"></a></td>
					<td><a href="formpinjam.php"><input type="submit" value="Formulir" class="subbtn"></a></td>
				</li>
			</ul>
		</div>
	</section>

	<section class="catalog">
		<div class="container">
			<div class="box-container">

			<?php foreach($books as $book): ?>		
			<div>
			  <div>
					<div class="box">
						<a href="detailbuku.php?id=<?php echo $book["idbuku"] ?>">
							<button class="btnbuku">
								<img src="buku/<?php echo $book["sampul"] ?>" alt="image" height="200" width="145">		
							</button>
						</a>
					</div>
				</div>
			</div>
			<?php endforeach?>
			</div>
			
		</div>
	</section>
	
	<footer>
		<div class="footer">
			<p2>Copyright &copy; 2023 - BPMP Provinsi Kepulauan Bangka Belitung | All Right Reserved.</p2>
		</div>
	</footer>

</body>
</html>