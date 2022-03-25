<?php
function parity($int) {
  $count = count($int);

  if($count > 3){
    $odds = [];
    $evens = [];
    foreach ($int as $i) {
        if ($i % 2) array_push($odds, $i);
        else array_push($evens, $i);
    }
    return count($evens) === 1 ? $evens[0] : $odds[0];
  }else{
      return false;
  }
  
}

$ex1 = [2, 4, 0, 100, 4, 11, 2602, 36];
$ex2 = [160, 3, 1719, 19, 11, 13, -21];
$ex3 = [11, 13, 15, 19, 9, 13, -21];


var_dump(parity($ex1));
echo "</br>";
var_dump(parity($ex2));
echo "</br>";
var_dump(parity($ex3));