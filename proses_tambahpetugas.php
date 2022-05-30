<?php
    if($_POST){
        $nama_petugas=$_POST['nama_petugas'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=$_POST['level'];
        if (empty($nama_petugas)) {
            echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        }

        elseif (empty($username)) {
            echo "<script>alert('username petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        }

        elseif (empty($password)) {
            echo "<script>alert('password petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        }
        
        elseif (empty($level)) {
            echo "<script>alert('level petugas tidak boleh kosong);location.href='tambah_petugas.php';</script>";
        }
        else {
            include "connect.php";
            $insert=mysqli_query($connect,"insert into petugas (nama_petugas, username, password, level)
            value
            ('".$nama_petugas."','".$username."','".md5($password)."','".$level."')") or die(mysqli_error($connect));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan petugas');location.href='tambah_petugas.php';</script>";
            }

            else {
                echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
            }
        }
    }
?>