<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!--action is a perticular method in which we can enter the file name, where 
    the data can go-->
  
     <!--SERVER variable is use for check the HTTP CONNECTION
    SERVER INFORMATION,HOST INFORMATION,URL INFORMATION-->
    

    <!--<form action="19_test_form.php" method="server">

        Name : <input type="text" name="first_name"><br><br>
        Age : <input type="text" name="age"><br><br>
         <input type="submit" name="save"><br><br>
     </form>
    -->
  


    <!--IN CASE WE WANT TO PRINT THE DATA IN THE SAME PAGE
    THEN FOLLOW THE BELOW PROCESS-->
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
        Name : <input type="text" name="first_name"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit" name="save"><br><br>
    </form>

    <?php
    
    if(isset($_POST['save']))
    {
       echo $_POST['first_name'];
       echo "<br>";
       echo $_POST['age'];

    }

    ?>
</body>
</html>