<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">

        <title>Lab 1 | Zad 2</title>
        <meta name="author" content="Mateusz Boczarski 18560">
    </head>

    <body>
    <!-- 
        Napisać skrypt w PHP, który obliczy objętość oraz pole powierzchni kuli.
        Wykonanie:
        a) Zdefiniuj stałą PI i określ dla niej wartość 3.141592.
        b) Zmiennej $r nadaj wartość 1.
        c) Oblicz V i Pc i wyniki wypisz na ekranie w postaci: "Dla r=... V=..., Pc=... ".
    -->

    <h2>Lab 1 | Zad 2</h2>

    <?php
        define ("PI", 3.141592);
        $r = 1;

        $V = 4/3*PI*$r*$r*$r;
        $Pc = 4*PI*$r*$r;

        echo 'Dla r = '.$r.' V = '.$V.' Pc = '.$Pc;
    ?>
    </body>
</html>