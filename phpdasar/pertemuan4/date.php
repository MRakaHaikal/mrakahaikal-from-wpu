<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d M Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
    // echo date("l, d M Y",  time()+60*60*24*100);

// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime (0,0,0,27,11,2004));

// strtotime
    echo date("l", strtotime("27 nov 2004"));

?>