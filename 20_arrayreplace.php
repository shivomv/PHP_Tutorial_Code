<?php
$fruit = ['orange', 'banana', 'apple','grapes'];
$veggie = ['carrot', 'pea'];
$newArray = array_replace($fruit, $veggie);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>