<?php 

// membuat class produk penjualan
// membuat class komik
// membuat class game

class Produk {

   public $judul = "judul", 
          $penulis = "penulis",
          $penerbit = "penerbit",
          $harga;

   // public function sayHello() {
   //    return "Hello Bro!";
   // }

   public function getLabel() {
      return "$this->penulis, $this->penerbit";
   }


}

// $produk2 = new Produk();
// $produk2->judul = "OkeBro";
// $produk2->propertyBaru = "hehe";

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eciro Oda";
$produk3->penerbit = "Mbojo";
$produk3->harga = 9000;

$produk4 = new Produk();
$produk4->judul = "Magic Line";
$produk4->penulis = "Eciro Oda2";
$produk4->penerbit = "Kota";
$produk4->harga = 8000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game  : " . $produk4->getLabel();





