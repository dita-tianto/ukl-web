<?php
session_start();
require_once("konek.php");
// Jika sesi dari login belum dibuat maka akan kita kembalikan ke halaman login
if(isset($_SESSION['nisn'])){
    header("location: login_siswa.php");
}else{
    // Jika sudah dibuatkan sesi maka akan kita masukkan kedalam variabel
    $nisn = $_SESSION['nisn'];
}
$siswa = mysqli_query($db, "SELECT * FROM siswa JOIN kelas ON siswa.is_kelas=kelas.is_kelas WHERE nisn='$nisn'");
$result = mysqli_fetch_assoc($siswa);
$pembayaran = mysqli_query($db, "SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_spp=petugas.id_spp
WHERE nisn='$nisn' ORDER BY tgl_bayar");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1> Selamat datang di Aplikasi pembayaran SPP</h1>
                    <hr />
        <a href="#biodata">Biodata kamu</a> |
        <a href="#history">History Pembayaran</a> |
        <a herf="logout.php">Logout</a>
                    <hr />
        
    </body>
</html>