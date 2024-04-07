<?php
session_start();

if ($_SESSION['status'] != "login") {
  header("location:loginadmin.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN PERPUSTAKAAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    .jdtable {
      background-color: #BEBFC5;
      color: white;
      padding: 6px 13px;
    }
    a {
      text-decoration: none;
      color: white;
    }
    .table {
      text-align: center;
    }
    /*#container {
      background-color: #003049;
    }*/
    body {
      background-color: #003049;
    }
    thead {
      font-size: 13px;
    }
    tbody {
      font-size: 13px;
    }
    div.container-fluid {
      font-size: 15px;
      font-weight: bold;
    }
    h5 {
      float: right;
      font-size: 13px;
      margin: 0;
      padding: 0;
      display: block;
      pad
    }
    img {
      float: right;
      height: 70px;
      width: 100px;
      margin-bottom: 0;
      padding-bottom: 0;
      margin-top: 9px;
      padding-top: 0;
      display: block;
    }
    .text-justify {
      text-align: justify;
    }
    .img-fluid {
      height: 145px;
      max-width: 100px;
    }
    .nav-item:hover {
      background-color: #ffffff10;
      color: white;
    }
    .nav-item a {
      color: white;
    }
    .nav-item a:hover {
      color: white;
    }
    .nav-item-active a {
      color: white;
    }
    .nav-item-active a:hover{
      color: white;
    }
    table {
      margin-left: 0px;
      padding-left: 0px;
    }
    @media (max-width: 800px) {
      * {
        font-size: 87%;
        margin: 0;
        padding: 0;
      }
      table {
        margin-left: 0;
      }
      h5 {
        font-size: 87%;
      }
      form {
        font-size: 84%;
      }
      #container {
        margin-left: 0;
        padding-left: 10px;
        padding-right: 10px;
      }
    }
    .tambah {
      background-color: #ffffff60;
      float: left;
      margin-left: 30px;
      font-weight: bold;
      padding: 7px;
      margin-bottom: 30px;
      margin-right: 20px;
      border: 1px;
      border-radius: 3px;
      display: block;
      font-size: 10px;
    }
    .tambah:hover {
      background-color: #ffffff80;
    }
    .tambah a {
      color: white;
    }
    .dropdown-menu a {
      color: black;
    }
    .dropdown-menu a:hover {
      color: black;
    }
  </style>
</head>
<body>
<div class="navbar navbar-expand-sm navbar-dark text-white" style="background-color: #1e6091;">
    <img src="gambar/profile.png" class="d-flex flex-column-reverse mb-3"><br/>
    <h5 class="d-flex flex-column-reverse mb-3">Hai, Admin!</h5>
</div>


<div>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">

        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="databaseform.php" id="text"><span class="#">DATA FORM</span></a>
            </li>
            <li class="nav-item-active">
              <a class="nav-link" href="databasebuku.php"><span class="#">DATA BUKU</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="databasepengunjung.php"><span class="#">DATA PENGUNJUNG</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="databaseusnpw.php"><span class="#">DATA ADMIN</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logoutadmin.php">Logout</a></li>
                <li><a class="dropdown-item" href="index.php">Login Perpustakaan</a></li>
              </ul>
            </li>
          </ul>
          <form action="#" method="get" class="d-flex">
              <input type="text" class="form-control me-2" name="cari" id="cari" placeholder="Search">
              <button type="submit" id="btncari" class="btn btn-primary">Cari</button>
          </form>
        </div>
      </div>
    </nav>
</div>

