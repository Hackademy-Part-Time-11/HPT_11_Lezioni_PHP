<?php

//? splat operator opera su elementi di tipo iterable

// ...

$a = [5,4,7,8];

//! la riga successiva non si scrive ma rende l'idea di cosa fa l'operatore
//$a = ...$a; // 5,4,7,8

//var_dump(...$a);

// es uso

$array = [7,9,3];

// $array [3] = $a[0];
// $array[4] = $a[1];

$array = [7,9,3,...$a];

//print_r($array);


//? splat operator come parametro di una funzione

// function concanazioneStringhe($par1,$par2,...){
//     echo $par1 .$par2. ecc
// }

function concanazioneStringhe(string ...$stringhe /* $par1,$par2,$par3,...*/){
    $concatenazioneTotale = "";
    foreach($stringhe as $stringa){
        $concatenazioneTotale .= " " . $stringa;
    }
    return $concatenazioneTotale;
}

$parole = ["Voglio", "concatenare", "questo", "array"];

echo concanazioneStringhe(...$parole);