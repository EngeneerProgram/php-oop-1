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
     public $image;
     public $year_release;

     public function SetDate($year_release){
         if($year_release < 2007){
             $this->year_release = $year_release . " (non supporta la qualità HD)";
         }else{
             $this->year_release = $year_release .  " (Supporta la qualità HD)";
         }
     }
     
     function __construct(String $title ,String $category,String $minutes, String $image){
         $this->title = $title;
         $this->category = $category;
         $this->minutes = $minutes;
         $this->image = $image;
         
     }
     
    
    
 };

 $film= new Movie('Avengers', 'Fantascienza', '90', 'https://www.mbmusic.it/wp-content/uploads/2012/05/the-avengers-copertina-disco.jpg');
 $film1 = new Movie('Harry Potter', 'fantascienza', '90', 'https://pad.mymovies.it/filmclub/2009/08/023/locandina.jpg');
 $film1->SetDate(2003);
 $film->SetDate('2012');


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./assets/style/style.css">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 </head>
 <body>

<div class="container-fluid">

<div class="container d-flex pt-5">
    <div class="row ">
        <div class="col text-center">
            <div class="card">
                <div class="image">
                    <img src="<?php  echo ($film->image)  ?> " alt="">
                </div>
                    
                    <ul class="text">
                        <li>
                            <h1><?php echo ($film->title)  ?></h1>
                        </li>
                        <li>
                            <p><?php  echo ($film->category)  ?></p>
                        </li>
                        <li>
                        <p><?php  echo ($film->minutes) . ' minuti'  ?></p>
                        </li>

                        <li>
                        <p><?php  echo ($film->year_release)  ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col text-center">
            <div class="card">
                <div class="image">
                    <img src="<?php  echo ($film1->image)  ?> " alt="">
                </div>
                    
                    <ul class="text">
                        <li>
                            <h1><?php echo ($film1->title)  ?></h1>
                        </li>
                        <li>
                            <p><?php  echo ($film1->category)  ?></p>
                        </li>
                        <li>
                        <p><?php  echo ($film1->minutes) . ' minuti' ?></p>
                        </li>

                        <li>
                        <p><?php  echo ($film1->year_release)  ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

       



    </div>
</div>

</div>
     
 </body>
 </html>

