<?php
$fruit1 = ['orange', 'banana', 'apple','grapes'];
$fruit2 = ['orange', 'apple', "mango"];
$diff = array_diff($fruit1,$fruit2);
echo "<pre>";
print_r($diff);
echo "</pre>";


?>