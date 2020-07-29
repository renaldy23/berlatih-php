<?php

function papan_catur($angka) {
	for ($i=0; $i <  $angka; $i++) { 
		for ($j=0; $j < ($angka*2)-1 ; $j++) { 
			// echo $i+$j;
			// echo " ";
			if(($i+$j)%2 == 0){
				echo "#";
			}
			else
			{
				echo "&nbsp";
			}

		}
		echo "<br>";
	}
}

// TEST CASES
// papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

// papan_catur(8);
 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>