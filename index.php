<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4/9</title>
    </head>
    <body>
        <p><?php
            //Timestamp actuel
            $date = date_create();
            echo date_format($date, 'U = Y-m-d H:i:s');
            ?></p>
        <p><?php
            //Timestamp du 02/08/2016 15h
            date_timestamp_set($date, 1470142800);
            echo date_format($date, 'U = Y-m-d H:i:s');
            ?></p>
    </body>
</html>
