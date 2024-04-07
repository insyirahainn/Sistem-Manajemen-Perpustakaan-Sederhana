<?php
session_start();

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>FORMULIR BUKU</title>

<style type="text/css">
* {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

a {
    color: inherit;
    text-decoration: none;
}

.detail-buku {
    max-width: 100%;
    height: auto;
}

.box {
    padding-left: 2px;
    border-radius: 4px;
    padding: 5px;
    height: auto;
}

.btn-detailbuku {
    max-width: 16%;
    height: auto;
}

.img2 {
    float: left;
    margin-left: 0;
    height: 48px;
    width: 50px;
    padding-top: 10px;
    padding-left: 0;
    padding-right: 10px;
}

/*.dropbtn {
    background-color: #ffffff20;
    color: white;
    padding-top: 0px;
    padding: auto;
    margin: auto;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: all .2s ease;
    margin-right: 0;
}*/

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
    margin-left: 0;
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
    font-size: 19px;
    font-weight: bold;
    margin-right: 0;
    color: black;
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
    margin-left: 0;
    margin-right: 0;
    width: 100%;
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
    font-family: sans-serif;
    font-size: 17px;
    font-weight: bold;
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

.sidebar {
    height: 700px;
    position: relative;
    display: flex;
    align-items: stretch;
    min-width: 20%;
    float: left;
    text-decoration: none;
}

.sidebar .leftside a {
    text-decoration: none;
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

.box-container h3 {
    margin-top: 20px;
    color: #ced4da;
    padding-left: 30%;
    font-family: arial black;
    font-size: 20px;
    margin-bottom: 90px;
}

section .formulir {
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

.formulir {
    background-color: #1e609199;
    display: flex;
    align-items: stretch;
}

.formulir .box-container .box .image {
    text-align: center;
    padding-top: 1rem;
    padding-bottom: 4rem;
    width: 30px;
    height: 30px;
}

.formulir .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 4.0rem;
    padding: auto;
}

.formulir .box-container .box {
    box-shadow: 0 .5rem 1.0rem rgba(0,0,0,.2);
    border-radius: .5rem;
    position: relative;
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

.tartib {
    padding-top: 70px;
    padding-bottom: 0;
    margin-bottom: 5px;
    font-size: 13px;
    color: white;
}

.box-container p {
    font-size: 10px;
    color: #daf0ff;
    margin: 0;
}

#formpinjam {
    margin: 50px 10px 10px;
    width: auto;
    padding: 2px;
    background-color: ;
    padding-top: 0px;
    margin-top: 5px;
    margin-bottom: 40px;
}

#formpinjam p {
    padding-bottom: 0px;
    margin-bottom: 0px;
}

#formpinjam h4 {
    font-weight: bold;
    margin-top: 60px;
}

.tableform {
    margin: 0px;
    width: 400px;
    height: 50px;
    background-color: ;
    font-size: 13px;
    font-weight: bold;
    color: #dee2e6;
    display: flex;
    align-items: stretch;
}

.inpform {
    margin: 5px;
    width: 480px;
    margin-left: 10px;
    padding: 8px;
    border-radius: 3px;
    border: 0.1px solid white;
    color: grey;
    background-color: #ffffff;
    max-width: 100%;
}

.pinjambuku {
    margin-top: 220px;
    padding: 7px 24px;
    border: ;
    border-radius: 5px;
    background-color: #adb5bd;
    color: white;
    font-weight: bold;
    font-size: 80%;
    box-shadow: 0 .5rem 1.0rem rgba(0,0,0,.3);
}

.pinjambuku:hover {
    background-color: #8d99ae;
    color: #ffffff;
}

.carousel-inner {
    height: 350px;
    width: 240px;
}

div.carousel-item.active {
    padding: 0px;
}

.carousel-control-next {
    margin-left: 50px;
}

.slidebuku {
    display: flex;
    align-items: stretch;
}

input:disabled {
    color: black;
}

div {
    display: block;
}

