<?php 

require_once 'App/Init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonnen Jump", 150000, 100);
// $produk2 = new Game("Tomb Raider", "Somebody", "Square Enix", 120000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();



use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();