
<?php

$bill = array(
"Name" => "Shivom",
"Product" => "Book",
"Price" => 50,
);
$new = array_flip($bill);
echo "<pre>";
print_r($new);
echo "</pre>";

?>