<?php

session_start();

/*print_r($_SESSION);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
      if(isset($_SESSION["favcolor"]))
      {
       echo "Favorite color : ".$_SESSION["favcolor"];
      }
    ?>
</body>
</html>