<?php
$countries = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "Italy" => "Rome",
     "Spain" => "Madrid",
    "Japan" => "Tokya",
);
$searchCapital = "Tokya";
$country = array_search($searchCapital, $countries);
if ($country  !== false){
    echo "The capital '$searchCapital' belongs to: $country\n";

}else {
    echo "Capital  '$searchCapital'not found in the array.\n ";
}


?>