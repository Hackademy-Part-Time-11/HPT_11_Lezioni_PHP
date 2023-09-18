<?php

//esempio di interazioni tra oggetti e classi

class Moto{


    //attributi
    public $nome;
    public $anno;
    public $chilometraggio;
    public $colore;

    //construct 

    public function __construct($nome,$anno,$km,$colore)
    {
        $this->nome = $nome;
        $this->anno = $anno;
        $this->chilometraggio = $km;
        $this->colore = $colore;
    }

    public function accelera(){
        echo "La moto impenna \n"; 
    }

    public function stampaSpecifiche(){
        echo "La moto si chiama:" . $this->nome ."\n";
        echo "La moto è stata costruita nel:" . $this->anno ."\n";
        echo "La moto ha percorso :" . $this->chilometraggio ." chilometri \n";
        echo "La moto è di colore:" . $this->colore ."\n";
    }

}

$moto1= new Moto('Hypermotar', 2020, 30000, 'rossa');

// $moto1->stampaSpecifiche();


class Concessionaria{

    public $motoInVendita = [];
    public $moto1;

    public function listaMoto(){
        foreach ($this->motoInVendita as $moto){
            echo "Moto : ";
        }
    }

    public static function ispezionaMoto(Moto $moto){
        echo "La moto si chiama:" . $moto->nome ."\n";
        echo "La moto è stata costruita nel:" . $moto->anno ."\n";
        echo "La moto ha percorso :" . $moto->chilometraggio ." chilometri \n";
        echo "La moto è di colore:" . $moto->colore ."\n";
    }

}
$moto2 = new Moto('Moto',1912,20430,'rosa');

$concessionaria = new Concessionaria;



array_push($concessionaria->motoInVendita, $moto1, $moto2);

print_r($concessionaria->motoInVendita);

//accedere a moto 2 da concessionaria 2

Concessionaria::ispezionaMoto($moto2);



