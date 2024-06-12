<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil / query data dari tabel siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");

// ambil data (fetch) siswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array asosiatif
// mysqli_fetch_array() // mengembalikan keduanya tapi datanya disajikan double
// mysqli_fetch_object() //

// while ($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs[3]);
// }
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

        <?php $i=1?>
        <?php while($row=mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?php echo $i;?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"];?>" alt="" width="50"></td>
            <td><?php echo $row["nrp"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["jurusan"];?></td>
        </tr>
        <?php $i++?>
        <?php endwhile;?>
    </table>



</body>
</html>