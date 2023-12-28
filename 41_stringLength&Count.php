<?php

$str = "hello I am Shivom Verma";

$length = strlen($str);
echo $length."<br>";

$wc = str_word_count($str);
echo $wc."<br>";

$ssc = substr_count($str,"a");
echo $ssc;



?>