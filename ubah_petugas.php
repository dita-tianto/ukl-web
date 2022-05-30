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
    $qry_get_petugas=mysqli_query($connect,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
    $data_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>

    
<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Petugas</h1>
            <div class="card-body">
        <form action="proses_ubah_petugas.php" method="post">

        <input type="hidden" name="id_petugas" value=  "<?=$data_petugas['id_petugas']?>">
    Nama Petugas :
        <input type="text" name="nama_petugas" value=   "<?=$data_petugas['nama_petugas']?>" class="form-control">
  
    Username :
        <input type="text" name="username" value=   "<?=$data_petugas['username']?>" class="form-control">
    Level: 
        <textarea name="level" class="form-control" rows="4"><?=$data_petugas['level']?></textarea>
    
            <option></option>
            <?php 
            include "connect.php";
            $qry_petugas=mysqli_query($connect,"select * from petugas");
            while($data_petugas=mysqli_fetch_array($qry_petugas)){
                if($data_petugas['id_petugas']==$data_petugas['id_petugas']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            }
            ?>
        </select><br>
   

        <button type="submit" class="btn btn-success">Ubah Petugas</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
</body>
</html>
