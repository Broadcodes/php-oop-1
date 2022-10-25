<!-- 
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php

define('MIN_BUDGET', 10000);
class Movie{
    private $title;
    private $direction;
    private $exitDate;
    private $budget;
    private $recessed;

    function __construct($_titleMovie, $_direction, $_exitDate = 'undefine', $_budget = 0, $_recessed = 0){
        // $this->title = $_titleMovie;
        $this->title = $this->setTitleMovie($_titleMovie);

        $this->direction = $this->setDirectionMovie($_direction);
        $this->exitDate = $this->setExitDateMovie($_exitDate);
        $this->budget = $this->setBudgetMovie($_budget);
        $this->recessed = $this->setRecessedMovie($_recessed);
    }

    public function setTitleMovie($_title){
        // if($this->getBudgetMovie() > MIN_BUDGET){
            $this->title = $_title;
        // } else {
        //     $this->title = null;
        // }
    }

    public function setDirectionMovie($direction){
        if($this->getBudgetMovie() > MIN_BUDGET){
            $this->direction = $direction;
        } else {
            $this->direction = null;
        }
    }

    public function setExitDateMovie($exitDate){
        if($this->getBudgetMovie() > MIN_BUDGET){
            $this->exitDate = $exitDate;
        } else {
            $this->exitDate = null;
        }
    }

    public function setBudgetMovie($budget){
        $this->budget = $budget;
    }
    
    public function setRecessedMovie($recessed){
        if($this->getBudgetMovie() > MIN_BUDGET){
            $this->recessed = $recessed;
        } else {
            $this->recessed = null;
        }
    }

    public function getTitleMovie(){
        return $this->title;
    }

    public function getDirectionMoviee(){
        return $this->direction;
    }

    public function getExitDateMovie(){
        return $this->exitDate;
    }

    public function getBudgetMovie(){
        return $this->budget;
    }

    public function getRecessedMovie(){
        return $this->recessed;
    }
}

$movie1 = new Movie('L\'era glaciale', 'Jhon Erics', '12/03/2011', 32400, 54223);
echo("<h1></h1>Movie 1:</h1>" . "<div><p>Title: " . $movie1->getTitleMovie() . ", Direction: " . $movie1->getDirectionMoviee() . ", ExitDate: " . $movie1->getExitDateMovie() . ", Budget: " . $movie1->getBudgetMovie() . " euro, Recessed: " . $movie1->getRecessedMovie() . " euro" . "</p></div>");

$movie2 = new Movie('Un metro da te', 'Micheal Tim', '31/03/2003', 43523, 56344);
echo("<h1></h1>Movie 2:</h1>" . "<div><p>Title: " . $movie2->getTitleMovie() . ", Direction: " . $movie2->getDirectionMoviee() . ", ExitDate: " . $movie2->getExitDateMovie() . ", Budget: " . $movie2->getBudgetMovie() . " euro, Recessed: " . $movie2->getRecessedMovie() . " euro" . "</p></div>");

$movie3 = new Movie('Il Gladiatore', 'Philippe Morgan', '27/06/2018', 13455, 23455);
echo("<h1></h1>Movie 3:</h1>" . "<div><p>Title: " . $movie3->getTitleMovie() . ", Direction: " . $movie3->getDirectionMoviee() . ", ExitDate: " . $movie3->getExitDateMovie() . ", Budget: " . $movie3->getBudgetMovie() . " euro, Recessed: " . $movie3->getRecessedMovie() . " euro" . "</p></div>");
?>