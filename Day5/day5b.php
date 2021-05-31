<?php

//associative array
//key=value
//method 1
$a[0]=10;
$a['c']="Computer";
$a['php']="Web Dev";
$a[10]="Tem";
$a[50]=50.50;

//method 2
//always use this method to create an array
$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "web dev",
    10 => "ten",
    50 => 50.50
);

//print value
echo "C for ".$a['c'];

foreach ($a as $value)
{
    echo "<br>value is $value";
}

foreach ($a as $key => $value)
{
    echo "<br>key is <b>$key</b> and value is <b>$value</b>";
}

//3 inbuilt functions to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";


?>