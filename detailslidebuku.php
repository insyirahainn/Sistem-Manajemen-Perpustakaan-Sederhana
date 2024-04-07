<?php
session_start();

include "functionglobal.php";

$id = $_GET["id"];
$book = query("SELECT * FROM buku WHERE idbuku=$id")[0];

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
  <!--<link rel="stylesheet" type="text/css" href="cssberandabuku.css">-->

  <style type="text/css">
  *{
  padding: 0;
  margin: 0;
  font-family: sans-serif;
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
  display: flex;
  align-items: center;
  background-color: white;
  color: black;
  padding-bottom: 0px;
  margin-bottom: 20px;
}
button.btnbuku{
  padding-bottom: 0px;
  height: 280px;
  margin: 0px;
}
.btnbuku {
  border: 1px solid grey;
  border-radius: 8px;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 0px;
  padding-bottom: 0px;
  margin-bottom: 0px;

}
.btnbuku:hover {
  background-color: #00000020;
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

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #ffffff50;
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
.subbtn {
  display: flex;
  flex-direction: column;
  border: 2px;
  padding: 18px;
  background-color: #EAECEE;
  text-align: left;
  font-weight: bold;
  color: #17202A;
  width: 100%;
  margin-bottom: 20px;
  font-size: 15px;
}
.subbtn:hover {
  background-color: #00000030;
  color: white;
  cursor: pointer;
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

section {
  padding: 50px 0;
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
  color: #A52A2A;
}

section h2 {
  text-align: center;
  padding: 20px 0;
  color: #A52A2A;
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
  align-items: stretch;
}

.catalog .box-container .box .image {

  text-align: center;
  padding-top: 1rem;
  padding-bottom: 4rem;
  width: 30px 30px;
  
}

.catalog .box-container {
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
  padding: auto;
  padding: 0px;
}

.catalog .box-container .box {
  box-shadow: 0 .5rem 1.0rem rgba(0, 0, 0,.2);
  border-radius: .5rem;
  position: relative;
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

.btnback {
  padding: 5px 15px;
  margin-left: 30px;
  margin-bottom: 60px;
  color: white;
  background-color: #91A3B0;
  border: 0px solid grey;
  font-size: 10px;
  font-family: sans-serif;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.btnback:hover {
  background-color: #708090;
  cursor: pointer;
}

table {
  border: 2px solid;
  margin: auto;
  border-color: black;
  background-color: white;
  margin-left: 0px;
}
.detailbuku {
  color: black;
  font-size: 80%;
  margin-top: 0px;
  border: 2px solid white;
  background-color: #ffffff40;
}

.detailbuku td {
  padding: 10px;
  height: 20px;
}
.detailbuku td .isi {
    width: 50%;
}
.box-container img {
  margin: auto;
  margin-right: 0px;
  width: 300px;
  height: 400px;
  margin-left: 80px;
  margin-top: 0;
}


/*FOOTER*/

footer {
  padding: 10px 10px;
  padding-top: px;
  background-color: #17202A;
  color: white;
  text-align: center;
  font-size: 10px;
}

@media (max-width: 800px){
  header .walktxtper {
    font-size: 13px;
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
  .greeting {
    font-size: 15px;
  }
  .sidebar {
    width: 25%;
  }
  .leftside {
    width: 100%;
  }
  .header h3{
    font-size: 14px;
    padding: 20px 3px;
  }
  .box {
    margin: auto;
    display: flex;
    align-items: center;
  }
  .detailbuku {
    margin-left: 30%;
  }

}

.column-buku {
  width: 380px;
  text-align: left;
}
.column-buku-sinopsis {
  width: auto;
  text-align: justify;
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

  <section class="catalog">
    <div class="container">
      <h3>KETERANGAN BUKU</h3>

      <div class="box-container">
        <a href="formpinjam.php"><button class="btnback">BACK</button></a>

              <?php
              require_once 'koneksi.php';
              ?>


                <img src="buku/<?php echo $book["sampul"] ?>">

                <table class="detailbuku" border="1">
                  <tr><td>Judul Buku</td><td class="column-buku"><?php echo $book['jdl_buku']; ?></td></tr>
                  <tr><td>ID Buku</td><td class="column-buku"><?php echo $book['idbuku']; ?></td></tr>
                  <tr><td>Penulis</td><td class="column-buku"><?php echo $book['penulis']; ?></td></tr>
                  <tr><td>Penerbit</td><td class="column-buku"><?php echo $book['penerbit']; ?></td></tr>
                  <tr><td>ISBN</td><td class="column-buku"><?php echo $book['ISBN']; ?></td></tr>
                  <tr><td>Bahasa</td><td class="column-buku"><?php echo $book['bahasa']; ?></td></tr>
                  <tr><td>Deskripsi</td><td class="column-buku"><?php echo $book['deskripsi']; ?></td></tr>
                  <tr><td>Edisi</td><td class="column-buku"><?php echo $book['edisi']; ?></td></tr>
                  <tr><td>Stock</td><td class="column-buku"><?php echo $book['stock']; ?></td></tr>
                  <tr><td>Sinopsis</td><td class="column-buku-sinopsis"><?php echo $book['sinopsis']; ?></td></tr>
          </table>
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