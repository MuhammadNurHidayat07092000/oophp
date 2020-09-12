<?php 

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

class CetakInfoProduk {

   public function cetak( Produk $produk ) {
      $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
   }
}

$produk3 = new Produk("One Piece", "Eciro Oda", "Mbojo", 9000);
$produk4 = new Produk("Magic Line", "Eciro 2", "Kota", 8000);

echo "<h3> Contruktor </h3>";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game  : " . $produk4->getLabel();
echo "<br>";

$infoProduk3 = new CetakInfoProduk();
$infoProduk4 = new CetakInfoProduk();

echo "<h3> Ojek Type </h3>";

echo $infoProduk3->cetak($produk3); 
echo "<br>";
echo $infoProduk4->cetak($produk4);







