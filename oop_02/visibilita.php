<?php

use Docente as GlobalDocente;

class Persona1{
    // public indica che l'attributo è visibile in tutto il codice
    public $attributoPubblico = 'ValorePubblico';
    // private indica che l'attributo o metodo è visibile solamente all'interno della classe stessa
    private $attributoPrivato = 'ValorePrivato';
    // protected indica che l'attributo è visibile solamente alla classe stessa e alle classi che ereditano da esssa
    protected $attributoProtetto = 'ValoreProtetto';
}

class Docente extends Persona1{
    public function __construct()
    {
        // echo $this->attributoPubblico ."\n";
        // // echo $this->attributoPrivato ."\n";
        // echo $this->attributoProtetto ."\n";
    }
}

class Studente extends Persona1{

}

$docente = new Docente();

print_r($docente);

echo $docente->attributoPubblico ."\n";


class Banca{

    private $soldiTotali = 293482;

    // metodi getter o setter
    public function getSoldiTotali(){
        return $this->soldiTotali;
    }

    protected function setSoldiTotali($valore){
        $this->soldiTotali = $valore;
    }

}

class Impiegato extends Banca{

    public function withdraw($soldi){
        if ($soldi<$this->getSoldiTotali()){
            echo "soldi prelevati con successo";

        }
        else{
            echo "La banca non ha disponibilità sufficiente";
        }
    }
}

$banca = new Banca;

$impiegato = new Impiegato;

$impiegato->withdraw(222222);



