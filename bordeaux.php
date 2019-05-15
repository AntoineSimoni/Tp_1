<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP Bordeaux</title>
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

        for ($i = 0; $i <=4; $i++){
            ?>
            <img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_'.$i.'.png" alt="Météo"/><br>
            <?php
        }
    ?>
    </body>
</html>