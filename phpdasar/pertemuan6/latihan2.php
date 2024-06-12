<?php 
// $mahasiswa =[
//     ["Raka Haikal", "1234567", "Sistem Informasi", "rakahaikal924@gmail.com"],
//     ["Lusy Rahmah", "7654321", "Sastra Jepang", "lusyrahmah@gmail.com"]
// ];

// array assosiative
// definisinya sama seperti array numerik, kecuali
// keynya adalah string yang kita buat sendiri
$mahasiswa=[
    ["nama"=>"Raka Haikal", 
            "nim" => "1234567",
            "email" => "rakahaikal924@gmail.com",
            "jurusan"=> "Sistem Informasi",
            "gambar" => "malay.png"
    ],
    ["nama"=>"Lusy Rahmah", 
    "nim" => "7654321",
    "email" => "lusyrahmah@gmail.com",
    "jurusan"=> "Sastra Jepang",
    "gambar" => "singapore.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) :?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"];?></li>
            <li>NIM: <?= $mhs["nim"];?></li>
            <li>Jurusan: <?= $mhs["jurusan"];?></li>
            <li>Email: <?= $mhs["email"];?></li>
        </ul>
    <?php endforeach; ?> 
</body>
</html>