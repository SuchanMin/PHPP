<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ฟอร์มลงทะเบียน</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f2f4f8;
        }

        .container{
            width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2, h3{
            text-align: center;
            color: #333;
        }

        label{
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        select{
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .option-group{
            margin-top: 5px;
        }

        .option-group input{
            margin-right: 5px;
        }

        button{
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover{
            background: #0056b3;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th{
            background: #007bff;
            color: white;
            padding: 8px;
        }

        table td{
            padding: 8px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .success{
            background: #e9f7ef;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">

<h2>ฟอร์มลงทะเบียน</h2>

<form method="post">
    <label>ชื่อ - นามสกุล</label>
    <input type="text" name="fullname" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>หัวข้ออบรม</label>
    <select name="course">
        <option value="AI สำหรับงานสำนักงาน">AI สำหรับงานสำนักงาน</option>
        <option value="Excel สำหรับการทำงาน">Excel สำหรับการทำงาน</option>
        <option value="การเขียนเว็บด้วย PHP">การเขียนเว็บด้วย PHP</option>
    </select>

    <label>อาหารที่ต้องการ</label>
    <div class="option-group">
        <input type="checkbox" name="food[]" value="ปกติ"> ปกติ
        <input type="checkbox" name="food[]" value="มังสวิรัติ"> มังสวิรัติ
        <input type="checkbox" name="food[]" value="ฮาลาล"> ฮาลาล
    </div>

    <label>รูปแบบการเข้าร่วม</label>
    <div class="option-group">
        <input type="radio" name="type" value="Onsite" required> Onsite
        <input type="radio" name="type" value="Online"> Online
    </div>

    <br>
    <button type="submit" name="submit">ลงทะเบียน</button>
</form>

<?php
if (isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $type = $_POST['type'];

    if (isset($_POST['food'])){
        $food = implode(",", $_POST['food']);
    }else{
        $food = "ไม่ระบุ";
    }

    if ($type == 'Onsite'){
        $price = 1500;
    }else{
        $price = 800;
    }

    $date = $fullname."|".$email."|".$course."|".$food."|".$type."|".$price."\n";
    file_put_contents("register.txt", $date, FILE_APPEND);

    echo "<div class='success'>";
    echo "<h3>ลงทะเบียนสำเร็จ</h3>";
    echo "ชื่อ : $fullname<br>";
    echo "อีเมล : $email<br>";
    echo "หัวข้ออบรม : $course<br>";
    echo "อาหาร : $food<br>";
    echo "รูปแบบ : $type<br>";
    echo "ค่าลงทะเบียน : ".number_format($price,2)." บาท<br>";
    echo "</div>";
}
?>

<h3>รายชื่อผู้ลงทะเบียนทั้งหมด</h3>

<?php
if (file_exists("register.txt")){
    $lines = file("register.txt");

    echo "<table>
            <tr>
                <th>ชื่อ</th>
                <th>Email</th>
                <th>หัวข้อ</th>
                <th>อาหาร</th>
                <th>รูปแบบ</th>
                <th>ค่าลงทะเบียน</th>
            </tr>";

    foreach ($lines as $line){
        list($_name, $_email, $_course, $_food, $_type, $_price) = explode("|", trim($line));

        echo "<tr>
                <td>$_name</td>
                <td>$_email</td>
                <td>$_course</td>
                <td>$_food</td>
                <td>$_type</td>
                <td>".number_format($_price,2)."</td>
              </tr>";
    }
    echo "</table>";
}
?>

</div>

</body>
</html>
