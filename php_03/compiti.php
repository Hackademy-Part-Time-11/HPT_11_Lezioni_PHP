<?php

//scrivere una funzione che consenta di verificare l'idoneità di una password secondo alcuni criteri

//lunghezza di almeno 8 caratteri
//contenga almeno un carattere maiuscolo 
//contenga almeno un carattere speciale 
//contenga almeno un numero

$password = readline("Inserisci una password sicura: ");

function controlloPassword(string $password){

        //checkUpper();
        //checkNumber();
        if(checkSpecial($password)){
            echo "La password va bene";
        };
        //checkLength();

        if(!checkLength()){
            "La password è troppo corta"
        }
        if(!checkLength()){
            "La password è troppo corta"
        }
        if(!checkLength()){
            "La password è troppo corta"
        }
        if(!checkLength()){
            "La password è troppo corta"
        }

}

function checkSpecial($password){
    $specialChars = ['@','!','#','&','$'];
    $check = false;
    for($i=0;$i<strlen($password);$i++){
        if(in_array($password[$i],$specialChars)){
            $check = true;
        }
    }
    return $check;
}


controlloPassword($password);