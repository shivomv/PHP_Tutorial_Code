<?php
function square($n, $m){
return "$n for $m";
}
$a = [1, 2, 3, 4, 5];
$b = ['lemon', 'orange', 'banana', 'apple', 'guava'];
$newArray = array_map('square', $a, $b);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>