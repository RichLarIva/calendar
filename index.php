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
    <div id="screen">

        <form action="#" method="get">
            <input type="text" name="month" placeholder="January/01" required>
            <input type="text" name="year" placeholder="2022" required>
            <input type="submit">
        </form>
    <div id="layout">

    
    <div class="flex">
    <?php
    require("calendar.php");
    $cal = new Calendar();
    $mon = $_GET['month'];
    switch($mon){
        case 01:
            echo "<img id='month' src='images/jan.jpeg'>";
            break;
        case 02:
            echo "<img id='month' src='images/feb.jpeg'>";
            break;
        case 03:
            echo "<img id='month' src='images/mar.jpeg'>";
            break;
        case 04:
            echo "<img id='month' src='images/apr.jpeg'>";
            break;
        case 05:
            echo "<img id='month' src='images/may.jpeg'>";
            break;
        case 06:
            echo "<img id='month' src='images/jun.jpeg'>";
            break;
        case 07:
            echo "<img id='month' src='images/jul.jpeg'>";
            break;
        case 8:
            echo "<img id='month' src='images/aug.jpeg'>";
            break;
        case 9:
            echo "<img id='month' src='images/sep.jpeg'>";
            break;
        case 10:
            echo "<img id='month' src='images/oct.jpeg'>";
            break;
        case 11:
            echo "<img id='month' src='images/nov.jpeg'>";
            break;
        case 12:
            echo "<img id='month' src='images/dec.jpeg'>";
            break;
    }
    ?>
    </div>
    </div>
    <?php
    echo $cal->show();
    ?>
    <footer class="pa0 relative"> 
        <div id="footbar">
            <a class="btn" href="birthday.php" title="Add birthdays">Add birthdays</a>
        </div>
    </footer>
    </div>
</body>
</html>