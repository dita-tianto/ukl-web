<?php
session_start();
require_once("connect.php");

?>
<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <title>Tambah Petugas</title>
</head>
<body>
    <!-- Panggil heeader -->
    <?php require("header.php"); ?>
    <!-- Konten --> 
    <h3>Tambah Petugas</h3>
    <form action="" method="POST">
        <table cellpadding="5">
            <tr>
                <td>ID Petugas:</td>
                <td><input type="text" name="id petugas"></td>
            </tr>
            <tr>
                <td>Nama Petugas :</td>
                <td><input type="text" name="nama petugas"></td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Level :</td>
                <td><input type="text" name="level"></td>

<?php ?>       </select></td>   
            
            <tr>
                <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
  <hr />
           <!-- Panggil footer -->
           <?php require("footer.php"); ?>  
</body>
</html>

<?php 

if(isset($_POST['simpan'])){
    $ID_Petugas = $_POST['id_petugas'];
    $Nama_Petugas= $_POST['nama_petugas'];
    $Username = $_POST['username'];
    $Level = $_POST['level'];
    $no =  $_POST['no'];
    $simpan = mysqli_query($connect, "INSERT INTO petugas VALUES
    ('$ID_Petugas', '$Nama_Petugas', '$Username', '$Level', '$no')");
    if($simpan){
        header("location: petugas.php");
    }else{
        echo "<script>alert('Data sudah ada'); </script>";
    }
}
?>