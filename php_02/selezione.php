<?php

//! -> ALGORITMO è l'insieme di operazioni e l'ordine in cui sono eseguite per risolvere un problema


//! Teorema di Bohm Jacopini : ogni algoritmo è scrivibile utilizzando tre strutture : sequenza, selezione e iterazione


//SEQUENZA è un blocco di codice che viene eseguito riga per riga una sola volta

//SELEZIONE è un blocco di codice le cui parti vengono eseguite o meno in base a una condizione

//ITERAZIONE è un blocco di codice che viene eseguito ripetutamente finchè una condizione non diventa falsa



// Costrutti SELEZIONE 

// IF

// IF ... ELSE

//IF ... ELSEIF

//SWITCH

$booleano = false;

/*if( condizione per eseguire il codice){
        // codice da eseguire quando la condizione è vera;
    }
    */

$arrayVuoto = [1];

if($arrayVuoto){

    //echo "Sto eseguendo il codice \n";

} 

//echo  "Ho superato l'if";


//IF ... ELSE

if(false){
    //echo "Sono dentro l'if";
}
else {
    //echo "Sono dentro l'else";
}

//IF ... ELSEIF

$intero = 3;

if( $intero >5){
   // echo "L'intero è maggiore di 5";
}
elseif($intero == 5){
    //echo "L'intero è uguale a 5";
}
elseif($intero ==4){
    //echo "L'intero è uguale a 4";
}
else{
    //echo "L'intero è minore di 4";
}

//SWITCH
$parametro = "a";
switch($parametro){
    case $parametro== "giallo" :
        echo "Il fiore è giallo\n";
        break;

    case $parametro == "rosso" :
        echo "Il fiore è rosso\n";
        break;

    default :
        echo "Il fiore non ha un colore \n";
        break;
       

}

echo "Fine switch\n";

//ES

$a = 10;
$b = "ot";

if (false) {
    $a + $b;
}

//ESEMPIO 

$etaPersona = 18;

// voglio che il programma mi dica se la persona può guidare o meno un'auto e se manca un solo anno dica "Il prossimo anno potrai guidare"
/*
if($etaPersona == 17){
    echo "Frequenza la scuola guida" ;
}
elseif ($etaPersona < 17){
    echo "Non puoi guidare la macchina";
}
else{
    
    if($etaPersona >= 21){
        echo "Puoi guidare ma bere mantenendo il tasso alcolemico entro i limiti";
    }
    else{
        echo "Puoi guidare ma non bere \n";
    }
    
}
*/
// ESEMPIO

$array = [5,"Scatola", true];

if($array[2]){
    echo "L'elemento di indice 2 ha valore booleano true";
}

$stringa = "";

if($stringa){
    echo "La stringa vale " . $stringa;
}
else{
    echo "La stringa non ha nessun valore";
}










    









