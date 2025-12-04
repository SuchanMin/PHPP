<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Result</title>

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
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .info {
            background: rgba(255, 255, 255, 0.35);
            padding: 15px;
            border-radius: 12px;
            color: #003a63;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="ocean-box">
        <h2>🌊 Your Info</h2>

        <div class="info">
            Welcome: <?php echo $_GET["name"]; ?>  <br><br>
            Your email address is: <?php echo $_GET["email"]; ?>
        </div>
    </div>
</body>
</html>
