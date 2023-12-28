<?php
$emp = [
[1, "Krishana", "Manager", 50000],
[2, "Salman", "Salesman", 20000],
[3, "Mohan", "Computer Operator", 12000],
[4,"Amir", "Driver", 5000]
];

echo "<table border='1px' cellpadding='5px' cellspacing='0px'>";
foreach($emp as list($id,$name, $designation,$salary)){
echo "<tr><td>$id</td> <td>$name</td><td> $designation</td><td> $salary</td>";
}
echo "</table>";

?>