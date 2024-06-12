<?php 
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$siswa = query("SELECT * FROM siswa ORDER BY id DESC");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Daftar Mahasiswa</title>
        </head>
        <body>
            <h1 align="center">Daftar Mahasiswa</h1>
            <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                    </tr>';
                    $i = 1;
                    foreach( $siswa as $row ){
                        $html .='<tr>
                        <td>'. $i++ .'</td>
                        <td><img src="img/'. $row["gambar"] .'" width="50px"></td>
                        <td>'. $row["nrp"] .'</td>
                        <td>'. $row["nama"] .'</td>
                        <td>'. $row["email"] .'</td>
                        <td>'. $row["jurusan"] .'</td>
                        </tr>';
                    }
$html .='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-siswa.pdf', \Mpdf\Output\Destination::INLINE);

?>

