<?php
session_start();
if (!isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;
} 
require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM siswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$siswa = query("SELECT * FROM siswa ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");

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
</head>
<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data siswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>

    </form>

    <!-- navigasi pagination -->
    <?php if( $halamanAktif > 1):?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif;?>


    <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
        <?php if( $i == $halamanAktif) :?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else :?>
        <a href="?halaman=<?= $i; ?>" ><?= $i; ?></a>
        <?php endif;?>
    <?php endfor;?>
    
    <?php if( $halamanAktif < $jumlahHalaman):?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif;?>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
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
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"];?>" alt="" width="50"></td>
            <td><?php echo $row["nrp"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["jurusan"];?></td>
      
        <?php $i++?>
        <?php endforeach;?>
    </table>



</body>
</html>