<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP Webpage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo "Welcome to My PHP Webpage!"; ?></h1>
        <p>Today is: <?php echo date("l, F j, Y"); ?></p>
        <p>The current time is: <?php echo date("h:i:s A"); ?></p>
    </div>
</body>
</html>
