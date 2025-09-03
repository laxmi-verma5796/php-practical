<?php

$array = array();
for ($i = 0; $i < 10; $i++){
    $array[$i] = $i + 1;
}
foreach($array as$index => $value){
    echo "index $index: $value<br>";
}
?>