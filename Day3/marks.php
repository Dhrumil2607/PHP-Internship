<?php

$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];
$f = $_POST['txt6'];

$total=$b+$c+$d+$e+$f;

$avg=$total/5;

echo "<h1>Marksheet</h1>";
echo "<br>Student Name: $a";
echo "<br><br>";

echo "<br>Maths: $b";
echo "<br>Science: $c";
echo "<br>English: $d";
echo "<br>Gujarati: $e";
echo "<br>Social Science: $f";

echo "<br><br> <h3>Total Marks: $total/500</h3>";

if($avg>80)
{
    echo "<h2>Congratulations! You Passed with FIRST CLASS</h2>";
}
else if($avg>70)
{
    echo "<h2>Congratulations! You Passed with SECOND CLASS</h2>";
}
else if($avg>50)
{
    echo "<h2>Congratulations! You Passed with PASS CLASS</h2>";
}
else
{
    echo "<h2>Sorry Dear! You have to Improve yourself. You FAILED</h2>";
}

?>