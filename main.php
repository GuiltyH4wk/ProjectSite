<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"
    <meta http-equiv="x-ua-compatible" content="IE=edge"
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
</head>
<body>
    <div class="header">
        <?php include 'menu.inc.php';?>
    </div>

    <main class="main">
        <div class="about_me">
            <?php include index.php?>
            <h1> <?php echo $p?> </h1>
            <div class="fullname">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="">
                <p>My name is
                    <?php echo $name, ' ',$surname . '<br>';
                      echo 'country', ':' ,$country ?>
                </p><br>

                <p>My age is =
                    <?php echo $age;?>
                </p><br>
                <p>We learned how to create variables </p>
                <p>And make some operation with them</p>
            </div>

            <div class="Knowledge">
                <?php
                $a = 16;
                $b = 8;
                $c = $a + $b;
                echo 'a+b = ';
                echo $c;
                if ($a >= 15 && $a <=20)
                    $d= 'The number is between 15 and 20'
                ?><br>

                <?php
                    $a ='My knowledge';
                    $b =100;
                    $c='%';
                echo $a, ' ',$b,' ',$c;
                ?> <br>
                <?php
                echo $d;
                ?>

            </div>
            <form class="sum" action="\Knowledge.php" method="get">
                Number 1:<br>
                <input name ="num1"><br>
                Number 2:<br>
                <input name="num2"><br><br>
                <button type="submit">sum</button>
            </form>
        </div>
    </main>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</body>
</html>