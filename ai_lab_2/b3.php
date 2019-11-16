<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">

        <title>Lab 2 | Zad 3</title>
        <meta name="author" content="Mateusz Boczarski 18560">
    </head>

    <body>
		<!-- 
            Pewien student za pierwszy dzień pracy otrzymał 1 grosz, za drugi dzień pracy otrzymał 2 grosze,
            za trzeci dzień pracy otrzymał 4 grosze, a za każdy następny dzień otrzymał dwa razy więcej niż dnia poprzedniego. 
            Napisz skrypt w PHP, który dla otrzymanej metodą POST lub metodą GET ilości dni,
            stworzy na ekranie zestawienie jak się kreowały zarobki studenta.
            Zarobki wyświetlaj w złotych. Przykładowo po 3 dniach pracy student otrzymał zapłatę 1+2+4=7gr=0,07zł.
            Utrudnienie: Można używać tylko pętli do-while (pętle for i while są zabronione).
		-->

		<h2>Lab 2 | Zad 3</h2>

        <?php
            if (isset($_POST['liczba']))
                echo "Ilość dni: ".$_POST['liczba']."<br>";
            $liczba_dni = $_POST['liczba'];

            $grosze = 1;
            $zarobek = 1;

            $i = 1;
            do {
                if ($liczba_dni <= 0) {
                    $zarobek = 0;
                    break;
                }
                elseif ($liczba_dni == 1) break;
                else {
                    $grosze *= 2;
                    $zarobek += $grosze;
                }

                $i += 1;
            } while ($liczba_dni > $i);

            echo "Po ".$liczba_dni." dniach pracy student zarobił ".$zarobek."gr".", czyli ".($zarobek/100)."zł";
        ?>
    </body>
</html>