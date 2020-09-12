<?php 

// membuat class produk penjualan
// membuat class komik
// membuat class game

class Produk {

   public $judul, 
          $penulis,
          $penerbit,
          $harga;

   public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
   }

   public function getLabel() {
      return "$this->penulis, $this->penerbit";
   }


}

// $produk2 = new Produk();
// $produk2->judul = "OkeBro";
// $produk2->propertyBaru = "hehe";

$produk3 = new Produk("One Piece", "Eciro Oda", "Mbojo", 9000);
$produk4 = new Produk("Magic Line", "Eciro 2", "Kota", 8000);
$produk5 = new Produk("Magic");

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game  : " . $produk4->getLabel();
echo "<br>";





