<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>php.request.php</title>
</head>
<body>
    <form mathod = "post" action = "php_request.php">
        Name : <input type = "text" name = "fname ">
        Last Name : <input type = "text" name = "Iname">
        <input type = "submit" value = "Submit">
</form>
<?php
 if ($_SERVER["REQUTEST_METHOO"] == "POST"){
    $name = $_REQUEST['fname'];
    $lname = $_REQUEST['Iname'];

    if (empty($name )) {
        echo "Name is empty";
    } else {
        echo $name . "" .$Iname;
    }
    }
 ?>
 
    
</body>
</html>