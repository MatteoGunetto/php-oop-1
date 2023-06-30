<?php

// creazione classe movie
class Movie
{
    public $title;
    public $director;
    public $duration;
    private $year_of_release;
    private $genreArray = array();

    function __construct(string $_title, int $_duration, string $_director = 'Russo brothers')
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->duration = $_duration;
    }

    public function setYear($year_of_release)
    {
        if (is_string($year_of_release)) {
            echo 'Errore, inserisci un anno valido';
        } else {
            $this->year_of_release = $year_of_release;
        }
    }
    public function getYear()
    {
        return $this->year_of_release;
    }

    // funzioni per aggiungere più di un genere

    public function addGenre($genre)
    {
        $this->genreArray[] = $genre;
    }

    public function getGenres()
    {
        return $this->genreArray;
    }
}

// istanza di due oggetti con classe Movie
$movie1 = new Movie('Avengers: Infinity War', 149);
$movie1->setYear(2018);
$movie1->getYear();
$movie1->addGenre('Azione');
$movie1->addGenre('Fantascienza');
$movie1->addGenre('Avventura');
$movie1->getGenres();
// var_dump($movie1);

echo '<br>';
echo '<br>';

$movie2 = new Movie('Avengers: Endgame', 181);
$movie2->setYear(2019);
$movie2->getYear();
$movie2->addGenre('Azione');
$movie2->addGenre('Fantascienza');
$movie2->addGenre('Avventura');
$movie2->getGenres();
// var_dump($movie2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>

    <h1>Infinity Saga</h1>

    <div>
        <h2>
            Titolo:
            <?php echo $movie1->title ?>
        </h2>
        <h3>
            Regista:
            <?php echo $movie1->director ?>
        </h3>
        <h3>
            Durata: <?php echo $movie1->duration ?> min
        </h3>
        <h3>
            Anno di uscita: <?php echo $movie1->getYear() ?>
        </h3>
        <h3>
            Genere: <?php
            for ($i=0; $i < count($movie1->getGenres()); $i++) { 
                echo $movie1->getGenres()[$i] . ' ';
            } ?>
        </h3>
    </div>
    <br>
    <div>
        <h2>
            Titolo:
            <?php echo $movie2->title ?>
        </h2>
        <h3>
            Regista:
            <?php echo $movie2->director ?>
        </h3>
        <h3>
            Durata: <?php echo $movie2->duration ?> min
        </h3>
        <h3>
            Anno di uscita: <?php echo $movie2->getYear() ?>
        </h3>
        <h3>
            Genere: <?php
            for ($i=0; $i < count($movie2->getGenres()); $i++) { 
                echo $movie2->getGenres()[$i] . ' ';
            } ?>
        </h3>
    </div>

</body>

</html>