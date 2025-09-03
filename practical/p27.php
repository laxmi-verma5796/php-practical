<?php
$numbers = array(12, 5, 8, 1, 22, 7);
sort($numbers);
echo "Asending order: ";
print_r($numbers);
echo "<br>";
$numbers = array(12, 5, 8, 1, 22, 7);
rsort($numbers);
echo "Desending order: ";
print_r($numbers);
?>