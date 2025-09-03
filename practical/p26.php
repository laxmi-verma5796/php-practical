<?php
$numbers = [10, 20, 30, 40, 50, 60];


echo "<strong>Original Array:</strong> [" . implode(", ", $numbers) . "]<br><br>";
echo "<strong>Reversed  Array (without using array_reverse()):</strong> [";
for ($i = count($numbers) - 1; $i >= 0; $i--){
    echo $numbers[$i];
    if ($i  != 0){
        echo ", ";
    }
}
echo  "]<br><br>";
$reversed  = array_reverse($numbers);
echo "<strong>Reversed Array  (using array_reverse()):</strong> [" . implode(", ", $reversed) . "]<br>";

?>