<?php
// variable scope / lingkup variabel


// function tampilX(){
//     global $x;
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;


// SUPERGLOBALS
// variabel global milik php
// // merupakan array assosiative
// echo $_SERVER["SERVER_NAME"];


// $_GET
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
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) :?>
            <li>
                <a href="latihan2.php?nama=<?=$mhs["nama"];?>&nim=<?=$mhs["nim"];?>&jurusan=<?=$mhs["jurusan"];?>&email=<?=$mhs["email"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"];?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>