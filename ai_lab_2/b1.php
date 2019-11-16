<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">

        <title>Lab 2 | Zad 1</title>
        <meta name="author" content="Mateusz Boczarski 18560">
    </head>

    <body>
		<!-- 
			Napisz skrypt w PHP wyznaczający kolejne wielokrotności liczby 3.
			Do skryptu powinna zostać przekazana metodą GET ilość liczb, która ma zostać wyświetlona.
			Przykładowo dla ilości równej 5 powinny zostać wypisane liczby: 0, 3, 6, 9, 12.
			Utrudnienie 1: Liczby parzyste powinny zostać wypisane na niebiesko, a liczby nieparzyste na zielono.
			Utrudnienie 2: Można używać tylko pętli for (pętle while i do-while są zabronione).
		-->

		<h2>Lab 2 | Zad 1</h2>

		<a href="b1.php?ilosc=5">START</a><br>

		<?php
			error_reporting(0);

			if (isset($_GET['ilosc']))
				echo "Ilość to: ".$_GET['ilosc']."<br>";
			else
				echo "Naciśnij START";
			$ilosc = $_GET['ilosc'];
			
			$liczba = 0;
			for($i = 0; $ilosc > $i; $i++)
			{
				if ($liczba % 2 == 0)
					echo "<span style='color:blue;'>{$liczba}</span> ";
				else
					echo "<span style='color:green;'>{$liczba}</span> ";
				$liczba += 3;
			}
		?>
    </body>
</html>