<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mateusz Boczarski 18560">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Lab 4 | Zad 1</title>
</head>

<body>
    <!-- 
        Wylosuj liczbę. Utwórz formularz na zgadnięcie liczby. Wysłanie formularza powoduje sprawdzenie, czy liczba została odgadnięta, a jeśli nie, to podajemy informację 'za dużo' lub 'za mało'.
        Wyniki (jaką liczbę odgadnięto i za którym razem) dopisuj do pliku tekstowego.
    -->

    <?php
    session_start();
    error_reporting(0);
    ?>

    <?php
    if (!(isset($_SESSION['start']))) {
        $_SESSION['ileLosowan'] = 1;
        $_SESSION['liczbaWylosowana'] = rand(0, 10);

        $_SESSION['start'] = true;
    }
    ?>

    <?php
    class Losowanie
    {
        private $liczbaWylosowana;

        function __construct()
        {
            $this->liczbaWylosowana = $_SESSION['liczbaWylosowana'];
        }

        public function sprawdzWynik($liczbaWybrana)
        {
            if (!(isset($liczbaWybrana))) {
                echo "";
            } elseif ($liczbaWybrana == $this->liczbaWylosowana) {
                echo "<p>Wygrałeś!</p>";
                echo "<p>Liczba wybrana: " . $liczbaWybrana . "</p>";
                echo "<p>Liczba wylosowana: " . $this->liczbaWylosowana . "</p>";

                $this->dopiszDoPliku("Liczba wybrana: " . $liczbaWybrana . PHP_EOL);
                $this->dopiszDoPliku("Liczba wylosowana: " . $this->liczbaWylosowana . PHP_EOL);
                $this->dopiszDoPliku("Wylosowano liczbę za " . $_SESSION['ileLosowan'] . " razem." . PHP_EOL . PHP_EOL);

                session_unset();
            } elseif ($liczbaWybrana > $this->liczbaWylosowana) {
                echo "<p>Za dużo!</p>";
                echo "<p>Liczba wybrana: " . $liczbaWybrana . "</p>";

                $_SESSION['ileLosowan'] += 1;
            } elseif ($liczbaWybrana < $this->liczbaWylosowana) {
                echo "<p>Za mało!</p>";
                echo "<p>Liczba wybrana: " . $liczbaWybrana . "</p>";

                $_SESSION['ileLosowan'] += 1;
            }
        }

        public function dopiszDoPliku($zawartosc)
        {
            $plik = fopen('wyniki.txt', 'a');

            fwrite($plik, $zawartosc);

            fclose($plik);
        }
    }
    ?>

    <div class="container">
        <h2>Lab 4 | Zad 1</h2>

        <form action="d1.php" method="POST">
            <div class="form-group">
                <label for="liczbaInput">Podaj liczbę: </label>
                <input type="text" class="form-control" id="liczbaInput" name="liczbaWybrana" aria-describedby="liczbaHelp" placeholder="Wpisz liczbę">
                <small id="liczbaHelp" class="form-text text-muted">Wygrasz jeśli podasz właściwą liczbę z zakresu od 0 do 10.</small>
            </div>

            <button type="submit" class="btn btn-primary">Zgaduję!</button>
        </form>

        <?php
        $los = new Losowanie();
        $los->sprawdzWynik($_POST['liczbaWybrana']);
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>