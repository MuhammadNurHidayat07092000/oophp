<?php 

require_once 'App/init.php';

$produk1 = new Komik("One Piece", "Eciro Oda", "Mbojo", 9000, 100);
$produk2 = new Game("Magic Line", "Eciro 2", "Kota", 8000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();