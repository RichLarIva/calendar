<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <form action="#" method="get">
        <input type="text" name="month" placeholder="01" required>
        <input type="text" name="year" placeholder="2022" required>
        <input type="submit">
    </form>
    <?php
    require("calendar.php");

    $cal = new Calendar();
    echo $cal->show();
    ?>
</body>
</html>