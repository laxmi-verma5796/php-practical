<?php
$students  = array(
    "laxmi" => 85,
    "sumit" => 78,
    "priyanshu" => 92,
    "Ragini" => 88,
    "Shalini" => 75 
);
$keyTocheck = "laxmi";
if (array_key_exists($keyTocheck,  $students)){
    echo "The student '$keyTocheck' exists and scored {$students[$keyTocheck]} marks.";
}else {
    echo "The student  '$keyTocheck' dose not exist in the array.";
}



?>