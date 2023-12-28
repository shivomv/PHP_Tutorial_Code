<?php
$fruit1 = ['orange', 'banana', 'apple','grapes'];
$fruit2 = ['mango', $fruit1];
$fruit =  array_merge_recursive($fruit1,$fruit2);
echo "<pre>";
print_r($fruit);
echo "</pre>";

