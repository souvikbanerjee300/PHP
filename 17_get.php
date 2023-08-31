<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--action is a perticular method in which we can enter the file name, where 
    the data can go-->

    <!-- by the get method we can able to fetch the data but a problem
    is that all entered values is showing in the url and there have not 
    any privacy for the user.-->

    <form action="17_test_form.php" method="get">

       Name : <input type="text" name="first_name"><br><br>
       Age : <input type="text" name="age"><br><br>
        <input type="submit" name="save"><br><br>
    </form>
    
</body>
</html>