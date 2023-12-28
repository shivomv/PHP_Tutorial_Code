<?php
$str ="Hello I am Shivom Verma a developer.Shivom";

$pos = strpos($str,"Shivom");
$revpos = strrpos($str,"Shivom");
$stripos = stripos($str,"SHIVOM");
$strripos = strripos($str,"SHIVOM");

echo $pos."<br>";
echo $revpos."<br>";
echo $stripos."<br>";
echo $strripos."<br>";


?>