<?php

$a=array('php','c','c++','java','Android');

//count
echo count($a);

//array_count_values
$new=array_count_values($a);
foreach($new as $key => $value) 
{
    echo "<br>$key -> <strong>$value</strong>";
}

//array_sum
$myarray=array(1,2,3,4,5);
echo "<br>";
echo array_sum($myarray);

//array_product
echo "<br>";
echo array_product($myarray);

//array_reverse
$rev=array_reverse($a);
echo "<pre>";
print_r($rev);

//in_array
$temp = in_array('php',$a);
echo $temp;

//array_rand
$index=array_rand($a,2);    //Returns Array Index
foreach($index as $key => $value)
{
    echo "<br>$key - <strong>".$a[$value]."</strong>";
}

//array_unique
echo "<br>";
print_r(array_unique($a));

//array_merge
$NewArr=array_merge($a,$myarray);
print_r($NewArr);

//array_search
$check=array_search('Android', $a);
echo "$check";    // Return Index

//range
$arr=range("11", "20");
foreach($arr as $key => $value)
{
    echo "<br>$key - $value";
} 

//sort
sort($a);
echo "<br>";
print_r($a);

//rsort
rsort($a);
print_r($a);

//asort
asort($a);
print_r($a);

//ksort
$b=array(
    "banana" => "Yellow",
    "apple" => "Red",
    "mango" => "Green");
ksort($b);
foreach($b as $key => $value) 
{
    echo "<br>$key - $value";
}

//krsort
krsort($b);
foreach($b as $key => $value) 
{
    echo "<br>$key - $value";
}

//shuffle
shuffle($a);      //Shuffle the array
foreach ($a as $key => $value) 
{
    echo "<br>$value";
}

//array_key_exists
$arr1= array("a" => "apple", "b" => "banana");
echo "<br>";
echo array_key_exists('a',$arr1);

//array_change_key_case
$uppercase=array_change_key_case($b,CASE_UPPER);
echo "<br>";
print_r($uppercase);

//array_combine
$NewVar2=array_combine($a, $myarray);
print_r($NewVar2);

//end
echo end($a);

//compact
$name = "Dhrumil";
$subject = "php";
$arr3 = compact("name", "subject");
echo "<br>";
print_r($arr3);

//array_flip
$fliparray=array_flip($b);
print_r($fliparray);

//array_diff
$c=array("dhrumil","c","java","php");
$diff = array_diff($a, $c);
print_r($diff);

//
$arr11=array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr22=array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr11,$arr22));

//array_values
$myarr11=array_values($b);
foreach($myarr11 as $key => $value) 
{
    echo "<br>$key - $value";
}

//array_push
array_push($a,"c#","python");
echo "<br>";
print_r($a);

//array_pop
array_pop($a);  //Remove
print_r($a);

//explode
$mystring="I Love PHP Language";
$arr44=explode(" ",$mystring);
print_r($arr44);

//implode
$mystring2=implode(" ", $a);
echo $mystring2;

?>