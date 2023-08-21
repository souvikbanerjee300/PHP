<?php

echo "this is time for the function";

function sumMarks($marks)
{
    $sum=0;
    foreach($marks as $number)
    {
        $sum+=$number;

    }
    return $sum;
}

$souvik=[90,95,96,90,88];
$total= sumMarks($souvik);
echo "the total marks of souvik $total out of 500";

echo("<br>");

function totalMember($member)
{
    $sum=0;
    foreach($member as $number)
    {
        $sum+=$number;
    }
    return $sum;
    
}

$susmita=[1,1,1,1,1,1];
$total=totalMember($susmita);
echo "$total";

echo("<br>");

function avgMarks($marks)
{
    $sum=0;
    $i=1;
    foreach($marks as $value)
    {
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}

$subhasish=[98,90,96,98,100,87];
$average=avgMarks($subhasish);
echo "the total average of this student is $average";

?>

