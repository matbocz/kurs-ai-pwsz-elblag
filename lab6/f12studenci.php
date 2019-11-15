<?php
class Studenci
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("sqlite:bazaStudentow.db");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function createTable()
    {
        $this->pdo->exec("CREATE TABLE studenci (id INTEGER PRIMARY KEY AUTOINCREMENT, imie TEXT, nazwisko TEXT, data_ur DATE, email VARCHAR(50), telefon NCHAR(11))");
    }

    public function dropTable()
    {
        $this->pdo->exec("DROP TABLE IF EXISTS studenci");
    }

    public function getTable()
    {
        $res = $this->pdo->query('SELECT * FROM studenci');

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
        while ($row = $res->fetch()) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['imie']}</td>
                    <td>{$row['nazwisko']}</td>
                    <td>{$row['data_ur']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefon']}</td>
                    <td><a href=f12edit.php?editStudent={$row['id']} class='btn btn-info'>Edytuj</a></td>
                    <td><a href=f12action.php?deleteStudent={$row['id']} class='btn btn-danger'>Usuń</a></td>
                </tr>
			";
        }
        echo '</tbody>';
        echo '</table>';
    }

    public function insertStudent($imie, $nazwisko, $data_ur, $email, $telefon)
    {
        $this->pdo->exec("INSERT INTO studenci (imie, nazwisko, data_ur, email, telefon) VALUES ('$imie', '$nazwisko', '$data_ur', '$email', '$telefon')");
    }

    public function deleteStudent($id)
    {
        $this->pdo->exec("DELETE FROM studenci WHERE id=$id");
    }

    public function editStudent($id)
    {
        $res = $this->pdo->query('SELECT * FROM studenci WHERE id=' . $id);
        $row = $res->fetch();

        $student['imie'] = $row['imie'];
        $student['nazwisko'] = $row['nazwisko'];
        $student['data_ur'] = $row['data_ur'];
        $student['email'] = $row['email'];
        $student['telefon'] = $row['telefon'];

        return $student;
    }

    public function updateStudent($id, $imie, $nazwisko, $data_ur, $email, $telefon)
    {
        $this->pdo->exec("UPDATE studenci SET imie='$imie', nazwisko='$nazwisko', data_ur='$data_ur', email='$email', telefon='$telefon' WHERE id=$id");
    }
}
