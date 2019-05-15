<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP base</title>
    </head>
    <?php
        if (date('H') >= 7 and date('H') < 19) {
            ?>
            <body style="background-color:black">
            <?php
            }
        else {
            ?>
            <body style="background-color:white">
            <?php
        }
    ?>
    <p>Vous pouvez voir la météo sur le site suivant :</p>
    <ul>
        <li>
        <p><a href=" http://localhost:8080/tp_1/bordeaux.php">Bordeaux</a></p>
        </li>
        <li>
        <p><a href=" http://localhost:8080/tp_1/paris.php">Paris</a></p>
        </li>
    </ul>
    </body>
</html>