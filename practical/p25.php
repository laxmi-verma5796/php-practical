<?php
$numbers = [12,45 -7, 22, 0, 89, 5, -15, 38];
$smollest = $numbers[0];
$largest = $numbers[0];
foreach ($numbers as $num){
    if  ($num < $smollest){
        $smollest = $num;
    }
    if ($num > $largest){
        $largest = $num;
    }
}
echo "Array: [" . implode(", ", $numbers) . "]<br>";
echo "Smollest number: " . $smollest . "<br>";
echo "Largest number:" . $largest . "<br>";

?>