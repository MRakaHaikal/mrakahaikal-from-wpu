<?php
session_start();
if (!isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;
} 
require 'functions.php';
$siswa = query("SELECT * FROM siswa ORDER BY id DESC");

// tombol cari ditekan
if ( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 50px;
            position: absolute;
            top: 125px;
            left: 320px;
            z-index: -1;
            display: none;
        }

        @media print {

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Dasar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="print.php" target="_blank">Cetak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>

        <a class="btn btn-success" href="tambah.php" type="">
            Tambah data siswa
        </a>
        <br><br>

        <form class="d-flex" action="" method="post">
            <input class="form-control me-2" type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off" id="keyword">
            
            <button class="btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Cari!</button>
        </form>

        <img src="img/loader.gif" alt="" class="loader">

        <br>
        <div id="container">
            <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>

                <?php $i=1;?>
                <?php foreach( $siswa as $row ):?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td>
                    <a class="btn btn-primary" href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin?')">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"];?>" alt="" width="50"></td>
                    <td><?php echo $row["nrp"];?></td>
                    <td><?php echo $row["nama"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["jurusan"];?></td>
                </tr>
                <?php $i++?>
                <?php endforeach;?>
            </table>
        </div>
    </div>


</body>
</html>