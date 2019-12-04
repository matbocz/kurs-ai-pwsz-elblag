<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mateusz Boczarski 18560">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Lab 6 | Zad 1</title>
</head>

<body>
    <?php require_once 'f1action.php' ?>

    <div class="container">
        <h2>Lab 6 | Zad 1</h2>

        <form action="f1action.php" method="POST">
            <br>
            <h4>Edytowanie danych wykładu</h4>
            <div class="form-group">
                <label for="nazwaInput">Podaj nazwę: </label>
                <input type="text" class="form-control" id="nazwaInput" name="nazwa" value="<?php echo $nazwa ?>" placeholder="Wpisz nazwę (np. Aplikacje internetowe)" required>
            </div>

            <input type="hidden" id="idInput" name="id" value="<?php echo $id ?>">

            <input type="submit" class="btn btn-info" name="updateWyklad" value="Edytuj dane wykładu">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>