<div class="d-flex justify-content-center table-responsive">
<div class="container mt-5" id="container">
  <button class="tambah"><a href="tambahbuku.php">+ TAMBAH</a></button>

  <div class="container-table">
    <table class="table table-bordered">
    <thead class="table-dark">
      <tr class="jdtable">
        <th style="width: 10px;">NO</th>
        <th style="width: 100px;">Judul Buku</th>
        <th style="width: 23px;">ID</th>
        <th style="width: 22px;">Penulis</th>
        <th style="width: 22px;">Penerbit</th>
        <th style="width: 70px;">ISBN</th>
        <!-- <th>Bahasa</th> -->
        <th style="width: 100px;">Deskripsi</th>
        <th style="width: 20px;">Edisi</th>
        <th style="width: 20px;">Tahun</th>
        <th style="width: 10%;">Sampul Buku</th>
        <th style="width: 20px;">Stock</th>
        <!-- <th>Sinopsis</th> -->
        <th style="width: 10px;">Opsi</th>
      </tr>
    </thead>

      <?php 
      require_once 'koneksi.php';

      $jmlDataPerHalaman = 10;
      $result = mysqli_query($koneksi, "SELECT * FROM buku");
      $jmlData = mysqli_num_rows($result);
      $jmlHal = ceil($jmlData / $jmlDataPerHalaman);
      // var_dump($jmlHal);
      $actHal = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
      $dataAwal = ($jmlDataPerHalaman * $actHal) - $jmlDataPerHalaman;



      $no = (($jmlDataPerHalaman * $actHal) - $jmlDataPerHalaman) + 1;
      if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($koneksi,"SELECT * FROM buku WHERE jdl_buku LIKE '%$cari%' OR idbuku LIKE '%$cari%' OR penulis LIKE '%$cari%' OR penerbit LIKE '%$cari%' OR tahun LIKE '%$cari%'");
      } else {
        $data = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY tahun DESC LIMIT $dataAwal,$jmlDataPerHalaman");
      }
      while($d = mysqli_fetch_assoc($data)) {

        ?>
      <tbody>
        <tr>
          <td class="text-bg-light"><?php echo $no++; ?></td>
          <td class="text-bg-light"><?php echo $d['jdl_buku']; ?></td>
          <td class="text-bg-light"><?php echo $d['idbuku']; ?></td>
          <td class="text-bg-light"><?php echo $d['penulis']; ?></td>
          <td class="text-bg-light"><?php echo $d['penerbit']; ?></td>
          <td class="text-bg-light"><?php echo $d['ISBN']; ?></td>
          <!-- <td class="text-bg-light"><?php echo $d['bahasa']; ?></td> -->
          <td class="text-bg-light"><?php echo $d['deskripsi']; ?></td>
          <td class="text-bg-light"><?php echo $d['edisi']; ?></td>
          <td class="text-bg-light"><?php echo $d['tahun']; ?></td>
          <td class="text-bg-light"><img class="img-fluid" src="buku/<?php echo $d["sampul"] ?>" ></td>
          <td class="text-bg-light"><?php echo $d['stock']; ?></td>
          <!-- <td class="text-justify bg-light"><?php echo $d['sinopsis']; ?></td> -->

          <div class="d-flex flex-column">
          <td class="text-bg-light">
            <button style="background-color: #0000B8; color: white;"><span class="material-symbols-outlined"><a href="editbuku.php?idbuku=<?php echo $d['idbuku']; ?>">edit_square</a></span></button>

            <button style="background-color: #FE0000; color: white;"><span class="material-symbols-outlined"><a href="hapusbuku.php?idbuku=<?php echo $d['idbuku']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">delete</a></span></button>

            <button style="background-color: #3AA8C1; color: white;" name="tambah_stock"><span class="material-symbols-outlined"><a href="tambahstock.php?idbuku=<?php echo $d['idbuku']; ?>">add_box</a></span></button>
          </td>
          </div>

        </tr>
        <?php }
      ?>
    </tbody>
    </table>
      <div>

        <ul class="pagination pagination-sm">

          <?php if($actHal > 1) : ?>
          <li class="page-item"><a class="page-link" href="?halaman=<?= $actHal - 1;?>">Previous</a></li>
          <?php endif; ?>

        <?php for($i = 1; $i <= $jmlHal; $i++) : ?>
          <?php if($i == $actHal) : ?>
          <li class="page-item active"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
          <?php else : ?>
          <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
          <?php endif; ?>
        <?php endfor;?>

          <?php if($actHal < $jmlHal) : ?>
          <!-- next -->
          <li class="page-item"><a class="page-link" href="?halaman=<?= $actHal + 1;?>">Next</a></li>
          <?php endif; ?>

        </ul>
      </div>
</div>

</div>
</div>


</body>
</html>
