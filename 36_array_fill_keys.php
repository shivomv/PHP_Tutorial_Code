<?php
$a = array("a","b","c", "d","e");
$newArray = array_fill_keys($a, "Testing");
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>