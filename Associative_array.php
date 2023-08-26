<?php
//index array

$arr=array("souvik","susmita","ma","baba");
echo "<br>";
echo $arr[0];
echo "<br>";

echo "associative array in php";
echo "<br>";
$favsubject=array('souvik'=>'sql','susmita'=>'math','88'=>'coding');
echo $favsubject['souvik'];
echo "<br>";
echo $favsubject['88'];     // key value also contains numbers.

foreach($favsubject as $key=>$value)
{
    echo ("<br> The favourite subject of $key is $value"); // loop in array.
}
?>