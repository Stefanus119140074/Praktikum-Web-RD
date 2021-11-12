<?php

function prima($nilai){
for($i=1;$i<=50;$i++){
	$a=0;
	for($j=1;$j<=$i;$j++){
	if($i%$j==0){
		$a++;
	}
}

if($a==2){
	echo $i."<br>";
}

}
}
echo "<b>Bilangan prima 1-50 :<br></b>";
prima(50);

?>