<?php
function pasangan_terbesar($angka){
	
	$array =[];
	$nilai = strval($angka);

	for ($i=0; $i < strlen($nilai)-1 ; $i++) { 
		$pasangan = "";
		for ($j=$i; $j <= $i+1 ; $j++) { 
			$pasangan .=$nilai[$j];
		}
		array_unshift($array, $pasangan)."<br>";
	}

	return max($array)."<br>";

}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>