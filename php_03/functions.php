<?php

//? Funzioni 

//definizione : è un blocco di codice rieseguibile quando la funzione viene "chiamata"

//sintassi

// function somma( /*parametri */){
//     //codice da eseguire
//     // $a = 5+5;
//     // echo $a;
//     //valore di ritorno della funzione
//     //return 5;
// }

//? Chiamata di una funzione



// function stampaHelloWorld(){
//      echo "Hello world!";
// }

// stampaHelloWorld();


// le funzioni non sono case sensitive

// function stAmpaHelloWorld(){

// }

//? funzioni parametriche 

$a= 5;
$b = 10;

// function moltiplicazione( $i , $j){

//     echo $i * $j;

// }

// moltiplicazione($a,$b);


//?parametri con valore di default

function dividi($c = 6,$d = 2){
    echo $c/$d;

}



function app($a=5){
//echo $a;
}

app();

//echo $a ."\n";


//esempio somma

function  somma($num1 = 2, $num2 =3 ){
    echo $num1 + $num2;
}

//funzioni con valore di ritorno

function sottrazione($num1, $num2){
    return $num1 -$num2;
}

$a = sottrazione(6,4);

//?passaggio di parametro per riferimento

// $a= 2;
// function incremento(&$parametro){
//     $parametro +=1;
// }
// incremento($a);
// var_dump($a);


//?passaggio parametro per valore

// $a= 2;
// function incremento($parametro){
//     $parametro +=1;
// }

// incremento($a);
// var_dump($a);

//?assegnazione a variabile tramite passaggio per valore
// $a= 2;
// function incremento($parametro){
//     $parametro +=1;
//     return $parametro;
// }

// $a = incremento($a);
// var_dump($a);

//?return

// la keyword return assegna alla funzione il 
//valore dell'espressione che la segue e interrompe l'esecuzione della funzione
function checkNumero($numero){
    if($numero<15){
        echo $numero;
        return;
    }
    else{
        echo $numero;
        return "Il numero è maggiore o uguale di 15";
    }
}


//chiamata con tipo errato di parametro es.

//somma("2a",5);

//? definizione funzione con assegnazione del tipo di parametro

function funzione1(int $numeroIntero, float $float , string $stringa, bool $bool, array $array){
    echo $numeroIntero + $float;
}

//funzione1("5",5);


//? definizione del tipo di valore di ritorno atteso

function esempio():int{
    return 5;
}

var_dump(esempio());



//? funzioni chiamate dentro altre funzioni

function funzioneInterna(){
    echo "Sono una funzione";
}


// function funzioneEsterna(){
//     funzioneInterna();
// }


// funzioneEsterna();


//? funzioni di callback

//sono delle funzioni che vengono passate come parametro ad altre funzioni
function funzioneEsterna(callable $callback){
    $callback();
}

function fun2(){
    echo "Sono la funzione 2"; // funzione callback
}

function fun3(){
    echo "Sono la funzione 3"; // funzione callback
}

funzioneEsterna('fun3'); // funzione callback


// funzione anonima

$a = function (){return 5+4;};

funzioneEsterna(function(){echo "Sono la funzione anonima";});


