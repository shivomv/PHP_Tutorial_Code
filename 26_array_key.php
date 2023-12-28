<?php
$fruits = ['orange', 'banana', 'apple','grapes'];
$arraykeys = array_keys($fruits);
$array_key_first = array_key_first($fruits);
$array_key_last = array_key_last($fruits);
$array_key_exists = array_key_exists(2,$fruits);
$key_exists = key_exists(3,$fruits);
// $arraykays = array_keys($fruits);
// $arraykays = array_keys($fruits);
// $arraykays = array_keys($fruits);

echo "<pre>";
print_r($arraykeys);
echo "</pre>";
echo "<pre>";
print_r($array_key_first);
echo "</pre>";
echo "<pre>";
print_r($array_key_last);
echo "</pre>";
echo "<pre>";
print_r($array_key_exists);
echo "</pre>";
echo "<pre>";
print_r($key_exists);
echo "</pre>";


?>