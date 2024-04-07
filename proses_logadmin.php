<?php
session_start(); 
include "koneksi.php"; 
$username = $_POST['username']; 
$password = $_POST['password']; 
 
$login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'"); 
$cek = mysqli_num_rows($login); 
if($cek > 0){ 
    $data = mysqli_fetch_assoc($login); // mengambil data user
    $_SESSION['username'] = $username; 
    $_SESSION['status'] = "login"; // menyimpan status login ke dalam session
    header('Location:databaseform.php'); 
}else{ 
    echo "<script>alert('Harap memasukkan data dengan benar');window.location='loginadmin.php'</script>";
}
?>
