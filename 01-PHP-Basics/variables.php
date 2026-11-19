<?php
    $id = 65671;
    $name = "Sor Viksal";
    $age = 21;
    $isStudent = false;
    $language = "PHP";

    echo "ID: $id<br>";
    echo "Name: $name<br>"; 
    echo "Age: $age<br>";
    echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>";
    echo "Language: $language<br>";
    $x = 10;
    $y = 5;
    function myTest(){
        global $x, $y;
        $y = $x + $y;

    }
    myTest();
    echo "Value of y: $y<br>"; // Outputs 15

    $configTimeout = 30;

    function getConfigTimeout() {
        global $configTimeout;
        echo "Timeout from globals: " . $configTimeout . "<br>";
    }
    getConfigTimeout();
?>