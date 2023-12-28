<?php
$fruit = ['orange', 'banana', 'apple','grapes'];
array_shift($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";

array_unshift($fruit,"mango");
echo "<pre>";
print_r($fruit);
echo "</pre>";

?>