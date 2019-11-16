<?php
require_once 'f12studenci.php';

error_reporting(0);

session_start();

$db = new Studenci();

$db->createTable();

if (isset($_POST['dropTable'])) {
    $db->dropTable();

    $_SESSION['msg'] = "Wszystkie dane zostały usunięte!";
    $_SESSION['msg_type'] = "danger";

    header("Location: f12.php");
}

if (isset($_POST['insertStudent'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data_ur = $_POST['data_ur'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];

    $db->insertStudent($imie, $nazwisko, $data_ur, $email, $telefon);

    $_SESSION['msg'] = "Dane studenta zostały wprowadzone!";
    $_SESSION['msg_type'] = "success";

    header("Location: f12.php");
}

if (isset($_GET['deleteStudent'])) {
    $id = $_GET['deleteStudent'];

    $db->deleteStudent($id);

    $_SESSION['msg'] = "Dane studenta zostały usunięte!";
    $_SESSION['msg_type'] = "danger";

    header("Location: f12.php");
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

if (isset($_POST['updateStudent'])) {
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data_ur = $_POST['data_ur'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];

    $db->updateStudent($id, $imie, $nazwisko, $data_ur, $email, $telefon);

    $_SESSION['msg'] = "Dane studenta zostały edytowane!";
    $_SESSION['msg_type'] = "info";

    header("Location: f12.php");
}
