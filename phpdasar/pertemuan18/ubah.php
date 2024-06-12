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
</head>
<body>
    <h1>Ubah data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $sws["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $sws["gambar"];?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $sws["nrp"];?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $sws["nama"];?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $sws["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $sws["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <img src="img/<?= $sws['gambar'];?>" alt="" width="40">
                <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>

</body>
</html>