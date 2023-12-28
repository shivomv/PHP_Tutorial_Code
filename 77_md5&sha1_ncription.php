<?php
$pas = "This is my password Password";
echo "<h2>Incription </h2><br>";
echo "Plan text: ".$pas."<br>";
echo "md5 binary incription: ".md5($pas,TRUE)."<br>";
echo "md5 hex incription: ".md5($pas)."<br>";
echo "sha1 binary incription: ".sha1($pas,TRUE)."<br>";
echo "sha1 hex incription: ".sha1($pas)."<br>";

?>