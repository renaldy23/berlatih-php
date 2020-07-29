<?php
function skor_terbesar($arr){

    $array = []; 
    for ($i=0; $i <count($arr) ; $i++) { 
      array_unshift($array, $arr[$i]["nilai"]); 
    }
    rsort($array);

    $hasil = [];
    for ($j=0; $j < count($array) ; $j++) { 
      $hasil = $arr[array_search($array[$j], array_column($arr, "nilai"))];
      echo "<pre>";
      print_r($hasil);
      echo "</pre>";
    }

 }
// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>