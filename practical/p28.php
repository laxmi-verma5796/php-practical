<?php
$fruits = array("Apple", "Banana", "Orange", "grapes");
$searchvalue = "Banana";
if (in_array($searchvalue, $fruits)){
    echo "$searchvalue exists in the array . ";

}else{
    echo "$searchvalue dose nat exist in the array .";

}
?>