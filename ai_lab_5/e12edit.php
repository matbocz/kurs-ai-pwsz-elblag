<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mateusz Boczarski 18560">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Lab 5 | Zad 1 i 2</title>
</head>

<body>
    <?php require_once 'e12action.php' ?>

    <?php
    if (isset($_GET['editStudent'])) {
        $id = $_GET['editStudent'];

        $db = new SQLite3('bazaStudentow.db');
        $res = $db->query('SELECT * FROM studenci WHERE id=' . $id);
        $row = $res->fetchArray();

        $imie = $row['imie'];
        $nazwisko = $row['nazwisko'];
        $data_ur = $row['data_ur'];
        $email = $row['email'];
        $telefon = $row['telefon'];
    }
    ?>

    <div class="container">
        <h2>Lab 5 | Zad 1 i 2</h2>

        <form action="e12update.php" method="POST">
            <br>
            <h4>Formularz edycji danych studenta</h4>
            <div class="form-group">
                <label for="imieInput">Podaj imię: </label>
                <input type="text" class="form-control" id="imieInput" name="imie" value="<?php echo $imie ?>" placeholder="Wpisz imię (np. Jan)" required>
            </div>

            <div class="form-group">
                <label for="nazwiskoInput">Podaj nazwisko: </label>
                <input type="text" class="form-control" id="nazwiskoInput" name="nazwisko" value="<?php echo $nazwisko ?>" placeholder="Wpisz nazwisko (np. Kowalski)" required>
            </div>

            <div class="form-group">
                <label for="dataInput">Podaj datę urodzenia: </label>
                <input type="date" class="form-control" id="dataInput" name="data_ur" value="<?php echo $data_ur ?>" placeholder="Wpisz datę urodzenia (np. 20.10.1990)" required>
            </div>

            <div class="form-group">
                <label for="emailInput">Podaj adres e-mail: </label>
                <input type="email" class="form-control" id="emailInput" name="email" value="<?php echo $email ?>" placeholder="Wpisz adres e-mail (np. jan.kowalski@email.pl)" required>
            </div>

            <div class="form-group">
                <label for="telInput">Podaj numer telefonu: </label>
                <input type="tel" class="form-control" id="telInput" name="telefon" pattern="[0-9]{3}\s[0-9]{3}\s[0-9]{3}" value="<?php echo $telefon ?>" placeholder="Wpisz numer telefonu (np. 506 856 976)" required>
            </div>

            <input type="hidden" id="idInput" name="id" value="<?php echo $id ?>">

            <input type="submit" class="btn btn-info" name="updateStudent" value="Zaktualizuj dane studenta">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>