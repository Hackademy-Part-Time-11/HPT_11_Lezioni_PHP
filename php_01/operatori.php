<?php

//? operatori matematici

$a = 10;
$b = 2;

// addizione 
 $c = $a + $b;

 // sottrazione 

 $c = $b - $a;

 // moltiplicazione

 $c = $a * $b;

 //divisione

 $c = $a / $b;

 //modulo

 $c = $a % $b;

 //potenza

 $c = $a ** $b;


//? operatori logici

// AND si scrive && ritorna true solo se tutti gli argomenti sono true

true && true; // true

true && false; // false

false && true; // false

false && false; // false

// OR si scrive || ritorna true se almeno un elemento è true

true || true; // true

true || false; // true

false || true; // true

false || false; // false

//NOT si scrive ! nega il valore di verità dell'elemento a cui è anteposto

!true; // false

!false; // true

//var_dump(!(false || false) && true);


//? operatori di confronto

//restituisco un valore booleano

$a = "8";
$b = 8;

// maggiore

 $a > $b;

 //minore
 $a < $b;

 // uguale 

$a == $b;

// stretta uguaglianza

$a ===  $b;

//maggiore o uguale 

$a >= $b;

// minore o uguale

$a <= $b;

//non uguaglianza

$a != $b;

//stretta non uguaglianza

$a !== $b;

// elementi truthy e falsy

$elemento = "";

$arrayVuoto = [25];

$intero = 0;

var_dump((string)$intero);