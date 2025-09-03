<?php
$countries = array(
    "France" => "Paris",
    "Japan" => "Tokya",
    "Brazil" => "Brasilia",
    "Canada" => "Ottawa",
    "Australia" => "Canberra",
);
$countries["Germoy"] = "Berlin";
echo "<br>";
echo  "Update List of countries and their capitals:\n";
echo "<br>";
foreach ($countries as $country => $capital){
    echo "The capital  of $country is $capital.\n";
}

?>