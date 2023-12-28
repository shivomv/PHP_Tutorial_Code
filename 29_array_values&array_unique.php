<?php
$fruit1 = ["fr1"=>'orange', "fr2"=>'banana', "fr3"=>'apple',"fr4"=>'orange'];

$av = array_values($fruit1);
$aunique = array_unique($fruit1);
echo "<pre>";
print_r($av);
print_r($aunique);
echo "</pre>";


?>