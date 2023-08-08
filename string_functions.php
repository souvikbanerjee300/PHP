<?php

$name="Souvik is a good boy";
echo strlen($name);
echo ("<br>");

// this strlen function determines the length of the string including the white space.

echo ("the numbe of word "." in a string ".str_word_count ($name));

//str_word_count function determines the numnber of words in a string.

// if we concatenate the strings then we use the "." operator in php
echo ("<br>");

echo strrev($name);
echo ("<br>");

// strrev function used to reverse the string.

echo strpos($name,"Souvik");
echo ("<br>");

// strpos function identify the position of a word in a perticular string

echo str_replace("Souvik","baphun",$name);
echo ("<br>");

// str_replace function replace the old text with a new text.
// "old text" , "new text" , string name

echo str_repeat($name,4);
echo ("<br>");
echo "<pre>";
echo rtrim ("   my name is souvik     ");
echo ("<br>");
echo ltrim ("   my name is souvik   ");
echo "</pre>";

// ltrim removes the space from the left side
// rtrim removes the space from the right side 


?>