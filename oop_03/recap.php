<?php

// creaiamo un robot quindi gestiamo arti superiori e inferiori sfruttando la composizione

class Robot{
    public $vita = 120;

    public $braccio_dx;
    public $braccio_sx;

    public $gamba_dx;
    public $gamba_sx;

    public function __construct(Braccio $b_dx,Braccio $b_sx,Gambe $g_dx, Gambe $g_sx)
    {
        $this->braccio_dx = $b_dx;
        $this->braccio_sx = $b_sx;
        $this->gamba_dx = $g_dx;
        $this->gamba_sx = $g_sx;
    }
    
    public function attacca(Robot $bersaglio){
        $this->braccio_dx->attacca($bersaglio);
        $this->braccio_sx->attacca($bersaglio);
    }
    public function para(){
        $this->braccio_dx->difendi();
        $this->braccio_sx->difendi();
        $this->gamba_dx->accovacciati();
        $this->gamba_sx->accovacciati();
    }

}


abstract class Braccio{

    public abstract function attacca($bersaglio);
    
    public abstract function difendi();
}

class Trapano extends Braccio{
    public $potenza =10;
    public $difesa = 7;
    public function attacca($bersaglio)
    {
        $bersaglio->vita -= $this->potenza;
        echo "Il braccio col trapano infligge $this->potenza danni \n";
    }

    public function difendi(){
        echo "Il braccio col trapano difende per $this->difesa danni\n";
    }
}

class Artiglio extends Braccio{
    public $potenza =14;
    public $difesa = 1;
    public function attacca($bersaglio)
    {
        $bersaglio->vita -= $this->potenza;
        echo "L'artiglio infligge $this->potenza danni \n";
    }

    public function difendi(){
        echo "L'artiglio difende per $this->difesa danni \n";
    }
}


abstract class Gambe{
    public abstract function corri();
    
    public abstract function salta();

    public abstract function accovacciati();

}

class Molla extends Gambe{

    public function corri(){
        echo "La molla corre ribalzando \n";
    }
    public function salta(){
        echo "La molla salta in alto \n";
    }
    public function accovacciati()
    {
        echo "La molla si comprime \n";
    }

}
class Ruota extends Gambe{

    public function corri(){
        echo "La ruota gira veloce \n";
    }
    public function salta(){
        echo "La ruota non salta \n";
    }
    public function accovacciati()
    {
        echo "La ruota se gira de lato \n";
    }

}
class Razzo extends Gambe{

    public function corri(){
        echo "Il razzo scatta \n";
    }
    public function salta(){
        echo "Il razzo vola \n";
    }
    public function accovacciati()
    {
        echo "Il razzo sta fermo \n";
    }

}

$trapano = new Trapano;
$artiglio = new Artiglio;
$ruota = new Ruota;
$razzo = new Razzo;
$molla = new Molla;


$robot = new Robot($trapano,$artiglio,$razzo,$razzo);

// $robot->attacca();
// $robot->para();

$robot2= new Robot($trapano,$artiglio,$molla,$ruota);

$robot2->attacca($robot);

var_dump($robot);
