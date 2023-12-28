<?php
$fruit1 = ['orange', 'banana', 'apple','grapes'];
$fruit2 = ['orange', 'apple', "mango"];
$intersect = array_uintersect($fruit1,$fruit2);
echo "<pre>";
print_r($intersect);
echo "</pre>";


?>