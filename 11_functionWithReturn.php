<?php
function greet($fname="first",$lname=" last"){
    $a = "Hello $fname $lname.<br>";
    return $a;
}

$name =  greet("Shivom","Verma");
echo $name;
?>