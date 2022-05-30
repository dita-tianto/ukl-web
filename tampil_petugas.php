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
    ?>
    <br><br>
    <div class="container">
    <h1>Data Petugas</h1>
    <form action = "tampil_petugas.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan ID\Nama Petugas"/>
    </form><br><br>
    <a href="tambah_petugas.php" class="btn btn-secondary">Tambah Kelas</a>
    <table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col">ID Petugas</th>
      <th scope="col">Nama Petugas</th>
      <th scope="col">Username</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_petugas = mysqli_query($koneksi, "select * from petugas where id_petugas like '%$cari%' or nama_petugas like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_petugas = mysqli_query($koneksi, "select * from petugas");
    }
    while ($data_petugas = mysqli_fetch_array($query_petugas)){?>
        <tr> 
            <td><?php echo $data_petugas["id_petugas"];?></td>
            <td><?php echo $data_petugas["nama_petugas"];?></td>
            <td><?php echo $data_petugas["username"];?></td>
            <td><?php echo $data_petugas["level"];?></td>

            <td><a
            href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus</a>
            </td>

        </tr>
    <?php
    }
    ?>
  </tbody>
</table>