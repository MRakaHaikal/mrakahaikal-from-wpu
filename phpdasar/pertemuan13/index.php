<?php 
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
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data siswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>

    </form>

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
        </tr>
        <?php $i++?>
        <?php endforeach;?>
    </table>



</body>
</html>