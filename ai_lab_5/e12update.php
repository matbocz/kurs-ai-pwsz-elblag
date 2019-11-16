<?php
require_once 'e12action.php';

if (isset($_POST['updateStudent'])) {
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data_ur = $_POST['data_ur'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];

    $db = new SQLite3('bazaStudentow.db');
    $db->exec("UPDATE studenci SET imie='$imie', nazwisko='$nazwisko', data_ur='$data_ur', email='$email', telefon='$telefon' WHERE id=$id");

    $_SESSION['msg'] = "Dane studenta zostały zaktualizowane!";
    $_SESSION['msg_type'] = "info";

    header("Location: e12.php");
}
