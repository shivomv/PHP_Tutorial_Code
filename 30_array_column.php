<?php
$marks = array(
"Krishana" => array("physics" => 85, "chemistry" => 89, "math" => 78),
"Salman" => array("physics" => 68, "chemistry" => 79, "math" => 73),
"Mohan" => array("physics" => 62, "chemistry" => 92, "math" => 67)
);
$newarray = array_column($marks,"physics");
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>