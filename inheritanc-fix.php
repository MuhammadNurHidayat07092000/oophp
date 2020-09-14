<?php 

class Produk {

   public $judul, 
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $waktuMain;
      
   public function __construct( $judul = "Judul", 
                               $penulis = "Penulis",
                               $penerbit = "Penerbit",
                               $harga = 0, 
                               $jmlHalaman = 0,
                               $waktuMain = 0 
                               ) 

                               {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
   }

   public function getLabel() {
      return "$this->penulis, $this->penerbit";
   }

   public function getAllProduk() {

      $strr = "{$this->tipe} : 
               {$this->judul} | 
               {$this->getLabel()} (Rp. 
               {$this->harga})";

      return $strr;

   }

}

class Komik extends Produk {

   public function getAllProduk() {
      
      $strr = "Komik :  {$this->judul} | 
                        {$this->getLabel()} (Rp. 
                        {$this->harga}) - {$this->jmlHalaman} Halaman.";
      return $strr;
   }

}

class Game extends Produk {

   public function getAllProduk() {
      
      $strr = "Game :   {$this->judul} | 
                        {$this->getLabel()} (Rp. 
                        {$this->harga}) ~ {$this->waktuMain} Jam.";
      return $strr;
   }
}

class CetakInfoProduk {

   public function cetak( Produk $produk ) {
      $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
   }
}

$produk3 = new Komik("One Piece", "Eciro Oda", "Mbojo", 9000, 100, 0);
$produk4 = new Game("Magic Line", "Eciro 2", "Kota", 8000, 0, 50);

echo $produk3->getAllProduk();
echo "<br>";
echo $produk4->getAllProduk();










