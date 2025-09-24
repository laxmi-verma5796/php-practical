<?php
if (isset($_GET['Name']) &&  ! empty($_GET['Name'])){
    $name = htmlspecialchars($_GET['Name']);
    echo "<h1>Hello, $name</h1>";

}else {
    echo  "<h1>Hello, Rahul</h1>";
}

?>
