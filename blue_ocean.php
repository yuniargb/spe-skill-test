<?php
function blueOcean($arr,$param){
    $newArr = [];
    foreach($arr as $val){
        if($val != $param){
            $newArr[] = $val;
        }
    }
    return $newArr;
}

$arr1 = [1,2,3,4,6,10];
$param1 = 1;
$arr2 = [1,5,5,5,5,3];
$param2 = 5;

var_dump(blueOcean($arr1, $param1));
echo "</br>";
var_dump(blueOcean($arr2, $param2));
