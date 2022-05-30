<?php
if($_POST){
    $ID_petugas=$_POST["id_petugas"];
    $nama_petugas=$_POST["nama_petugas"];
    $username=$_POST["username"];
    $level=$_POST["level"];

    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='ubah_petugas.php';</script>";
 
    }  else {
        include "connect.php";
            $update=mysqli_query($connect,"update petugas set id_petugas='".$ID_petugas."', nama_petugas='".$nama_petugas."', username='".$username."', level='".$level."' ") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?nisn=".$nisn."';</script>";
            }
        } 
        
        
     
}
?>