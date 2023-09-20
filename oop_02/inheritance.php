<?php 

//! Ereditarietà: permette di trasferire o "ereditare" attributi e metodi di una classe padre che verrano "copiati" nella classe figlia

class Padre{
    public $colore = 'rosso';

    public function saluta(){
        echo "Ciao sono la classe padre";
    }

}

// per fare in modo che la classe figlia erediti dalla classe padre si utilizza la keyword extends
class Figlia extends Padre{

    public $colore=18;
}

$figlio = new Figlia;



// $figlio->colore = 'verde';

// $figlio->saluta();

// var_dump($figlio);

// casi d'utilizzo: per evitare la duplicazione del codice, in cui posso scrivere del codice che voglio avere tra più classi in una classe padre 
//da cui queste classi ereditano

//altrimenti posso creare degli alberi di classi che eradinato da tutte la classi "padri" che si trovano a livelli superiori nella catena
// per risalire alle radici

class Radici{
    public $radici = 'lunghe e robuste';
}

class Tronco extends Radici{
    public $tronco = 'esile e alto';

}

class Ramo1 extends Tronco{
    public $ramo = 'ramo di pesche';
}

class Ramo2 extends Tronco{
    public $ramo = 'ramo di prugne';
}

class Foglia1 extends Ramo1{
    public $foglie = 'foglie di pesco';
}
class Foglia2 extends Ramo2{
    public $foglie = 'foglie di prugno';
}

$radice = new Radici;

$tronco = new Tronco;

$foglia1 = new Foglia1;

$foglia2 = new Foglia2;

print_r($foglia2);

//! in php una classe può ereditare solamente da un classe superiore all'interno della catena 
