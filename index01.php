<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Array ( เรียนวันที่ 4/12/2568 )</title>
</head>
<body>
    <h1>ทดสอบ Index Array </h1>
    <?php
    $cars = array("Volvo","BMW","Toyota");
    echo "I like". $cars[0].",".$cars[1]."and".$cars[2].".";

    ?>
    <h2> ทดสอบ Array แบบ Associative Arrays</h2>
    <?php
    $age = array ("Peter " => "35","Ben" => "37","Joe" => "43",
    "Mon" =>"78");
    echo "Peter is ". $age['Peter'] . "Years old."."<br>";
    echo "Ben is ". $age['Ben'] . "Years old."."<br>";
    echo "joe is ". $age['Joe'] . "Years old."."<br>";
    ?>
    <h3> การใช้ For กับ index Arrays </h3>
    <?php
         $fruits = array ("แอปเปิล", "มะละกอ", " กล้วย", "ส้ม"," องุ่น", " มังคุด", "ทุเรียน");
         $arrlen = count($fruits);

             for ($x = 0; $x < $arrlen ; $x++) {
                  echo $fruits[$x];
                  echo "<br>\n";
                 }
    ?>
    <h4> การใช้ Foreach กับ Index Arrays </h4>
    <?php
         $fruits = array ("แอปเปิล", "มะละกอ", " กล้วย", "ส้ม"," องุ่น", " มังคุด", "ทุเรียน");
         foreach ($fruits as $value){
            echo $value;
            echo "<br>\n";
         }
         ?>
    <h5> การใช้ Foreach กับ  Arrays แบบ Associative Arrays</h5>
    <?php
         $age = array ("Peter" =>"35", "Ben" =>"37","Joe" =>"43","Mon" =>"19");

            foreach ($age as $x => $x_value ){
              echo "Key =" . $x . ", Value = " . $x_value;
              echo "<br>\n";
            }
    ?>
     <h6> การใช้  Array 2 มิติ (Two - Dimension Array)</h6>
     <?php
         $cars = array (
            array("Volovo" , 22 , 18);
            array("BMW" , 15 , 13,30,75);
            array("Saad" , 5 , 2);
            array("Land Rover " , 17 , 15, 180);
         );
         $rows = count ($cars);
         for ($row = 0; $row < $rows; $row++){
            echo"<p> <b> Row number $row</b> </p>";
            echo"<ul>";
            $cols = count ($cars[$row]);
            for ($col = 0; $col < cols ; $col++){
                echo "<li>" . $cars[$row][$col] . "</li>";
            }
            echo"</ul>";
         }
         ?>

         

</body>
</html>