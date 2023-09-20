<?php 

class Costanti{

    const APP_ID = '09sajfn0392';

}

//definire costanti

define('ANNO',2023);

const ANNO_2 = 2024;

$bool= true;

if ($bool== true){

    define('ANNO',2023);

    //const ANNO_2 = 2024; sbagliato 

}

else{

    define('ANNO',2025);

   // const ANNO_2 = 2024; sbagliato

}

// define viene eseguito al runtime del programma e può essere utilizzato per definire costanti in maniera condizioale