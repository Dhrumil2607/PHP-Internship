<?php

//Numerical Array
//Method1
$a[0]=10;
$a[1]=20;
$a[2]=20.50;
$a[3]="C";
$a[4]="4";

//Method2 
//Index Dynamic Array
$a[]=10;
$a[]=20;
$a[]=20.50;
$a[]="C";
$a[]="4";

//Method3 //Always use this methos to use array
$a=array(10,20,30,"C","C++",10.50, "php");

//Print Array value
echo "$a[3]";

//print whole array
for($i=0; $i<count($a); $i++)
{
    echo "<br>$a[$i]";
}

//using while
$x= 0;
while($x<count($a))
{
    echo "<br>$a[$x]";
    $x++;
}

//using do while 
$i=0;
do 
{
    echo "<br>$a[$i]";
    $i++;
}
while($i<count($a));

$sum=array_sum($a);
echo "<br>$sum";

$sum1=array_product($a);
echo "<br>$sum1<br>";

//3 inbuilt functions to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>