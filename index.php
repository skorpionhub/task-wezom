<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-Wezom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="func.php" method="POST" class="ui-form">
    <div class="form-row">
        <input type="text" name="string" id="string" required autocomplete="off"><label for="string">Арифметическое выражение:</label>
    </div>
    <div class="form-row">
        <span><?php echo $_GET['info']?></span>
    </div>
    <p><input type="submit" value="Проверить"></p>
</form>
</body>
</html>