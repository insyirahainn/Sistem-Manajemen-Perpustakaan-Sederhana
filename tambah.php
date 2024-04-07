<!DOCTYPE html>
<html>
<head>
	<title>Data Pengajuan Surat</title>
</head>
	<style type="text/css">
		body {
			background-color: #BBCBD2;
		}
		table {
			border-color: black;
			background-color: white;
			color: black;
		}
		th {
			color: black;
		}
		a {
			text-decoration: none;

		}
	</style>
<body>
	<center><h2>Data Anggota Perpustakaan</h2>
	<br/>
	<a href="index.php">+ TAMBAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIK</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select* from pengunjung");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['NIK']; ?></td>
			</tr>
			<?php
		}
		?>
	</table>
	</center>
</body>
</html>