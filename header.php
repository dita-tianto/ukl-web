<?php require_once("connect.php"); ?>
<h1>Selamat Datang di Aplikasi pembayaran SPP</h1>
<hr />
<!-- Logikanya, Jika level admin fitur apa saja yang dapat diakses -->
<?php

if(isset($_SESSION['username'])){
     //header("location: login.php");
     echo $_SESSION['username'];
  }else{
      $username = $_SESSION['username'];
  }
$panggil = mysqli_query($connect, "SELECT * FROM petugas WHERE username= '$uname' ");
$hasil = mysqli_fetch_assoc($panggil);
     if($hasil['level'] == "Administrator"){ ?>
     <a href="siswa.php">Data Siswa</a> |
     <a href="petugas.php">Data Petugas</a> |
     <a href="kelas.php">Data Kelas</a> |
     <a href="spp.php">Data SPP</a> |
     <a href="transaksi.php">Transaksi</a> |
     <a href="history.php">History Pembayaran</a> |
     <a href="logout.php">Logout</a>
<?php
     }else{ ?>
     <a href="transaksi.php">Transaksi</a> |
     <a href="history.php">History Pembayaran</a> |
     <a href="logout.php">Logout</a>
     
<?php } ?>
<hr />



     