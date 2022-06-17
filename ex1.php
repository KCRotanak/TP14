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
    define("EMAIL", "me@example.com"); // Valid constant name
    echo EMAIL; // Displays "me@example.com"

    define ("myCon", true);
    if (myCon){ }// Evaluates to true

    define("ONECONSTANT", "some value"); // Invalid constant name
    
    define("CONSTANT", "Hello world.");
    echo CONSTANT; // outputs "Hello world."
    define("Constant", "Hello world.");
    echo Constant;
    //echo Constant; // outputs "Constant" and issuesanotice.
    define ("GREETING", "Hello world.");
    echo GREETING; // outputs "Hello world."
    define ("Greeting", "Hello world.");
    echo Greeting; // outputs "Hello world." 
?>
</body>
</html>