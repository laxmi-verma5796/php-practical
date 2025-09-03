<?php
$numbers = array(1, 2, 3, 2, 4, 5, 6, 1,);
$uniquenumbers = array_unique($numbers);
echo "Original array:\n";
print_r($numbers);
echo "<br>";
echo "\nArray after removing duplicates:\n";
print_r($uniquenumbers);

?>