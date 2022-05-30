<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
<?php 
    include "navbar.php";
    include "connect.php";
    $qry_get_siswa=mysqli_query($connect,"select * from siswa where 
    nisn = '".$_GET['nisn']."'");
    $data_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>

    
<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Siswa</h1>
            <div class="card-body">
        <form action="proses_ubah_siswa.php" method="post">

        <input type="hidden" name="nisn" value=  "<?=$data_siswa['nisn']?>">
    NIS :
        <input type="text" name="nis" value=   "<?=$data_siswa['nis']?>" class="form-control">
  
    Nama Siswa :
        <input type="text" name="nama" value=   "<?=$data_siswa['nama']?>" class="form-control">
    Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$data_siswa['alamat']?></textarea>
    No. Telepon :
        <input type="text" name="no_tlp" value=   "<?=$data_siswa['no_tlp']?>" class="form-control">
    Kelas :
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            include "connect.php";
            $qry_kelas=mysqli_query($connect,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                if($data_kelas['id_kelas']==$data_siswa['id_kelas']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            echo '<option value="'.$data_kelas['id_kelas'].'" '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';   
            }
            ?>
        </select><br>
   

        <button type="submit" class="btn btn-success">Ubah Siswa</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
</body>
</html>
