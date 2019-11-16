<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Mateusz Boczarski 18560">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">

        <title>Lab 3 | Zad 3</title>

        <style>
            .carousel-item.active {
                display:block;
            }
        </style>
    </head>

    <body>
		<!-- 
            Wykonaj ponownie zadanie 1 tylko z tą różnicą, że dowcipy powinny być wyświetlane w postaci "slidera" (https://bs4.kursbootstrap.pl/slider-carousel/).
        -->

		<h2>Lab 3 | Zad 3</h2>

        <?php $f = fopen("dowcipy.txt", "r"); ?>
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $class = "carousel-item text-center p-4 active"; ?>
                    <?php while (!feof($f)) { ?>
                        <div class="<?php echo $class ?>">
                            <h4>
                                <?php
                                    $line = fgets($f);
                                    echo $line;
                                ?>
                            </h4>
                            <p>
                                <?php
                                    while (trim($line) != '') {
                                        $line = fgets($f);
                                        echo $line."<br>";
                                    }
                                ?>
                            </p>
                        </div>
                    <?php $class = "carousel-item text-center p-4"; } ?>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Poprzedni</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Następny</span>
                </a>
            </div>
        </div>
        <?php fclose($f); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>