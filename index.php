<!-- 
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php

define('MIN_BUDGET', 1000000);
class Movie{
    private $title;
    private $direction;
    private $startRecording;
    private $budget;

    function __construct($_titleMovie, $_direction, $_startRecording = 'undefine', $_budget = 0){
        $this->setTitleMovie($_titleMovie);
        $this->setDirectionMovie($_direction);
        $this->setStartRecordingMovie($_startRecording);
        $this->setBudgetMovie($_budget);
    }

    public function setTitleMovie($_title){
        $this->title = $_title;
    }

    public function setDirectionMovie($_direction){
        $this->direction = $_direction;
    }

    public function setStartRecordingMovie($_startRecording){
        $this->startRecording = $_startRecording;
    }

    public function setBudgetMovie($_budget){
        $this->budget = $_budget;
    }

    public function getTitleMovie(){
        return $this->title;
    }

    public function getDirectionMoviee(){
        return $this->direction;
    }

    public function getStartRecordingMovie(){
        return $this->startRecording;
    }

    public function getBudgetMovie(){
        return $this->budget;
    }

    public function isRecMovie(){
        if( $this->getBudgetMovie() > MIN_BUDGET){
            return 'La produzione ha accettato la proposta nella realizzazione del film';
        } else {
            return 'La produzione non può permettersi di realizzare questo film';
        }
    }
}

$movie1 = new Movie('L\'era glaciale', 'Chris Wedge', '2002', 59000000);
echo "<h1 style=\"font-size: 1.5rem\">Movie 1:</h1>" . "<div><p>Title: " . $movie1->getTitleMovie() . ", Direction: " . $movie1->getDirectionMoviee() . ", Start recording: " . $movie1->getStartRecordingMovie() . ", Budget: " . $movie1->getBudgetMovie() . " USD, Authorization: <div style=\"font-weight: 600; padding-left: 30px; color: blue\">" . $movie1->isRecMovie() . "</div></p></div>";

$movie2 = new Movie('Un metro da te', 'Justin Baldoni', '2019', 7000000);
echo "<h1 style=\"font-size: 1.5rem\">Movie 2:</h1>" . "<div><p>Title: " . $movie2->getTitleMovie() . ", Direction: " . $movie2->getDirectionMoviee() . ", Start recording: " . $movie2->getStartRecordingMovie() . ", Budget: " . $movie2->getBudgetMovie() . " USD, Authorization: <div style=\"font-weight: 600; padding-left: 30px; color: blue\">" . $movie2->isRecMovie() . "</div></p></div>";

$movie3 = new Movie('Leggero come una foglia', 'Marcus Landini', '2013', 900000);
echo "<h1 style=\"font-size: 1.5rem\">Movie 3:</h1>" . "<div><p>Title: " . $movie3->getTitleMovie() . ", Direction: " . $movie3->getDirectionMoviee() . ", Start recording: " . $movie3->getStartRecordingMovie() . ", Budget: " . $movie3->getBudgetMovie() . " USD, Authorization: <div style=\"font-weight: 600; padding-left: 30px; color: blue\">" . $movie3->isRecMovie() . "</div></p></div>";

$movie4 = new Movie('Il Gladiatore', '	Ridley Scott', '2000', 103000000);
echo "<h1 style=\"font-size: 1.5rem\">Movie 4:</h1>" . "<div><p>Title: " . $movie4->getTitleMovie() . ", Direction: " . $movie4->getDirectionMoviee() . ", Start recording: " . $movie4->getStartRecordingMovie() . ", Budget: " . $movie4->getBudgetMovie() . " USD, Authorization: <div style=\"font-weight: 600; padding-left: 30px; color: blue\">" . $movie4->isRecMovie() . "</div></p></div>";
?>