@media (max-width: 800px) {
    .box-container {
        width: 100%;
    }

    .box-container h3 {
        font-size: 13px;
        margin: auto;
        padding-left: 3%;
    }

    .inpform {
        width: 95%;
    }

    {
        width: 25%;
    }

    .leftside {
        width: 100%;
    }

    #formpinjam {
        width: 95%;
        padding-left: 2px;
    }

    .tableform {
        width: 100%;
    }

    .tartib {
        font-size: 14px;
    }

    .walktxtper {
        font-size: 14px;
    }

    .header h3 {
        font-size: 14px;
        padding: 20px 3px;
    }

    .img3 {
        width: 94px;
        height: 90px;
        margin: auto;
        display: flex;
        align-items: center;
    }

    .greeting {
        font-size: 15px;
    }

    .formulir p {
        font-size: 13px;
        text-align: justify;
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


    <section class="sidebar" >
        <div class="leftside">
            <img class="img3" src="gambar/profil.png"> 
            <h3 class="greeting">Selamat Datang,<br><?php echo $_SESSION['nama']; ?>!</h3>
            <ul>
                <li>
                    <td><a href="bukuberanda.php"><input type="submit" value="Daftar Buku" class="subbtn"></a></td>
                    <td><a href="formpinjam.php"><input type="submit" value="Formulir" class="active"></a></td>
                </li>
            </ul>
        </div>
    </section>

    <section class="formulir">
        <div class="container">
            <div class="box-container">

            <div class="slidebuku">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="100">
                          <img src="buku/Ranah3Warna.jpg" class="d-block w-100" alt="...">
                        </div>

                        <?php 
                              require_once 'koneksi.php';
                              $no = 1;
                              if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                $data = mysqli_query($koneksi,"SELECT * FROM buku WHERE jdl_buku LIKE '%$cari%'");
                              } else {
                                $data = mysqli_query($koneksi,"SELECT * FROM buku");
                              }
                              while($d = mysqli_fetch_assoc($data)) {

                                ?>
                                
                                <div class="carousel-item" data-bs-interval="10000">
                                    <a href="detailslidebuku.php?id=<?php echo $d["idbuku"] ?>">
                                        <img src="buku/<?php echo $d["sampul"] ?>" class="d-block w-100" alt="...">
                                    </a>
                                </div>

                                <?php }
                              ?>

                      </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                    </div>
            </div>
            
            <form method="post" action="tambah_aksiform.php" id="formpinjam" class="form">
                <table class="tableform">
                    <tr><td>Nama</td><td><input type="text" class="inpform" name="nama" value="<?php echo $_SESSION['nama']; ?>"></td></tr>
                    <tr><td>No Telepon</td><td><input type="text" class="inpform" name="telp" required=""></td></tr>
                    <tr><td>Judul Buku</td><td><input type="text" class="inpform" name="jd_buku" required=""></td></tr>
                    <tr><td>Tanggal Peminjaman</td><td><input type="date" class="inpform" name="tgl_pinjam" required=""></td></tr>
                </table>

            <input type="submit" class="pinjambuku" name="pinjam_buku" value="SIMPAN">
            <input type="reset" class="pinjambuku" name="reset" value="HAPUS">
            </form>

            <div id="formpinjam">
            <h4 class="tartib">Peraturan Peminjaman Buku Perpustakaan :</h4>
            <p>1. Pengunjung yang hendak meminjam buku dan belum membuat akun diharapkan untuk registrasi terlebih dahulu</p>
            <p>2. Sebelum meminjam buku, pengunjung terlebih dahulu mengecek ketersediaan buku pada detail buku</p>
            <p>3. Pengunjung yang mengembalikan buku dalam keadaan rusak akan mendapatkan sanksi</p>
            <p>4. Pengunjung diperbolehkan meminjam buku selama maksimal 1 minggu</p>
            <p>5. Pengunjung hanya diperbolehkan meminjam buku sebanyak 2 buku dalam 1 kali pinjam</p>
            <p>6. Dilarang keras untuk melakukan fotocopy/print/penjiplakan buku</p>
            </div>

            </div>
        </div>
    </section>

    
    
    <footer>
        <div class="footer">
            <p2>Copyright &copy; 2023 - BPMP Provinsi Kepulauan Bangka Belitung | All Right Reserved.</p2>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>