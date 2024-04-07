
<?php
session_start();

if ($_SESSION['status'] != "login") {
  header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>PERPUSTAKAAN</title>

<style type="text/css">
* {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

a {
    color: inherit;
    text-decoration: 0;
}

button.dropbtn {
    border: 0px none;
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
    border-color: #ffffff00;
}

.dropdown {
    position: relative;
    display: inline-block;
    border-color: none;
    border: none;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    font-weight: bold;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 70%;
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
    color: black;
    width: 80%;
    margin: 0 auto;
    font-family: arial black;
    font-weight: bold;
}

.container:after {
    content: " ";
    display: block;
    clear: both;
}

header .container {
    font-weight: bold;
    padding-top: 40px;
    font-family: arial black;
}

header {
    background-color: #cae9ff;
}

header h1 {
    float: left;
    padding: 15px 0;
    color: black;
    font-weight: bold;
}

header ul {
    float: right;
}

header ul li {
    display: inline-block;
}

header ul li a {
    padding: 25px 20px;
    display: inline-block;
}

header ul li a:hover {
    font-weight: bold;
    background-color: #ffe4e1;
    color: black;
}

.banner {
    height: 500px;
    background-size: 100%;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: top;
    background-color: #cae9ff;
}

.banner:after {
    content: " ";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.banner h2 {
    color: #fffff0;
    font-size: 35px;
    padding: 5px;
}

section {
    padding: 50px 0;
}

section h4 {
    text-align: center;
    padding: 20px 0;
    color: #a52a2a;
}

section h2 {
    text-align: center;
    padding: 20px 0;
    color: white;
}

.about {
    background-color: #cae9ff;
    font-size: 80%;
}

.about h4 {
    color: white;
}

.about p {
    margin-left: 60px;
    margin-right: 60px;
    text-align: center;
    color: black;
    word-spacing: 2px;
    line-height: 25px;
}

.box-container .box .image .icons p {
    font-size: 80%;
}

.contact {
    background-color: #1e6091;
}

.contact h2 {
    text-align: center;
    color: white;
    font-size: 20px;
    font-family: arial black;
}

.box {
    margin: auto;
}

.box .col-4 {
    width: 25%;
    padding: 15px;
    margin-left: 20px;
    margin-right: 50px;
    box-sizing: border-box;
    float: right;
    color: white;
    font-size: 75%;
    font-family: arial black;
}

.box .col-4 h3 {
    color: white;
    font-size: 12px;
    font-weight: bold;
}

footer {
    padding: 30px 0;
    background-color: black;
    color: black;
    text-align: center;
    font-size: 10px;
}

.container .cr {
    color: white;
}

label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
}

.container h2 {
    margin-bottom: 20px;
    padding-bottom: 20px;
}

@media (max-width: 800px) {
    header .container h4 {
        font-weight: bold;
        padding-top: 0px;
        font-family: arial black;
        font-size: 60%;
        padding-bottom: 15px;
    }

    .about .container {
        font-size: 10px;
    }

    .about .container h4 {
        font-size: 20px;
    }

    div img {
        height: 300px;
    }

    .contact {
        font-size: 60%;
    }

    .contact .container h2 {
        font-size: 20px;
    }

    iframe {
        height: 280px;
        width: 425px;
        margin-left: 0px;
        padding-right: 0px;
    }
}
</style>
</head>
<body>

    <header>

        <div class="dropdown" style="float:right;">
            <button class="dropbtn"><span class="material-symbols-outlined">density_small</span></button>
            <div class="dropdown-content">
            <a href="loginadmin.php">Admin</a>
            <a href="bukuberanda.php">Beranda</a>
            <a href="about.php">About</a>
            <a href="logout.php">Logout</a>
            </div>
        </div>
        <div class="container">
            <h4>PERPUSTAKAAN UMUM BALAI PENJAMINAN MUTU PENDIDIKAN<br>PROVINSI BANGKA BELITUNG</h4>
        </div>
    </header>

    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
              <img class="d-block w-100" src="gambar/bpmp1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img class="d-block w-100" src="gambar/bpmp2.jpg" alt="First slide">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img class="d-block w-100" src="gambar/gedungperpustakaan.jpg" alt="Second slide">
            </div>
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

    <section class="about">
        <div class="container">
        <h4>ABOUT</h4>
        <p><b>BPMP BABEL</b> adalah Unit Pelaksana Teknis Kementerian Pendidikan dan Kebudayaan yang berada di bawah dan bertanggung jawab kepada Direktorat Jenderal PAUD Pendidikan Dasar dan Menengah.</p>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>KONTAK KAMI</h2>
            <div class="box">
                <div class="col-4">
                <h3>Address</h3>
                <p>Jl. Pulau Bangka, Padang Baru, Kec. Bukitintan, Kabupaten Bangka Tengah, Kepulauan Bangka Belitung 33684</p><br>
                </div>
                <div class="col-4">
                <h3>Contact Person</h3>
                <p>+628117176160</p>
                </div>
                <div class="col-4">
                <h3>Email</h3>
                <p>bpmp.babel@kemdikbud.go.id</p>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7112.793580849378!2d106.1599356653206!3d-2.1561998573643284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e22c750148865f5%3A0xb9cb66b6693f9501!2sJl.%20Pulau%20Bangka%2C%20Padang%20Baru%2C%20Kec.%20Pangkalan%20Baru%2C%20Kabupaten%20Bangka%20Tengah%2C%20Kepulauan%20Bangka%20Belitung!5e0!3m2!1sid!2sid!4v1684979527423!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p2 class="cr">Copyright &copy; 2023 - BPMP Provinsi Kepulauan Bangka Belitung | All Right Reserved.</p2>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>