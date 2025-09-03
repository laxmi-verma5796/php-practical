<?php
echo "<h1>odd numbers  between 20 and 80 are:<br></h1>";
for($i = 20; $i <= 80; $i++){
    if($i % 2 != 0){
        echo $i ."<br>";
    }
}
?>