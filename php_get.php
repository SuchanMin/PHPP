<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> การใช้ PHP $_GET </h1>
     <from method = "get"  action = "php_get.php">
        Name : <input type = "text" name = "fname"><br>
        Last Name : <input type = "text " name  = " Iname "> <br>
        <input type = "submit " value = " Submit">
</from>

<?php
 if ($_SERVER ["REQUESMETHOO"]=="GET"){
 if (isset($_GET['fname']) && isset($_GET['Iname '])){
    $name = $_GET ['fname'];
    $Iname = $_GET ['Iname'];
    if (empty($name)){
        echo "Name is empty";
    }else{
        echo $name ." " .$lname ;
    }
   }
  }

 ?>
    
</body>
</html>