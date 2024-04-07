<?php
session_start(); // memulai session
session_destroy(); // menghapus semua data session
echo "<script>alert('Terimakasih sudah berkunjung!');window.location='index.php'</script>";
?>