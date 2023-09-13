<?php

//?ITERAZIONE codice ripetuto finchè una condizione è verificata

//?FOR

//?FOREACH

//?WHILE

//?DO WHILE

//! for

/*
for( inizializzazione paramatro ; condizione ; incremento o decremento parametro ){
    codice da eseguire in loop
}
*/

//esempio stampiamo il valore del parametro finchè è minore di 10

/*for($i; $i < count($array) ; $i++){
    echo $array[$i];
}

$a = 5;

$array = [5,"Scatola","Mela",6,"Gatto","Casa",8,"Piero","Attacco"];

for($a; $a < count($array) ; $a++){
    echo $array[$a];
}
*/

// count() ritorna il numero di elementi contenuti in un array

//! WHILE

$condizione = 5;

// il while viene eseguito finchè la condizione non diventa falsa, a differenza del for la modifica del parametro va 
//inserita nel codice

/*
while($condizione < 20){
    echo $condizione;
    $condizione++;
}
*/

//?approfondimento operatori incremento e decremento

// ++ e --
/*while ($condizione < 8){
   var_dump($condizione++) ;
}*/

//? DO WHILE

// il codice viene eseguito almeno una volta anche se la condizione risulta falsa

/*
$j = 5;
do{
    echo "Il numero è:" . $j;
    $j--;
}while($j<2);

$a = "Strada";
*/

//? FOREACH

// costrutto utilizzato per ciclare gli array
/*
$arrayForEach = ['3' =>5, 'indice2' => 2,'2' => 55,7,22];

foreach($arrayForEach as $elemento){
    var_dump($elemento);
}

echo $arrayForEach[4];
echo $arrayForEach[5];
*/
// array di array

$arrayMultidimensionale = [
                            ["Giacomo","Rossi",54],
                            ["Cristiano","Valletta",89],
                             ["Dario", "Ladisa",30] 
];

foreach ($arrayMultidimensionale as $persona){
    
    foreach ($persona as $dato){
        echo" ";
    }
    
}



// foreach($array as $elemento){
//     echo '<div> $elemento </div>';
// }

// array associativo

$arrayAssociativo = [
    'Giacomo' => ["Studente", 20],
    'Luca' => ["Insegnante", 56],
    'Viola' => ["Bidello", 70]
];

foreach($arrayAssociativo as $persona => $valore) {
    echo "$persona fa lo {$valore[0]} e ha {$valore[1]} anni \n";
}






