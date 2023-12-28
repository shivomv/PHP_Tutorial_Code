<?php
$fruit1 = ['orange', 'banana', 'apple','grapes'];
$fruit2 = ['1', '2'];
array_splice($fruit1,1,2,$fruit2);
echo "<pre>";
print_r($fruit1);
echo "</pre>";


?>