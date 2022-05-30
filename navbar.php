<?php
     session_start();
     if($_SESSION['status_login']!=true) {
         header('location:index.php');
    }?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PEMBAYARAN SPP SMK TELKOM MALANG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php
          if($_SESSION['level']!='siswa'){
          if($_SESSION['level']=='admin'){
          ?>
        <li class="nav-item">
          <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
        </li>
          <a class="nav-link" aria-current="page" href="tampil_kelas.php">Data Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_spp.php">Data SPP</a>
        </li>
        <?php }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <?php }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="history_pembayaran.php">History Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proses_logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>