<?php
session_start();
if (!isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {
    


    // cek apapun data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php'
        </script>
    ";
    } else {
    echo "
    <script>
        alert('data gagal ditambahkan');
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
    <title>Tambah Data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">
    <h1 class="text-center">Tambah data Siswa</h1>

    
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" name="nrp" id="nrp" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama" id="nama" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="email" id="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" name="jurusan" id="jurusan" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="formFile" class="col-sm-2 col-form-label">Unggah Gambar</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" name="gambar" id="gambar">
            </div>
        </div>
    <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
    </form>
    </div>
</body>
</html>