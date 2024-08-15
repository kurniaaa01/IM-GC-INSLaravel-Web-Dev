<?php

require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new animal();
$sheep -> setName("sheep");

echo "Nama Hewan: ".$sheep -> getName()."<br>";
echo "Jumlah Kaki: ".$sheep -> legs()."<br>";
echo "Berdarah Dingin: ".$sheep -> cold_blooded()."<br><br>";

$kodok = new frog();
$kodok -> setName("buduk");

echo "Nama Hewan: ".$kodok -> getName()."<br>";
echo "Jumlah Kaki: ".$kodok->legs."<br>";
echo "Berdarah Dingin: ".$kodok -> cold_blooded()."<br>";
echo "Bunyi: ".$kodok -> jump()."<br><br>";



$sungkong= new ape();
$sungkong -> setName("sungkong");

echo "Nama Hewan: ".$sungkong -> getName()."<br>";
echo "Jumlah Kaki: ".$sungkong -> legs()."<br>";
echo "Berdarah Dingin: ".$sungkong -> cold_blooded()."<br>";
echo "Bunyi: ".$sungkong -> yell()."<br>";

?>