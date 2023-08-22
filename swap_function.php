<?php
function swapNum($a,$b)
{
echo "before the changes";
echo "<br>";
echo "the first number is $a";
echo "<br>";
echo "the second number is $b";
echo "<br>";

echo "after the changes";
echo "<br>";
$swap=$a;
$a=$b;
$b=$swap;
echo "the first number is $a";
echo "<br>";
echo "the second number is $b";
}
$x=50;
$y=100;
$calculate=swapNum($x,$y);

?>