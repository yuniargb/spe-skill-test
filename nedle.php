<?php
function findNeedle($haystack,$needle){
    return array_search($needle,$haystack);
}

$haystack = ["red", "yee", "yellow", "blue", "grey"];
$needle = "blue";

var_dump(findNeedle($haystack, $needle));
