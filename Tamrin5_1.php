<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انتخاب کننده رنگ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>انتخاب کننده رنگ</h4> 
        <form method="post" action="">
            <label for="username">نام:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="colors">رنگ‌های مورد علاقه:</label>
            <br>
            <input type="checkbox" id="red" name="colors[]" value="قرمز">
            <label for="red" >قرمز</label>
            <br>
            <input type="checkbox" id="green" name="colors[]" value="سبز">
            <label for="green">سبز</label>
            <br>
            <input type="checkbox" id="blue" name="colors[]" value="آبی">
            <label for="blue">آبی</label>
            <br>
            <input type="checkbox" id="yellow" name="colors[]" value="زرد">
            <label for="yellow">زرد</label>
            <br>
            <input type="checkbox" id="black" name="colors[]" value="سیاه">
            <label for="black">سیاه</label>
            <br><br>
            <button type="submit">ثبت</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $colors = isset($_POST['colors']) ? $_POST['colors'] : [];
            $colorCount = count($colors);
            echo "<div class='result'>";
            echo "سلام $username!<br>";
            echo "شما $colorCount رنگ انتخاب کرده‌اید:<br>";
            echo implode(', ', $colors);
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
