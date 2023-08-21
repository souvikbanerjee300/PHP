<?php
  echo "this is the time for foreach loop <br>";
  $student= array("souvik","susmita","ruban","soumita");


// this is normal for loop functionality
  /*for($i=0;$i<count($student);$i++)
  {
    echo "$student[$i]";
    echo "<br>";
  }*/


  //this is foreach function
  foreach($student as $tihians)
  {
    echo "$tihians<br>";
  }

?>