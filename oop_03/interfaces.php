<?php

// interfaccia ci permette di stabilire i metodi che una classe che implementa l'interfaccia deve per forza definire

//definizione interfaccia

interface PagamentoBancarioInterface{
    // i metodi devono per forza essere pubblici
    public function paga($importo);


}

trait Prova{

    public function Prova(){


    }
}





// le interfacce vengono utilizza quando una classe esterna deve poter richiamare obbligatoriamente dei metodi di un'altra classe
// l'altra classe implementera la nostra interfaccia e dovrà definire questi metodi

class ATM{

    public function deposita($metodo,$importo){
        $metodo->paga($importo);
    }
}


class Debito{

}
class Bonifico extends Debito implements PagamentoBancarioInterface{
    public function paga($importo){
        echo "Sto pagando con bonifico : $importo ";
    }
}

class CartaCredito implements PagamentoBancarioInterface{
    public function paga($importo){
        echo "Sto pagando con carta di credito : $importo ";
    }
}

class Contanti implements PagamentoBancarioInterface{
    public function paga($importo){
        echo "Sto pagando  in contanti : $importo ";
    }
}

$atm = new ATM;

$atm->deposita(new Contanti,1000);

