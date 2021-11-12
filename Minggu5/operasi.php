<?php 
function penjumlahan($x,$y){
	$hasil = $x + $y;
	return $hasil;
}
function pengurangan($x,$y){
	$hasil = $x - $y;
	return $hasil;
}
function perkalian($x,$y){
	$hasil = $x * $y;
	return $hasil;
}
function pembagian($x,$y){
	$hasil = $x / $y;
	return $hasil;
}
function modulo($x,$y){
	$hasil = $x % $y;
	return $hasil;
}

$a = 30;
$b = 20;

echo "Bilangan 1 = ". $a ."<br>";
echo "Bilangan 2 = ". $b ."<br>"."<br>";
echo "<b>Berikut ini merupakan hasil dari setiap operasi <br><br></b>";


echo "<b>PENJUMLAHAN</b><br>Operator : + <br>";
echo "Hasil : ".penjumlahan($a,$b)."<br>"."<br>";

echo "<b>PENGURANGAN</b><br>Operator : - <br>";
echo "Hasil : ".pengurangan($a,$b)."<br>"."<br>";

echo "<b>PERKALIAN</b><br>Operator : * <br>";
echo "Hasil : ".perkalian($a,$b)."<br>"."<br>";

echo "<b>PEMBAGIAN</b><br>Operator : / <br>";
echo "Hasil : ".pembagian($a,$b)."<br>"."<br>";

echo "<b>MODULUS</b><br>Operator : % <br>";
echo "Hasil : ".modulo($a,$b)."<br>"."<br>";
?>