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

     public function SetDate($year_release){
         if($year_release < 2007){
             $this->year_release = $year_release . "non supporta la qualità HD";
         }else{
             $this->year_release = $year_release . "Supporta la qualità HD";
         }
     }
     
     function __construct(String $title ,String $category,String $minutes){
         $this->title = $title;
         $this->category = $category;
         $this->minutes = $minutes;
         
     }
     
    
    
 };

 $film= new Movie('Avengers', 'Fantascienza', '90', '2018');
 $film->SetDate('2012');
 var_dump($film);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>

<?php

echo $film->title;
echo $film->category;
echo $film->minutes;
echo $film->year_release;


?>
     
 </body>
 </html>

