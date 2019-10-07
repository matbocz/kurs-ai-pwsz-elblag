<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">

        <title>Lab 1 | Zad 5</title>
        <meta name="author" content="Mateusz Boczarski 18560">
    </head>

    <body>
    <!-- 
        Napisać skrypt w PHP, który wypisze na ekranie informację, czy rok znajdujący się w zmiennej $rok jest przestępny, czy też nie.
        Przykładowo: "Rok 2000 jest przestępny."
    -->

    <h2>Lab 1 | Zad 5</h2>

    <?php
        $rok = 2003;

        echo 'Rok: '.$rok.'<br>';

        if ((($rok % 4 == 0) and ($rok % 100 <> 0)) or ($rok % 400 == 0))
            echo "Rok jest przestępny.";
        else
            echo "Rok nie jest przestępny.";
    ?>
    </body>
</html>