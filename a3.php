<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">

        <title>Lab 1 | Zad 3</title>
        <meta name="author" content="Mateusz Boczarski 18560">
    </head>

    <body>
    <!-- 
        Napisać w PHP sktypt, który obliczy objętość i pole całkowite stożka.
        Wyświelt na ekranie jakie wartości mają r i h oraz ile wynoszą obliczone wyniki.
        Wzory: 
        a) V=1/3*pi*r*r*h (r-promień, h-wysokość)
        b) Pc=pi*r(r+l) (l-tworząca, l=pierwiastek(r*r+h*h) 
    -->

    <h2>Lab 1 | Zad 3</h2>

    <?php
        define ("PI", 3.141592);
        $r = 1;
        $h = 1;

        $V = 1/3*PI*$r*$r*$h;
        $l = sqrt($r*$r+$h*$h);
        $Pc = PI*$r*($r+$l);

        echo 'Dla r = '.$r.' h = '.$h.' V = '.$V.' Pc = '.$Pc;
    ?>
    </body>
</html>