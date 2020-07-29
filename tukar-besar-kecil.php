<?php
function tukar_besar_kecil($string){

	$hasil = "";
	for ($i=0; $i < strlen($string); $i++) { 
		
		if (ctype_upper($string[$i])==true) {
			
			$hasil .= strtolower($string[$i]);
		}
		else{
			$hasil .= strtoupper($string[$i]);
		} 
	}
	echo $hasil."<br>";

}

// TEST CASES
tukar_besar_kecil('Hello World'); // "hELLO wORLD"
tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>