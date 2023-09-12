<?php
$a = "Variabile";
$stringa = "Contengo una variabile $a \n"; // apici doppi riconoscono caratteri speciali ad es $
$stringa1 = 'Contengo una \'variabile $a \n'; // apici singoli interpretano tutto il contenuto come una stringa

//var_dump($stringa);

$stringa = "Contengo una 'variabile' $a \n";
//var_dump($stringa);

$stringa = "Contengo una \"variabile\" $a \n"; // sbagliato bisogna utilizzare escape character per rendere la definizione corretta
//  var_dump($stringa);

$stringa = 'Contengo una \'variabile\' $a \n';
// var_dump($stringa);

//  escape characters \' \" \$ \n


// echo "Scrivo in console";

//?operatore di concatenazione 

// echo "Stringa " . "concatenata";

$a = 5;

// echo "Il mio numero è: " . $a . ' ed è un intero';

//operatore concatenazione richiede due stringhe 

$a = "10.5operazione";

$b = 10;

// echo $a+$b; // la stringa con un operatore somma viene convertita a un intero e viene sommata


//? type coercion o forzatura della tipologia di dato

//php la esegue in automatico a secondo dell'operazione che sta eseguendo 



//? type casting 
$c = (float) $a;

//echo $c;


// strlen 

echo strlen("Molto a caso\n"); // ritorna la lunghezza della stringa passata come parametro

echo strtolower("CARAtteri MAIUSCOLI"); // rende minuscoli i caratteri maiuscoli passati come argomento

echo strtoupper("stringa");// rende maiuscoli i caratteri minuscoli passati come argomento
















