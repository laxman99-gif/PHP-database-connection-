<?php
//session start
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //setting the session variables
    $_SESSION["favcolor"] = "Green ";
    $_SESSION["favanimal"] = "cat";
    echo "session variable are set";
    ?>
    <?php
    //Echo variables that we set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>";
?>
</body>
</html>