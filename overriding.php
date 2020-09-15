<?php 

class Produk {

   public $judul, 
          $penulis,
          $penerbit,
          $harga;
      
   public function __construct($judul = "Judul", 
                               $penulis = "Penulis",
                               $penerbit = "Penerbit",
                               $harga = 0 ) 

                               {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
   }

   public function getLabel() {
      return "$this->penulis, $this->penerbit";
   }

   public function getAllProduk() {

      $strr = "{$this->judul} | 
               {$this->getLabel()} (Rp. 
               {$this->harga})";

      return $strr;

   }

}

class Komik extends Produk {
   public $jmlHalaman;

   public function __construct(  $judul = "Judul", 
                                 $penulis = "Penulis",
                                 $penerbit = "Penerbit",
                                 $harga = 0, 
                                 $jmlHalaman = 0 ) 
                              
                              {

   parent::__construct( $judul, 
                        $penulis,
                        $penerbit,
                        $harga);
   
   $this->jmlHalaman = $jmlHalaman;

   }

   public function getAllProduk() {
      
      //operator concat - :: =>method static
      $strr = "Komik :  " . parent::getAllProduk() . " - {$this->jmlHalaman} Halaman.";
      return $strr;
   }

}

class Game extends Produk {
   public $waktuMain;

   public function __construct(  $judul = "Judul", 
                                 $penulis = "Penulis",
                                 $penerbit = "Penerbit",
                                 $harga = 0,
                                 $waktuMain = 0 ) 
                              
                              {

   parent::__construct( $judul, 
                        $penulis,
                        $penerbit,
                        $harga);
   
   $this->waktuMain = $waktuMain;

   }

   public function getAllProduk() {
      
      $strr = "Game : " . parent::getAllProduk() . " ~ {$this->waktuMain} Jam.";
      return $strr;
   }
}

class CetakInfoProduk {

   public function cetak( Produk $produk ) {
      $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
   }
}

$produk3 = new Komik("One Piece", "Eciro Oda", "Mbojo", 9000, 100);
$produk4 = new Game("Magic Line", "Eciro 2", "Kota", 8000, 50);

echo $produk3->getAllProduk();
echo "<br>";
echo $produk4->getAllProduk();










