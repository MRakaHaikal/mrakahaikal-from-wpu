<?php 


class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga",
    $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfo() {
        // Komik : Naruto | Masashi Kishimoto, Shonnen Jump (Rp30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) ";
        if ($this->tipe=="Komik"){
            $str .="- {$this->jmlHalaman} Halaman";
        } else if ($this->tipe=="Game"){
            $str .="- {$this->waktuMain} Jam";
        }
        return $str;
    }

}


class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp{$produk->harga})";
        return $str;
    }

    public function cetak2 ( Produk $produk ){
        $str = "";
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonnen Jump", 150000, 100, 0, "Komik");
$produk2 = new Produk("Tomb Raider", "Somebody", "Square Enix", 120000, 0, 50, "Game");

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();