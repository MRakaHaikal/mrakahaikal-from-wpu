<?php 


class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->penerbit";
    }


}


$Produk1 = new Produk();
$Produk1->judul = "One Piece";
$Produk1->penulis = "Eiichiro Oda";
$Produk1->penerbit = "Toei Animation";

echo "Nama Komik: " . $Produk1->getLabel();