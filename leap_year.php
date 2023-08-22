<?php



function Leapyear($year)
{
  if(($year%4==0 && $year%100!=0)||($year%400==0))
  {
    echo "it's a leap year";
  }
  else
  {
    echo "it's not a leap year";
  }
  
}

$leap=2000;
$calculate=Leapyear($leap);
echo ($calculate);
?>