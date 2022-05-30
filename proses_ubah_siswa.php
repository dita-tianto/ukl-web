<?php
if($_POST){
    $nisn=$_POST["nisn"];
    $nis=$_POST["nis"];
    $nama=$_POST["nama"];
    $alamat=$_POST["alamat"];
    $no_telp=$_POST["no_tlp"];
    $id_kelas=$_POST["id_kelas"];

    if(empty($nama)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
 
    }  else {
        include "connect.php";
            $update=mysqli_query($connect,"update siswa set nisn='".$nisn."', nis='".$nis."', nama='".$nama."', alamat='".$alamat."', no_tlp='".$no_telp."', id_kelas='".$id_kelas."' where nisn = '".$nisn."' ") or die(mysqli_error($koneksi));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        } 
        
        
     
}
?>