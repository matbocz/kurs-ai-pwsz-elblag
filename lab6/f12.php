<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mateusz Boczarski 18560">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Lab 6 | Zad 1 i 2</title>
</head>

<body>
    <!-- 
        Zadanie 1
        W SQLite utwórz sensowną tabelę z co najmniej 5 kolumnami różnych typów.
        Napisz obiektowo skrypt PHP, który za każdym razem będzie:
        a) odczytywał zawartość utworzonej tabeli i wyświetlał jej zawartość na stronie WWW w postaci tabelki,
        b) posiadał formularz umożliwiający dodanie kolejnego rekordu do tabeli w bazie danych.
        Zadbaj o wygląd i responsywność utworzonej strony WWW.

        Zadanie 2* (dla chętnych)
        Do zadania 1 dodaj możliwość usuwania i modyfikacji rekordów.
    -->

    <?php require_once 'f12action.php' ?>

    <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>" role="alert">
            <?php echo $_SESSION['msg']; ?>
            <?php unset($_SESSION['msg']); ?>
        </div>
    <?php } ?>

    <div class="container">
        <h2>Lab 6 | Zad 1 i 2</h2>

        <form action="f12action.php" method="POST">
            <br>
            <h4>Wprowadzanie danych studenta</h4>
            <div class="form-group">
                <label for="imieInput">Podaj imię: </label>
                <input type="text" class="form-control" id="imieInput" name="imie" placeholder="Wpisz imię (np. Jan)" required>
            </div>

            <div class="form-group">
                <label for="nazwiskoInput">Podaj nazwisko: </label>
                <input type="text" class="form-control" id="nazwiskoInput" name="nazwisko" placeholder="Wpisz nazwisko (np. Kowalski)" required>
            </div>

            <div class="form-group">
                <label for="dataInput">Podaj datę urodzenia: </label>
                <input type="date" class="form-control" id="dataInput" name="data_ur" required>
            </div>

            <div class="form-group">
                <label for="emailInput">Podaj adres e-mail: </label>
                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Wpisz adres e-mail (np. kowalski@email.pl)" required>
            </div>

            <div class="form-group">
                <label for="telInput">Podaj numer telefonu: </label>
                <input type="tel" class="form-control" id="telInput" name="telefon" pattern="[0-9]{3}\s[0-9]{3}\s[0-9]{3}" placeholder="Wpisz numer telefonu (np. 506 856 976)" required>
            </div>

            <input type="submit" class="btn btn-primary mb-2" name="insertStudent" value="Wprowadź dane studenta">
            <input type="reset" class="btn btn-warning mb-2" value="Wyczyść formularz">
        </form>

        <?php $db->getTable(); ?>

        <form action="f12action.php" method="POST">
            <input type="submit" class="btn btn-danger mb-2" name="dropTable" value="Usuń wszystkie dane!">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>