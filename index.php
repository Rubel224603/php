<?php 

use App\classes\Home;
use App\classes\Student;
use App\root\Teacher;

include "vendor/autoload.php";

    $homeObj = new Home();
    echo $homeObj->display();
    echo "<br>";

    //print_r( $homeObj->testArrayMethod());
    echo "<br>";
    //var_dump($homeObj->testArrayMethod());

    $teacherObj  = new Teacher();
    $teacherObj->exam();
    echo '<br>';

    $stdObj = new Student();
    $stdObj->exam();
            
?>