<?php
$age=50;

switch($age)
{
    case ($age==5):
        echo ("The child is the kinder garden student.");
        break;

    case ($age>5 && $age<=15):
        echo ("The child is the madhyamik school student.");
        break;

    case ($age>15 && $age<=17):
        echo ("The child is the higher secondary school student. ");
        break;


    case ($age>17 && $age<=22):
        echo ("Congratulation!!! you are now adult and a college student.");
        break;
    
    default:
        echo ("please put the correct age.");
        break;

}

?>