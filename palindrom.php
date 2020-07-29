<?php

function palindrome_angka($angka) {
  $result = "";
  $strAngka = strval($angka);
  $reverseString = "";

    for ($i=strlen($strAngka)-1; $i >=0 ; $i--) { 
    	$reverseString .= $strAngka[$i];
    
    }

    if ($reverseString == $strAngka) {
      $angka +=1;
      return $angka."<br>";
    }

   
    
    while (true) {
  	$strAngka = strval($angka);
  	$reverseString ='';

  	for ($i=strlen($strAngka)-1; $i >=0 ; $i--) { 
  		$reverseString .= $strAngka[$i];
  	}

  	if ($reverseString == $strAngka) {
  		global $result;
  		$result = $strAngka."<br>";
  		return $result;
  	}
  	else{
  		$angka+=1;
  	}


  }
  
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
