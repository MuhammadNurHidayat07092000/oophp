<?php 

class Produk {

   public $judul, 
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $waktuMain,
          $tipe;

   public function __construct($judul = "Judul", 
                               $penulis = "Penulis",
                               $penerbit = "Penerbit",
                               $harga = 0, 
                               $jmlHalaman = 0,
                               $waktuMain = 0,
                               $tipe) {

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

   public function getAllInfo() {

      $strr = "{$this->tipe} : 
               {$this->judul} | 
               {$this->getLabel()} (Rp. 
               {$this->harga})";

      if($this->tipe == "Komik") {
         $strr .= " - {$this->jmlHalaman} Halaman.";
      }else if($this->tipe == "Game") {
         $strr .= " ~ {$this->waktuMain} Jam.";
      }

      return $strr;

   }

}

class CetakInfoProduk {

   public function cetak( Produk $produk ) {
      $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
   }
}

$produk3 = new Produk("One Piece", "Eciro Oda", "Mbojo", 9000, 100, 0, "Komik");
$produk4 = new Produk("Magic Line", "Eciro 2", "Kota", 8000, 0, 50, "Game");

echo $produk3->getAllInfo(); echo "<br>";
echo $produk4->getAllInfo();










