<?php 

class Contoh {

   public static $angka = 1;

   public function hallo() {
      return "Hallo " . self::$angka++ . " Kali. <br>";
   }
}

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();

