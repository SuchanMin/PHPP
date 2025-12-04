<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Welcome</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Georgia", serif;
            background: linear-gradient(to bottom, #fdeef4, #f8dce5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #5c3a4f;
        }

        .wedding-box {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 25px;
            padding: 40px 50px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            width: 380px;
            text-align: center;
            border: 2px solid #f6c1d4;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #c05a7b;
            letter-spacing: 1px;
        }

        .result {
            font-size: 20px;
            line-height: 1.8;
            color: #633f4c;
            background: #fff1f6;
            padding: 15px;
            border-radius: 15px;
            border: 1px solid #f5c3d0;
            margin-top: 10px;
        }

        .decor {
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="wedding-box">
        <div class="decor">💍🌸</div>
        <h2>Wedding Guest Info</h2>

        <div class="result">
            welcome <?php echo $_POST["name"]; ?><br>
            your email address is : 
            <?php echo $_POST["email"]; ?>
        </div>
    </div>
</body>
</html>
