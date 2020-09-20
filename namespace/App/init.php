<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

spl_autoload_register( function($class) {
    // App\Produk\User = ["App","Produk", "User"]
    $class = explode('\\', $class);//memecah sebuah string berdasarkan string tertentu
    $class = end($class);
    require_once 'Produk/' . $class . '.php';
});

spl_autoload_register( function($class) {
    $class = explode('\\', $class);//memecah sebuah string berdasarkan string tertentu
    $class = end($class);
    require_once 'Service/' . $class . '.php';
});