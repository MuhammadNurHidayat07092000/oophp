<?php 

class Game extends Produk implements InfoProduk {
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
 
    public function getInfo() {
       $strr = "{$this->judul} | 
                {$this->getLabel()} (Rp. 
                {$this->harga})";
 
       return $strr;
    }
 
    public function getAllProduk() {
       
       $strr = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
       return $strr;
    }
 
    
 }