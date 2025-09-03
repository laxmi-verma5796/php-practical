<?php
$students  = array(
    "laxmi" => 85,
    "sumit" => 78,
    "priyanshu" => 92,
    "Ragini" => 88,
    "Shalini" => 75 
);
$students["sumit"] = 90;
echo "Updated student marks:\n";
echo "<br>";
foreach ($students as $name => $marks) {
    echo "$name  scored $marks marks.\n";
}


?>