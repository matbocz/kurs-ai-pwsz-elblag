<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">

        <title>Lab 1 | Zad 4</title>
        <meta name="author" content="Mateusz Boczarski 18560">
    </head>

    <body>
    <!-- 
        Napisać skrypt w PHP, który wypisze na ekranie informację o wartości zmiennej $a 
        ($a>0 - liczba dodatnia, $a<0 - liczba ujemna, $a==0 - liczba równa zero).
        Przykładowo: "Liczba 12.4 jest dodatnia."
    -->

    <h2>Lab 1 | Zad 4</h2>

    <?php
        $a = 2;

        echo 'Zmienna: '.$a.'<br>';
        
        if($a > 0) 
            echo 'Zmienna jest dodatnia.';
        elseif($a < 0) 
            echo 'Zmienna jest ujemna.';
        else 
            echo 'Zmienna jest równa zero.';
    ?>
    </body>
</html>