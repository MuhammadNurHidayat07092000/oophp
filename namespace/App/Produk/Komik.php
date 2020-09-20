<?php 

class Komik extends Produk implements InfoProduk {
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
 
    public function getInfo() {
       $strr = "{$this->judul} | 
                {$this->getLabel()} (Rp. 
                {$this->harga})";
 
       return $strr;
    }
 
    public function getAllProduk() {
       
       //operator concat - :: =>method static
       $strr = "Komik :  " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
       return $strr;
    }
 
 }