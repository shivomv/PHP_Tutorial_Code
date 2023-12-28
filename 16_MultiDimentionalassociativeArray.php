<?php
$marks = array(
"Krishana" => array("physics" => 85, "chemistry" => 89, "math" => 78),
"Salman" => array("physics" => 68, "chemistry" => 79, "math" => 73),
"Mohan" => array("physics" => 62, "chemistry" => 92, "math" => 67)
);

echo "<table border='2px' cellpadding='5px'>";
foreach($marks as $key => $v1){
echo "<tr>
<td>$key</td>" ;
foreach($v1 as $v2){
echo "<td> $v2 </td>";
}
echo "</tr>";
}
echo "</table>";
?>