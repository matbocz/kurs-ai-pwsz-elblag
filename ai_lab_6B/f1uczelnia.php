<?php
class Uczelnia
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("sqlite:f1uczelnia.db");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function createDatabase()
    {
        $this->pdo->exec("CREATE TABLE wyklady (id INTEGER PRIMARY KEY AUTOINCREMENT, nazwa TEXT)");
        $this->pdo->exec("CREATE TABLE adresy (id INTEGER PRIMARY KEY AUTOINCREMENT, kod_pocztowy NCHAR(7), miejscowosc TEXT, ulica TEXT)");
        $this->pdo->exec("CREATE TABLE studenci (id INTEGER PRIMARY KEY AUTOINCREMENT, adresy_id INTEGER, imie TEXT, nazwisko TEXT, data_ur DATE, email VARCHAR(50), telefon NCHAR(11), FOREIGN KEY(adresy_id) REFERENCES adresy(id))");
        $this->pdo->exec("CREATE TABLE studenci_i_wyklady (id INTEGER PRIMARY KEY AUTOINCREMENT, studenci_id INTEGER, wyklady_id INTEGER, FOREIGN KEY(studenci_id) REFERENCES studenci(id), FOREIGN KEY(wyklady_id) REFERENCES wyklady(id))");
    }

    public function getTableStudenci()
    {
        $res = $this->pdo->query('SELECT s.id, s.imie, s.nazwisko, s.data_ur, s.email, s.telefon, a.kod_pocztowy, a.miejscowosc, a.ulica FROM studenci s JOIN adresy a ON s.adresy_id = a.id');

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
                    <th scope="col">Adres</th>
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
                    <td>{$row['kod_pocztowy']} {$row['miejscowosc']} {$row['ulica']}</td>
                    <td style='text-align: center;'><a href=f1editStudent.php?editStudent={$row['id']} class='btn btn-info'>Edytuj</a></td>
                    <td style='text-align: center;'><a href=f1action.php?deleteStudent={$row['id']} class='btn btn-danger'>Usuń</a></td>
                </tr>
			";
        }
        echo '</tbody>';
        echo '</table>';
    }

    public function getTableWyklady()
    {
        $res = $this->pdo->query('SELECT * FROM wyklady');

        echo '<table class="table table-hover">';
        echo '
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col" colspan="2" class="text-center">Akcja</th>
                </tr>
            </thead>
		';
        echo '<tbody>';
        while ($row = $res->fetch()) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nazwa']}</td>
                    <td style='text-align: center;'><a href=f1editWyklad.php?editWyklad={$row['id']} class='btn btn-info'>Edytuj</a></td>
                    <td style='text-align: center;'><a href=f1action.php?deleteWyklad={$row['id']} class='btn btn-danger'>Usuń</a></td>
                </tr>
			";
        }
        echo '</tbody>';
        echo '</table>';
    }

    public function getTableAdresy()
    {
        $res = $this->pdo->query('SELECT * FROM adresy');

        echo '<table class="table table-hover">';
        echo '
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kod pocztowy</th>
                    <th scope="col">Miejscowość</th>
                    <th scope="col">Ulica</th>
                    <th scope="col" colspan="2" class="text-center">Akcja</th>
                </tr>
            </thead>
		';
        echo '<tbody>';
        while ($row = $res->fetch()) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['kod_pocztowy']}</td>
                    <td>{$row['miejscowosc']}</td>
                    <td>{$row['ulica']}</td>
                    <td style='text-align: center;'><a href=f1editAdres.php?editAdres={$row['id']} class='btn btn-info'>Edytuj</a></td>
                    <td style='text-align: center;'><a href=f1action.php?deleteAdres={$row['id']} class='btn btn-danger'>Usuń</a></td>
                </tr>
			";
        }
        echo '</tbody>';
        echo '</table>';
    }

    public function getTableStuwyk()
    {
        $res = $this->pdo->query('SELECT st.id, s.imie, s.nazwisko, w.nazwa FROM studenci_i_wyklady st JOIN studenci s ON st.studenci_id = s.id JOIN wyklady w ON st.wyklady_id = w.id');

        echo '<table class="table table-hover">';
        echo '
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student</th>
                    <th scope="col">Wykład</th>
                    <th scope="col" colspan="2" class="text-center">Akcja</th>
                </tr>
            </thead>
		';
        echo '<tbody>';
        while ($row = $res->fetch()) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['imie']} {$row['nazwisko']}</td>
                    <td>{$row['nazwa']}</td>
                    <td style='text-align: center;'><a href=f1editStuwyk.php?editStuwyk={$row['id']} class='btn btn-info'>Edytuj</a></td>
                    <td style='text-align: center;'><a href=f1action.php?deleteStuwyk={$row['id']} class='btn btn-danger'>Usuń</a></td>
                </tr>
			";
        }
        echo '</tbody>';
        echo '</table>';
    }

    public function insertStudent($imie, $nazwisko, $data_ur, $email, $telefon, $adres)
    {
        $this->pdo->exec("INSERT INTO studenci (imie, nazwisko, data_ur, email, telefon, adresy_id) VALUES ('$imie', '$nazwisko', '$data_ur', '$email', '$telefon', '$adres')");
    }

    public function insertWyklad($nazwa)
    {
        $this->pdo->exec("INSERT INTO wyklady (nazwa) VALUES ('$nazwa')");
    }

    public function insertAdres($kod_pocztowy, $miejscowosc, $ulica)
    {
        $this->pdo->exec("INSERT INTO adresy (kod_pocztowy, miejscowosc, ulica) VALUES ('$kod_pocztowy', '$miejscowosc', '$ulica')");
    }

    public function insertStuwyk($student, $wyklad)
    {
        $this->pdo->exec("INSERT INTO studenci_i_wyklady (studenci_id, wyklady_id) VALUES ('$student', '$wyklad')");
    }

    public function deleteStudent($id)
    {
        $this->pdo->exec("DELETE FROM studenci WHERE id=$id");
    }

    public function deleteWyklad($id)
    {
        $this->pdo->exec("DELETE FROM wyklady WHERE id=$id");
    }

    public function deleteAdres($id)
    {
        $this->pdo->exec("DELETE FROM adresy WHERE id=$id");
    }

    public function deleteStuwyk($id)
    {
        $this->pdo->exec("DELETE FROM studenci_i_wyklady WHERE id=$id");
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

    public function editWyklad($id)
    {
        $res = $this->pdo->query('SELECT * FROM wyklady WHERE id=' . $id);
        $row = $res->fetch();

        $wyklad['nazwa'] = $row['nazwa'];

        return $wyklad;
    }

    public function editAdres($id)
    {
        $res = $this->pdo->query('SELECT * FROM adresy WHERE id=' . $id);
        $row = $res->fetch();

        $adres['kod_pocztowy'] = $row['kod_pocztowy'];
        $adres['miejscowosc'] = $row['miejscowosc'];
        $adres['ulica'] = $row['ulica'];

        return $adres;
    }

    public function updateStudent($id, $imie, $nazwisko, $data_ur, $email, $telefon, $adres)
    {
        $this->pdo->exec("UPDATE studenci SET imie='$imie', nazwisko='$nazwisko', data_ur='$data_ur', email='$email', telefon='$telefon', adresy_id='$adres' WHERE id=$id");
    }

    public function updateWyklad($id, $nazwa)
    {
        $this->pdo->exec("UPDATE wyklady SET nazwa='$nazwa' WHERE id=$id");
    }

    public function updateAdres($id, $kod_pocztowy, $miejscowosc, $ulica)
    {
        $this->pdo->exec("UPDATE adresy SET kod_pocztowy='$kod_pocztowy', miejscowosc='$miejscowosc', ulica='$ulica' WHERE id=$id");
    }

    public function updateStuwyk($id, $student, $wyklad)
    {
        $this->pdo->exec("UPDATE studenci_i_wyklady SET studenci_id='$student', wyklady_id='$wyklad' WHERE id=$id");
    }

    public function selectAdres()
    {
        $res = $this->pdo->query('SELECT * FROM adresy');

        echo "<select class='form-control' id='adresInput' name='adres'>";
        while ($row = $res->fetch()) {
            echo "<option value='" . $row['id'] . "'>'" . $row['kod_pocztowy'] . " " . $row['miejscowosc'] . " " . $row['ulica'] . "'</option>";
        }
        echo "</select>";
    }

    public function selectStudent()
    {
        $res = $this->pdo->query('SELECT * FROM studenci');

        echo "<select class='form-control' id='studentInput' name='student'>";
        while ($row = $res->fetch()) {
            echo "<option value='" . $row['id'] . "'>'" . $row['imie'] . " " . $row['nazwisko'] . "'</option>";
        }
        echo "</select>";
    }

    public function selectWyklad()
    {
        $res = $this->pdo->query('SELECT * FROM wyklady');

        echo "<select class='form-control' id='wykladInput' name='wyklad'>";
        while ($row = $res->fetch()) {
            echo "<option value='" . $row['id'] . "'>'" . $row['nazwa'] . "'</option>";
        }
        echo "</select>";
    }
}
