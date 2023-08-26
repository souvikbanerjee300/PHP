<?php

// creating a two dimensional array

echo "multidimensional array";
echo "<br>";
$multidim= array(
    array(2,3,4,5,6),
    array(7,8,9,10,11),
    array(12,13,14,15,16)

);
echo $multidim[0][0];
echo "<br>";

for($i=0;$i<count($multidim);$i++)
{
    for($j=0;$j<count($multidim[$i]);$j++)
    {
        echo $multidim[$i][$j];
        echo " ";
    }
    echo "<br>";
}


?>