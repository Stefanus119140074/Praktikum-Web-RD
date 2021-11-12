<?php
/*function urut($nama){
	$luas= count($nama);
		for($i=0; $i<$luas;$i++){
			for($j=0; $j<$luas-1;$j++){
			
			if($nama[$j]>$nama[$j+1]){
				$temp= $nama[$j+1];
				$nama[$j+1]=$nama[$j];
				$nama[$j]= $temp;
			}
			}
		}
		return $nama;
	}

$nama=["Zhongli","Hu Tao","Jean","Diluc","Raiden Shogun","Kaedehara Kazuha","Qiqi","Bennet","Rosaria","Xingqiu"];
echo implode(', ',$nama);*/
function urut($nama){
sort($nama);
$clength = count($nama);
for($x = 0; $x < $clength; $x++) {
  echo $nama[$x];
  echo "<br>";

}
}
function data($nama){
$clength = count($nama);
for($x = 0; $x < $clength; $x++) {
  echo $nama[$x];
  echo "<br>";

}
}


$nama=["Zhongli","Hu Tao","Jean","Diluc","Raiden Shogun","Kaedehara Kazuha","Qiqi","Bennet","Rosaria","Xingqiu"];
echo "Data Sebelum Diurut :"."<br>";
data($nama);
echo "<br>"."<br>"."<br>";


echo "Data SesudahDiurut :"."<br>";
urut($nama);
?>