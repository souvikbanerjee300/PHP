<?php
// string

$name="souvik";
echo ("my name is $name");
echo ("<br>");

// integer

$a=15;
$b=20;
echo var_dump($a);
echo("<br>");
echo($a+$b);
echo ("<br>");

// Float

$c=15.20;
echo ($c);
echo ("<br>");

// Boolean

$d = true;
$e = false;
echo var_dump($d);
echo("<br>");
echo var_dump($e);
echo ("<br>");

// var_dump is a special function which is determine the type of the variable.

// object - it is the instance of the class

// array --  it is used to store the multiple values in the single variables.

$freinds = array("souvik","ruban","soumita","susmita");
echo var_dump($freinds);
echo("<br>");
echo $freinds[0];
echo ("<br>");

//NULL

$value=NULL;

echo var_dump($value);
?>