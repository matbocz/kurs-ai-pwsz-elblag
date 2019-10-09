<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">

        <title>Lab 2 | Zad 2</title>
        <meta name="author" content="Mateusz Boczarski 18560">
    </head>

    <body>
		<!-- 
			Napisać skrypt PHP, który drukuje z gwiazdek trójkąt.
			Wysokość trójkąta powinna być przekazana do skryptu metodą POST.
			Utrudnienie 1: Wnętrze trójkąta powinno zostać wypełnione innym kolorem.
			Utrudnienie 2: Można używać tylko pętli while (pętle for i do-while są zabronione).
		-->

		<h2>Lab 2 | Zad 2</h2>

		<?php
			if (isset($_POST['liczba']))
				echo "Liczba to: ".$_POST['liczba']."<br>";
			$liczba_gwiazdek = $_POST['liczba'];
			
			$rysowane_gwizdki = 1;
			while ($liczba_gwiazdek > 0) {
				$i = 0;
				while ($i < $rysowane_gwizdki) {
					if ($i == 0 || $i == $rysowane_gwizdki - 1)
						echo "*";
					else
						echo "<span style='color:red;'>*</span>";;
					$i += 1;
				}
				$rysowane_gwizdki += 1;

				echo "<br>";
				
				$liczba_gwiazdek -= 1;
			}
		?>
    </body>
</html>