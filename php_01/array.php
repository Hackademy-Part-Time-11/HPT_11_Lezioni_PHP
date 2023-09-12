<?php

//definire gli elementi di un array posso assegnarli direttamente 
//quando lo definisco o aggiungerlo o modificarli in seguito

$array = "stringa";

$array = ["stringa", 56 , true];

// var_dump($array);

// print_r ($array);

//? gli array in php sono zero based


// selezione elementi di un array

$array = ["stringa", 56 , true, 5.4];

// echo $array[0] . $array[1] . $array[2];


// array di array 
$arrayMultidimensionale = ["stringa", 56 , true, 5.4 , ['frutta' =>"mela", 23, false, 6.5]];

// echo $arrayMultidimensionale[4][1];

//array associativo o chiave valore

$arrayChiaveValore = ["pesca",
                     "Giacomo",
                      'eta' => 54,
                    "Bianchi"];


var_dump($arrayMultidimensionale[4]['frutta']);

$esempio = ["Il", "pera", "lupo", ["mangia", "carne", ["e",["male","quando"], "sta"]]];

// Il lupo sta male quando mangia la pera

echo $esempio[0] . " " .  $esempio[2] . " " . $esempio[3][2][2] . " " . $esempio[3][2][1][0] 



    // Il                 lupo                         sta                male

    . " " . $esempio[3][2][1][1] ;

    //  quando  ecc...

    



