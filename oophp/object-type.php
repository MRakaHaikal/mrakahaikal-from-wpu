<?php 


class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}


class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp{$produk->harga})";
        return $str;
    }
}


$Produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonnen Jump", 150000);
$Produk2 = new Produk("Dragon", "Akira Toriyama", "Shonnen Jump", 120000);

echo "Nama Komik: " . $Produk1->getLabel();
echo "<br>";
echo "Nama Komik: " . $Produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($Produk1);