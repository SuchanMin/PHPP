<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>php_globals_var.php</title>
</head>
<body>
    <h1> การใช้ $GLOBALS </h1>
    <?php
       $x = 75;
       $y = 25;

       function addition(){
        //$x = 200 ; $y = 500;
        $GLOBALS['z'] = $GLOBALS ['x'] + $GLOBALS['y'];
        //global $x, $y,$z;
        //$Z = $x + $y;
       }
       addition();
       echo $z;
       ?>
    <h1> การใช้   $_SERVER </h1>
    <?php
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?>
    
</body>
</html>