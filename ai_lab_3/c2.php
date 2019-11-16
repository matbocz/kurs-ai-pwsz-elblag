<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Mateusz Boczarski 18560">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">

        <title>Lab 3 | Zad 2</title>
    </head>

    <body>
		<!-- 
            Wykonaj ponownie zadanie 1 tylko z tą różnicą, że dowcipy powinny być wyświetlane w postaci "akordeonu" (https://bs4.kursbootstrap.pl/akordeon-collapse/).
		-->

		<h2>Lab 3 | Zad 2</h2>

        <?php $f = fopen("dowcipy.txt", "r"); ?>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <?php $i_pyt = "pyt1"; $i_odp = "odp1"; ?>
                <?php while (!feof($f)) { ?>
                    <div class="card">
                        <div class="card-header" id="<?php echo $i_pyt ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="<?php echo "#".$i_odp ?>" aria-expanded="false" aria-controls="<?php echo $i_odp ?>"> 
                                    <?php
                                        $line = fgets($f);
                                        echo $line;
                                    ?>
                                </button>
                            </h2>
                        </div>

                        <div id="<?php echo $i_odp ?>" class="collapse" aria-labelledby="<?php echo $i_pyt ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <?php
                                    while (trim($line) != '') {
                                        $line = fgets($f);
                                        echo $line."<br>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php $i_pyt++; $i_odp++; } ?>
            </div>
        </div>
        <?php fclose($f); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>