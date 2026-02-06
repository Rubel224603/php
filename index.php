<?php 

use App\classes\Home;
require_once "vendor/autoload.php";

$homeObj = new Home();
echo $homeObj->display();
echo "<br>";
print_r( $homeObj->testArrayMethod());
echo "<br>";
var_dump($homeObj->testArrayMethod());
    
?>