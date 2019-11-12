<?php
error_reporting(0);

session_start();

class Studenci
{
    public function __construct()
    { }

    public function createTable()
    {
        $db = new SQLite3('bazaStudentow.db');

        $db->exec("CREATE TABLE studenci (id INTEGER PRIMARY KEY AUTOINCREMENT, imie TEXT, nazwisko TEXT, data_ur DATE, email VARCHAR(50), telefon NCHAR(11))");
    }

    public function dropTable()
    {
        $db = new SQLite3('bazaStudentow.db');

        $db->exec("DROP TABLE IF EXISTS studenci");

        header("Location: e12.php");
    }

    public function getTable()
    {
        $db = new SQLite3('bazaStudentow.db');
        $res = $db->query('SELECT * FROM studenci');

        echo '<table class="table table-hover">';
        echo '
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Imię</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Data urodzenia</th>
                    <th scope="col">Adres e-mail</th>
                    <th scope="col">Numer telefonu</th>
                    <th scope="col" colspan="2" class="text-center">Akcja</th>
                </tr>
            </thead>
		';
        echo '<tbody>';
        while ($row = $res->fetchArray()) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['imie']}</td>
                    <td>{$row['nazwisko']}</td>
                    <td>{$row['data_ur']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefon']}</td>
                    <td><a href=e12edit.php?editStudent={$row['id']} class='btn btn-info'>Edytuj</a></td>
                    <td><a href=e12action.php?deleteStudent={$row['id']} class='btn btn-danger'>Usuń</a></td>
                </tr>
			";
        }
        echo '</tbody>';
        echo '</table>';
    }

    public function insertStudent($imie, $nazwisko, $data_ur, $email, $telefon)
    {
        $db = new SQLite3('bazaStudentow.db');

        $db->exec("INSERT INTO studenci (imie, nazwisko, data_ur, email, telefon) VALUES ('$imie', '$nazwisko', '$data_ur', '$email', '$telefon')");

        header("Location: e12.php");
    }

    public function deleteStudent($id)
    {
        $db = new SQLite3('bazaStudentow.db');

        $db->exec("DELETE FROM studenci WHERE id=$id");

        header("Location: e12.php");
    }
}

$sql = new Studenci();

$sql->createTable();

if (isset($_POST['dropTable'])) {
    $sql->dropTable();

    $_SESSION['msg'] = "Wszyscy studenci zostali usunięci!";
    $_SESSION['msg_type'] = "danger";
}

if (isset($_POST['insertStudent'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data_ur = $_POST['data_ur'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];

    $sql->insertStudent($imie, $nazwisko, $data_ur, $email, $telefon);

    $_SESSION['msg'] = "Student został dodany!";
    $_SESSION['msg_type'] = "success";
}

if (isset($_GET['deleteStudent'])) {
    $id = $_GET['deleteStudent'];

    $sql->deleteStudent($id);

    $_SESSION['msg'] = "Student został usunięty!";
    $_SESSION['msg_type'] = "danger";
}
