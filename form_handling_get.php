<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Form</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to bottom, #6ecffb, #1e90ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .ocean-box {
            background: rgba(255, 255, 255, 0.25);
            border-radius: 20px;
            padding: 30px 40px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: none;
            margin: 8px 0 15px 0;
        }

        input[type="submit"] {
            width: 100%;
            background: #005f9e;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #004b7a;
        }
    </style>
</head>

<body>
    <div class="ocean-box">
        <h2>🌊 Ocean Form</h2>

        <!-- โค้ดฟอร์มของเดิม (ไม่แก้โครงสร้างใด ๆ) -->
        <form method="get" action="Welcome_get.php"> 
            Name : <input type="text" name="name"><br>
            E-mail : <input type="text" name="email"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
