<!-- definite una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

 <?php

 class movie{
     public $title;
     public $category;
     public $minutes;
     public $year_release;

     function __costructor(String $title ,String $category,String $minutes,String $year_release){
         $this->title = $title;
         $this->category = $category;
         $this->minutes = $minutes;
         $this->year_release = $year_release;
     }
     
     /**
      * @return title, title of the film;
      
        
      */
     public function get_title(){
         return $this->title;
     }
     public function get_category(){
        return $this->category;
    }
    public function get_minutes(){
        return $this->minutes;
    }
    public function get_year_release(){
        return $this->year_release;
    }
 };

 $film= new Movie('Avengers', 'Fantascienza', '90', '2018');
 $film ->title = 'avengers';
$film ->category = 'fantascienza';
$film ->minutes = '120';
$film ->year_release = '2018';
 var_dump($film);

