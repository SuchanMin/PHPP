<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Form</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to bottom right, #f7d7e8, #fff4f8, #f9e8ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #5a4a4a;
        }

        .wedding-card {
            background: rgba(255, 255, 255, 0.6);
            border-radius: 20px;
            padding: 35px 45px;
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            width: 350px;
            border: 2px solid rgba(255, 200, 230, 0.5);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-family: "Georgia", serif;
            color: #b46c8a;
            letter-spacing: 1px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #e8bad1;
            margin: 8px 0 15px 0;
        }

        input[type="submit"] {
            width: 100%;
            background: #d988af;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #c26d96;
        }

        .flower {
            text-align: center;
            font-size: 30px;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
    <div class="wedding-card">
        <div class="flower">💐</div>
        <h2>Wedding Form</h2>

        <!-- โค้ดฟอร์มของเดิม (ไม่แก้ใด ๆ) -->
        <form method="post" action=" welcome.php" >
            Name : <input type="text" name="name"><br>
            E-mail : <input type=" text " name=" email"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
