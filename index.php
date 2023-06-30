<?php
class Movie{
    public $title;
    public $director;
    public $duration;
    private $year_of_release;

    public function setYear($year_of_release){
        if(is_string($year_of_release)){
            echo 'Errore, inserisci un anno valido';
        }
        else{
            $this->year_of_release = $year_of_release;
        }
    }
    public function getYear(){
        return $this->year_of_release;
    }
}

$star_wars_episode_IV = new Movie();
$star_wars_episode_IV->title = 'Star Wars: Episode IV';
$star_wars_episode_IV->director = 'George Lucas';
$star_wars_episode_IV->duration = 121;
$star_wars_episode_IV->setYear(1977);
$star_wars_episode_IV->getYear();
var_dump($star_wars_episode_IV);


$avengers_endgame = new Movie();
$avengers_endgame->title = 'Avengers: Endgame';
$avengers_endgame->director = 'Russo brothers';
$avengers_endgame->duration = 181;
$avengers_endgame->setYear(2019);
$avengers_endgame->getYear();
var_dump($avengers_endgame);