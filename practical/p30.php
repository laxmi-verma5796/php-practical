<?php

$countries = array(
    "France" => "Paris",
    "Japan" => "Tokya",
    "Brazil" => "Brasilia",
    "Canada" => "Ottawa",
    "Australia" => "Canberra",
);
echo "<br>";
echo  "List of countries and their capitals:\n";
echo "<br>";
foreach ($countries as $country => $capital){
    echo "The capital  of $country is $capital.\n";
}

?>