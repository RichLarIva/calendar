<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Birthday</title>
        <link rel="stylesheet" href="style/index.css">
    </head>
    <body>
        <form action="index.php" method="POST">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday">
            <br>
            <label for="name">First name</label>
            <input type="text" name="name">
            <br>
            <input type="submit" name="submit" value="Add Birthday">    
        </form>
        <?php
            if(isset($_POST["submit"])){
                $data_bday = $_POST['birthday'];
                $data_name = $_POST['name'];
                echo $data_name;
                $fp = fopen('birthdays.txt', 'a');
                $data = ','.$data_bday.'.'.$data_name;
                fwrite($fp, $data);
                fclose($fp);
            }
        ?>
    </body>
</html>