<?php

define("BASIC_MEMBER",111);
echo BASIC_MEMBER;
echo 'BASIC_MEMBER';
echo "BASIC_MEMBER";
echo ("<br>");
$var=4;
echo $var;
echo ("<br>");
echo '$var';
echo ("<br>");
echo "$var";

$var2=(int)4.2;

$var3=true;

var_dump($var2);

echo ("<br>");

var_dump($var3);

echo ("<br>");

$var4=(bool)"true";
echo $var4;

echo ("<br>");

$x=10;
$y=6;
echo "sum",($x+$y);
echo ("<br>");

$a=2;
$b=4;
echo $b**$a;
echo ("<br>");

$str="******hello BCA";
$str1="hi";
echo $str." ".$str1;
echo ("<br>");
echo strtolower($str);
echo ("<br>");
echo trim($str);
echo ("<br>");
echo trim("**Hello**BCA**","*");
echo ("<br>");
echo trim($str,"*");
echo ("<br>");

$str6="ABCDEFGH";
echo substr($str6,-3);
echo ("<br>");

echo date('d-m-y',strtotime("next sunday"));


?>