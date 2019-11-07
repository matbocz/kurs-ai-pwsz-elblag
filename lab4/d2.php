<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mateusz Boczarski 18560">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Lab 4 | Zad 2</title>
</head>

<body>
    <!-- 
        Skrypt ma wyświetlać listę imion i umożliwiać dodawanie imienia na listę, edycję i usuwanie.
        Aktualną listę imion zapisuj jako ciasteczko. Użyj serializacji.
    -->

    <?php
    class Lista
    {
        function __construct()
        { }

        public function dodajImie($imie)
        {
            if (isset($_COOKIE['imiona'])) {
                $imiona = unserialize($_COOKIE['imiona']);

                array_push($imiona, $imie);
                setcookie('imiona', serialize($imiona), time() + 3600);
            }
            if (!(isset($_COOKIE['imiona']))) {
                $imiona = array();

                array_push($imiona, $imie);
                setcookie('imiona', serialize($imiona), time() + 3600);
            }
        }

        public function usunImie($imie)
        {
            if (isset($_COOKIE['imiona'])) {
                $imiona = unserialize($_COOKIE['imiona']);

                unset($imiona[$imie]);
                setcookie('imiona', serialize($imiona), time() + 3600);
            }
        }

        public function wyswietlListe()
        {
            if ((isset($_COOKIE['imiona']))) {
                $imiona = unserialize($_COOKIE['imiona']);

                while (list($i, $w) = each($imiona)) {
                    echo "<p>$i. $w</p>";
                }
            } else
                echo "<p>Lista imion jest pusta! Dodaj jakieś imiona.</p>";
        }
    }
    ?>

    <div class="container">
        <h2>Lab 4 | Zad 2</h2>

        <form action="d2.php" method="POST">
            <div class="form-group">
                <br>
                <h4>----Dodawanie imion----</h4>
                <label for="dodajInput">Podaj imię: </label>
                <input type="text" class="form-control" id="dodajInput" name="imieDodaj" aria-describedby="dodajHelp" placeholder="Wpisz imię">
                <small id="dodajHelp" class="form-text text-muted">Wpisz imię które chcesz dodać do listy.</small>
            </div>

            <button type="submit" class="btn btn-primary">Dodaj imię!</button>
        </form>

        <form action="d2.php" method="POST">
            <div class="form-group">
                <br>
                <h4>----Usuwanie imion----</h4>
                <label for="usunInput">Podaj numer imienia: </label>
                <input type="text" class="form-control" id="usunInput" name="imieUsun" aria-describedby="usunHelp" placeholder="Wpisz numer imienia">
                <small id="usunHelp" class="form-text text-muted">Wpisz numer imienia które chcesz usunąć z listy.</small>
            </div>

            <button type="submit" class="btn btn-primary">Usuń imię!</button>
        </form>

        <?php
        $lista = new Lista();
        $lista->wyswietlListe();

        if (isset($_POST['imieDodaj']) && !empty($_POST['imieDodaj'])) {
            $imieDodaj = $_POST['imieDodaj'];
            $lista->dodajImie($imieDodaj);
            header("Refresh:0");
        }

        if (isset($_POST['imieUsun']) && !empty($_POST['imieUsun'])) {
            $imieUsun = $_POST['imieUsun'];
            $lista->usunImie($imieUsun);
            header("Refresh:0");
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>