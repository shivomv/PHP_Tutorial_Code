<?php
$emp = array(
array(1,"Krishna","Manager",50000),
array(2,"Sachin","Selesman",20000),
array(3,"Krishna","Computer Operator",12000),
array(4,"Rohan","Worker",10000),
);
for($row = 0; $row < 4; $row++){
    for($col = 0; $col < 4; $col++){
    echo $emp[$row][$col]." ";
    } 
    echo "<br>";
}
?>