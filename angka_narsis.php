<?php 

function angka_narsis(int $num): bool {
  $arr   = str_split($num);
  $ncount = count($arr);
  $sum = 0;

  foreach($arr as $n){
    $sum += pow((int)$n, $ncount);
  }	
	
  return $sum==$num;
}

$ex1 = 153;
$ex2 = 111;

var_dump(angka_narsis($ex1));
var_dump(angka_narsis($ex2));