<?php
$fruits =array(
    "Apple" => 80,
    "Banana" => 40,
    "Mango"  => 50,
    "Orange" => 60,
    "lichi" => 30,
);
asort($fruits);
echo "Sorted by value (asort):\n";
foreach ($fruits  as $fruit =>  $price){
    echo "$fruit => $price\n";

}
echo "<br>";
echo  "\n";
ksort($fruits);
echo "Sorted by key (ksort):\n";
foreach ($fruits as $fruit =>  $price){
    echo "$fruit =>  $price\n";
}


?>