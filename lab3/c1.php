<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Mateusz Boczarski 18560">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">

        <title>Lab 3 | Zad 1</title>
    </head>

    <body>
		<!-- 
            Załóżmy, że w pliku tekstowym o nazwie dowcipy.txt znajduje się kilkanaście dowcipów.
            Wszystkie dowcipy w pliku są oddzielone pustą linią. Każdy dowcip w pierwszej linii zawiera tytuł dowcipu,
            a w kolejnych liniach znajduje się treść dowcipu. Dowcip kończy się pustą linią.

            1. Przygotuj własną wersję pliku dowcipy.txt z kilkunastoma dowcipami (wyszukaj i skopiuj je z sieci Internet).
            2. Napisać skrypt PHP, który odczyta dowcipy z pliku i stworzy responsywną stronę HTML z dowcipami.
            3. Dowcipy powinny zostać wyświetlone w postaci "talii kart" (https://bs4.kursbootstrap.pl/karty-cards/).
            4. Wynikowa strona HTML powinna się walidować i ładnie wyglądać.
		-->

		<h2>Lab 3 | Zad 1</h2>

        <?php $f = fopen("dowcipy.txt", "r"); ?>
        <div class="container">
            <div class="card-columns">
                <?php $i = 1; ?>
                <?php while (!feof($f)) { ?>
                    <div class="card">
                        <div class="card-header"><?php echo "Dowcip nr ".$i ?></div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php
                                    $line = fgets($f);
                                    echo $line;
                                ?>
                            </h5>
                            <p class="card-text">
                                <?php
                                    while (trim($line) != '') {
                                        $line = fgets($f);
                                        echo $line."<br>";
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                <?php $i++; } ?>
            </div>
        </div>
        <?php fclose($f); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>