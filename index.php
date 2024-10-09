<?php

class Movie
{
    public $title;
    public $price;
    public $movieRelease;
    public $director;
    public $type;


    function __construct(string $_title, int $_price, int $_movieRelease, string $_director, string $_type)
    {
        $this->title = "$_title";
        $this->price = $_price;
        $this->movieRelease = $_movieRelease;
        $this->director = $_director;
        $this->type = $_type;
    }

    public function isNew()
    {
        $currentYear = date("Y");
        if ($currentYear - $this->movieRelease <= 5) {
            return "Nuovo";
        } else {
            return "Datato";
        }
    }
}

$spiderman = new Movie("Spider-Man", 19, 2012, "Shawn Levy", "Azione");
$avengers = new Movie("Avengers", 17, 2022, "Shawn Levy", "Azione");
$deadpool  = new Movie("Deadpool", 24, 2017, "Shawn Levy", "Azione");
$thor  = new Movie("Thor", 32, 2015, "Shawn Levy", "Azione");
$ironman  = new Movie("Iron-Man", 27, 2023, "Shawn Levy", "Azione");
$hulk  = new Movie("Hulk", 14, 2013, "Shawn Levy", "Azione");

$movies = [
    $spiderman,
    $avengers,
    $deadpool,
    $thor,
    $ironman,
    $hulk

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <ul class="d-flex gap-5 mt-5 p-0 flex-wrap justify-content-center">
                    <?php foreach ($movies as $item) { ?>
                    <li class="text-center">
                        <span class="badges"><?= $item->isNew() ?></span>
                        <h2 class="title"> <?= $item->title ?></h2>
                        <p>Anno di uscita: <b><?= $item->movieRelease ?></b></p>
                        <p>Prezzo: <b> <?= $item->price ?>€</b></p>
                        <p class="fw-semibold">Regista: <?= $item->director ?></p>
                        <p>Genere: <?= $item->type ?></p>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>