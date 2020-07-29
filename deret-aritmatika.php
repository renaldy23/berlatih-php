<?php
function tentukan_deret_aritmatika($arr) {
	
	$itung = count($arr);

	if ($itung < 5) {
		if ($arr[1]-$arr[0] == $arr[3]-$arr[2]) {
			echo "true<br>";
		}
		else{
			echo "false<br>";
		}
	}
	else{
		if ($arr[2]-$arr[1]==$arr[4]-$arr[3]) {
			echo "true<br>";
		}
		else{
			echo "false<br>";
		}
	}

}

// TEST CASES
tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
tentukan_deret_aritmatika([2, 4, 6, 8]); //true
tentukan_deret_aritmatika([2, 6, 18, 54]);// false
tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>