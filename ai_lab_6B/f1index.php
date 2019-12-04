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
    <!-- 
        Zadanie 1
		Wykonaj CRUDa w PHP przy użyciu biblioteki PDO, obowiązuje obiektowy styl programowania.

		Utworzona strona WWW powinna zawierać menu umożliwiające wybór tabeli, w której będziemy modyfikować dane oraz możliwość wyświetlenia diagramu ERD na ekranie.
		Użytkownik nie może znać identyfikatorów kluczy głównych i obcych (inaczej -3 pkt).
		Dane zapisywane do bazy danych powinny być zwalidowane za pomocą PHP i HTML5.
		Wynikowa strona WWW powinna spełniać standard HTML5 i CSS3.
		Można wybrać dowolny system zarządzania bazą danych. Student powinien mieć możliwość zademonstrowania poprawności działania w sali komputerowej.
		Jako punkt wyjścia można zaadaptować przykład użycia PDO: implementacja związku 1:N lub implementacja związku N:M.
		
		Terminowo prześlij plik zad6_pdo_nazwisko_nrindeksu.zip zawierający rozwiązanie zadania:
		- obrazek z diagramem ERD,
		- skrypt SQL generujący strukturę bazy danych,
		- utworzone skrypty PHP z interfejsem.
    -->

    <div class="container">
        <h2>Lab 6 | Zad 1</h2>

        <div class="text-center">
            <h4>Diagram ERD</h4>
            <img src="f1erd.jpg" alt="Diagram ERD">
            
            <a href='f1studenci.php' class='btn btn-primary mt-2'>Dane studentów</a>
            <a href='f1wyklady.php' class='btn btn-primary mt-2'>Dane wykładów</a>
            <a href='f1adresy.php' class='btn btn-primary mt-2'>Dane adresowe</a> <br>
            <a href='f1stuwyk.php' class='btn btn-primary mt-2'>Studenci i ich wykłady</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>