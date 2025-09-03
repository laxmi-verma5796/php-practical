<?php
$array = [
    "b"  => "Banana",
    "a"  => "Apple",
    "d"  => "Mango",
    "c"  => "Charry",
    "e"  => "Grapes",
];
echo "Origial array:\n";
print_r($array);
echo "<br>";

//1.sort()
$temp = $array;
sort($temp);
echo "\n1. sort() - values Asending (Reindex keys):\n";
print_r($temp);
echo "<br>";

//2.rsort()
$temp = $array;
rsort($temp);
echo "\n2. rsort() - values Desending (Reindex keys):\n";
print_r($temp);
echo "<br>";

//3.asort()
$temp = $array;
asort($temp);
echo "\n3. asort() - values Asending (Keep keys):\n";
print_r($temp);
echo "<br>";

//4.arsort()
$temp = $array;
arsort($temp);
echo "\n4. arsort() - values Desending (Keep keys):\n";
print_r($temp);
echo "<br>";

//5.ksort()
$temp = $array;
ksort($temp);
echo "\n5. ksort() - Keys Asending :\n";
print_r($temp);
echo "<br>";

//6.krsort()
$temp = $array;
krsort($temp);
echo "\n6. krsort() - Keys Desending :\n";
print_r($temp);
echo "<br>";

//7.usort()
$temp = $array;
usort($temp, function($a, $b){
return strlen($a) <=> strlen($b);
});
echo  "\n7. usort() - Custom value sort (By string langth):\n";
print_r($temp);
echo "<br>";

//8.uasort()
$temp = $array;
uasort($temp, function($a, $b){
return strlen($a) <=>  strlen($b);
});
echo  "\n8. uasort() - Custom value sort (by string langth):\n";
print_r($temp);
echo "<br>";

//9.uksort()
$temp = $array;
uksort($temp, function($a, $b){
return strcmp($a, $b);
});
echo  "\n9. uksort() - Custom value sort (Alphabetical):\n";
print_r($temp);

?>