<?php 
$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows=[];
    while ( $row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data ["nama"]);
    $nrp = htmlspecialchars($data ["nrp"]);
    $jurusan = htmlspecialchars($data ['jurusan']);
    $email = htmlspecialchars($data ["email"]);
    $gambar = htmlspecialchars($data ["gambar"]);

    $query = "INSERT INTO siswa VALUES ('','$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}


?>