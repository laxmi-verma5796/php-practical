<?php

$numbers  = array();

for ($i = 0; $i < 10;  $i++){
    $numbers[$i] = $i + 1;
}

for ($i = 0; $i < 10; $i++){
    echo "Index $i: " . $numbers[$i] . "<br>";

}
?>