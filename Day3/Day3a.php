<?php

echo "<table border='1'>";
for($i=1; $i<=20; $i++)
{
    echo "<tr>";
    if($i%2==0)
    {
        echo "<td bgcolor='green'>$i</td>";
    }
    else
    {
        echo "<td bgcolor='orange'>$i</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>