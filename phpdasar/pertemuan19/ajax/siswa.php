<?php 
require '../functions.php';


$keyword = $_GET["keyword"];

$query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR email LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
$siswa = query("$query");



?>

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