<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="flexContainer">
        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>

        <div class="aboutMe">
            <p class="greeting"><?php  echo $hello  ?></p>

            <div class="data">
                <div class="fullname">
                    <h1><?php echo $name, ' ', $surname . '<br>';?></h1>
                    <p><?php echo $info?></p>
                    <p>Возможность чему-то научиться нельзя упускать (c)</p>
                </div>
            </div>

            <div class="knowledge">
                <br><hr>
                <p>А теперь посмотрим на работу PHP:</p>
                <?php  include 'knowledge.inc.php'; ?>

                <p>Чему равно 5+9*3-4/2?
                    <details>
                    	<summary>Узнать ответ</summary>
                    	Может, подумаете ещё немного?
                    	<details>
                             <summary>Нет, я хочу знать ответ!</summary>
                             <?php  echo $answer1; ?>
                        </details>
                    </details>
                </p>

                <p class="p_long"><?php echo $question ?>
                <details>
                    <summary>Узнать ответ</summary>
                    <?php echo $answer2 ?>
                </details>
                </p>
            </div>
        </div>

        <?php include 'footer.inc.php' ?>

    </div>
</body>
</html>