<?php
require_once 'f1uczelnia.php';

error_reporting(0);

session_start();

$db = new Uczelnia();

$db->createDatabase();

if (isset($_POST['insertStudent'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data_ur = $_POST['data_ur'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres'];

    $db->insertStudent($imie, $nazwisko, $data_ur, $email, $telefon, $adres);

    $_SESSION['msg'] = "Dane studenta zostały wprowadzone!";
    $_SESSION['msg_type'] = "success";

    header("Location: f1studenci.php");
}

if (isset($_POST['insertWyklad'])) {
    $nazwa = $_POST['nazwa'];

    $db->insertWyklad($nazwa);

    $_SESSION['msg'] = "Dane wykładu zostały wprowadzone!";
    $_SESSION['msg_type'] = "success";

    header("Location: f1wyklady.php");
}

if (isset($_POST['insertAdres'])) {
    $kod_pocztowy = $_POST['kod_pocztowy'];
    $miejscowosc = $_POST['miejscowosc'];
    $ulica = $_POST['ulica'];

    $db->insertAdres($kod_pocztowy, $miejscowosc, $ulica);

    $_SESSION['msg'] = "Dane adresowe zostały wprowadzone!";
    $_SESSION['msg_type'] = "success";

    header("Location: f1adresy.php");
}

if (isset($_POST['insertStuwyk'])) {
    $student = $_POST['student'];
    $wyklad = $_POST['wyklad'];

    $db->insertStuwyk($student, $wyklad);

    $_SESSION['msg'] = "Dane studenta i jego wykładu zostały wprowadzone!";
    $_SESSION['msg_type'] = "success";

    header("Location: f1stuwyk.php");
}

if (isset($_GET['deleteStudent'])) {
    $id = $_GET['deleteStudent'];

    $db->deleteStudent($id);

    $_SESSION['msg'] = "Dane studenta zostały usunięte!";
    $_SESSION['msg_type'] = "danger";

    header("Location: f1studenci.php");
}

if (isset($_GET['deleteWyklad'])) {
    $id = $_GET['deleteWyklad'];

    $db->deleteWyklad($id);

    $_SESSION['msg'] = "Dane wykładu zostały usunięte!";
    $_SESSION['msg_type'] = "danger";

    header("Location: f1wyklady.php");
}

if (isset($_GET['deleteAdres'])) {
    $id = $_GET['deleteAdres'];

    $db->deleteAdres($id);

    $_SESSION['msg'] = "Dane adresowe zostały usunięte!";
    $_SESSION['msg_type'] = "danger";

    header("Location: f1adresy.php");
}

if (isset($_GET['deleteStuwyk'])) {
    $id = $_GET['deleteStuwyk'];

    $db->deleteStuwyk($id);

    $_SESSION['msg'] = "Dane studenta i jego wykładu zostały usunięte!";
    $_SESSION['msg_type'] = "danger";

    header("Location: f1stuwyk.php");
}

if (isset($_GET['editStudent'])) {
    $id = $_GET['editStudent'];

    $student = $db->editStudent($id);

    $imie = $student['imie'];
    $nazwisko = $student['nazwisko'];
    $data_ur = $student['data_ur'];
    $email = $student['email'];
    $telefon = $student['telefon'];
}

if (isset($_GET['editWyklad'])) {
    $id = $_GET['editWyklad'];

    $wyklad = $db->editWyklad($id);

    $nazwa = $wyklad['nazwa'];
}

if (isset($_GET['editAdres'])) {
    $id = $_GET['editAdres'];

    $adres = $db->editAdres($id);

    $kod_pocztowy = $adres['kod_pocztowy'];
    $miejscowosc = $adres['miejscowosc'];
    $ulica = $adres['ulica'];
}

if (isset($_GET['editStuwyk'])) {
    $id = $_GET['editStuwyk'];
}

if (isset($_POST['updateStudent'])) {
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data_ur = $_POST['data_ur'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres'];

    $db->updateStudent($id, $imie, $nazwisko, $data_ur, $email, $telefon, $adres);

    $_SESSION['msg'] = "Dane studenta zostały edytowane!";
    $_SESSION['msg_type'] = "info";

    header("Location: f1studenci.php");
}

if (isset($_POST['updateWyklad'])) {
    $id = $_POST['id'];
    $nazwa = $_POST['nazwa'];

    $db->updateWyklad($id, $nazwa);

    $_SESSION['msg'] = "Dane wykładu zostały edytowane!";
    $_SESSION['msg_type'] = "info";

    header("Location: f1wyklady.php");
}

if (isset($_POST['updateAdres'])) {
    $id = $_POST['id'];
    $kod_pocztowy = $_POST['kod_pocztowy'];
    $miejscowosc = $_POST['miejscowosc'];
    $ulica = $_POST['ulica'];

    $db->updateAdres($id, $kod_pocztowy, $miejscowosc, $ulica);

    $_SESSION['msg'] = "Dane adresowe zostały edytowane!";
    $_SESSION['msg_type'] = "info";

    header("Location: f1adresy.php");
}

if (isset($_POST['updateStuwyk'])) {
    $id = $_POST['id'];
    $student = $_POST['student'];
    $wyklad = $_POST['wyklad'];

    $db->updateStuwyk($id, $student, $wyklad);

    $_SESSION['msg'] = "Dane studenta i jego wykładu zostały edytowane!";
    $_SESSION['msg_type'] = "info";

    header("Location: f1stuwyk.php");
}
