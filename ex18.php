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

if (isset($_POST['Submit'])){
  $emp_name=trim($_POST["emp_name"]);
  $emp_number=trim($_POST["emp_number"]);
  $emp_email=trim($_POST["emp_email"]);

    if ($emp_name == ""){
        $errorMsg ="error:You did not enteraname.";
        $code="1";
    }
    elseif ($emp_number == ""){
        $errorMsg="error:Please enter number.";
        $code="2";
    }
    //check if the number field is numeric
    elseif (is_numeric(trim($emp_number)) == false){
        $errorMsg="error:Please enter numeric value.";
        $code="2";
    }
    elseif (strlen($emp_number)<10){
        $errorMsg="error:Number should be atleast 9 digits.";
        $code="2";
    }
    //check if email field is empty
    elseif ($emp_email == ""){
        $errorMsg="error:You did not enteraemail.";
        $code="3";
    }//check for valid email
    elseif (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\. )+[a-zA-z]{2,6}$/i", $emp_email)){
                $errorMsg = 'error:You did not enteravalid email.';
        $code="3";
    }
    else{
        echo "Success";
        //final code will execute here.
    }
}

?>
<form action="register.php" method="get">
<br>Name: <input type="text" name="name">
<br>Number: <input type="amount" name="number">
<br>Email: <input type="email" name="email">
<br><input type="submit">
</form>

</body>
</html>