<?php
function avarage($a,$b,$c){
    echo "<h1>".($a+$b+$c)/3,"</h1>";
}
function greet($fname="first",$lname=" last"){
    echo "Hello $fname $lname.<br>";
}

avarage(10,20,30);
greet("Shivom","Verma");
greet();
?>