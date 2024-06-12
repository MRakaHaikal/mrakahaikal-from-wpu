<?php
session_start();
if (!isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id nya
$sws = query("SELECT * FROM siswa WHERE id=$id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {
    
    // cek apapun data berhasil diubah atau tidak
    if ( ubah($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php'
        </script>
    ";
    } else {
    echo "
    <script>
        alert('data gagal diubah');
        document.location.href = 'index.php'
        </script>
    ";
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">
    <h1 class="text-center">Ubah data Siswa</h1>
  
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $sws["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $sws["gambar"];?>">
        <div class="row mb-3">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" name="nrp" id="nrp" class="form-control" value="<?= $sws["nrp"];?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama" id="nama" required value="<?= $sws["nama"];?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="email" id="email" value="<?= $sws["email"];?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?= $sws["jurusan"];?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="formFile" class="col-sm-2 col-form-label">Unggah Gambar</label>
            
            <div class="col-sm-10">
                <img src="img/<?= $sws['gambar'];?>" alt="" width="40">
                <input class="form-control" type="file" name="gambar" id="gambar">
            </div>
        </div>
    <button class="btn btn-primary" type="submit" name="submit">Ubah Data</button>
    </form>
    </div>
</body>
</html>