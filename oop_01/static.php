<?php

//? elementi statici 

// per definire un elemento come statico utilizzo la keyword static, applicabile a attributi e metodi 
// le costanti sono elementi statici di default

// la keyword static indica che un elemento non appartiene più alle singolo istanze della classe(oggetti),
// ma è accessibile direttamente dalla classe e è in condivisione tra tutte le singole istanze

class Cane{

    public $numeroCani=0;
    public static $numeroDiCani =0;

    public function __construct()
    {
        $this->numeroCani++;


        self::$numeroDiCani++;

        
    
    }

}

$cane = new Cane;

$cane2 = new Cane;

$cane3 = new Cane;

$cane2 = new Cane;

// echo $cane->numeroCani ."\n";

// echo Cane::$numeroDiCani;


//gli attributi normali appartengono allo spazio di istanza dei singoli oggetti e posso accedervi dalle singole istanze

class Statica{

    public $variabileNormale;
    //può assumere un valore diverso a seconda dell'istanza in cui mi trovo


    public static $variabileStatica;
    // un attributo statico appartiene alla classe ed ha un unico valore modificabile e in condivisione tra tutte le istanze
    // posso accedere ad un attributo statico anche senza istanziare mai la classe

    public function nonStatica(){
        echo "Non statica \n";
    }

    public static function statica(){
        echo "Statica \n";
    }
}

//? gli attributi statici non richiedono un'istanza per accedervi

Statica::$variabileStatica; //giusto

// Statica::statica(); // giusto

//  Statica->$variabileNormale; //non posso

// $statica = new Statica;

//? per accedere agli attributi non statici devo per forza creare un'istanza

// $statica->variabileNormale;


//? self, $this e accesso esterno

class QuattroPunti{

    public $variabile;
    public static $variabile2;

    public function __construct(){
        // per attributi non statici dall'interno della classe : this->variabile
        $this->variabile = 4;

        // per attributi statici dall'interno della classe : self::$variabile2
        //!scope resolution operator ::
        self::$variabile2 = 5;

    }

}

// dall'esterno della classe accedo a 
// elementi statici con:  Classe::$variabile

QuattroPunti::$variabile2;

// elementi non statici : $istanza->variabile

$istanza = new QuattroPunti;

$istanza->variabile;



// Esercizio

// voglio creare delle aziende e a seconda del guadagno annuale di tutte ogni azienda calcolare il guadagno totale 

class Azienda{

    public static $guadagnoTotale =0;

    public $guadagnoAnnuale=0;

    public function __construct($guadagnoAnnuale)
    {
        $this->guadagnoAnnuale = $guadagnoAnnuale;

        self::$guadagnoTotale += $guadagnoAnnuale;
    }

}

$azienda1 = new Azienda(400000);

$azienda2 = new Azienda(rand(0,1000000));

$azienda3 = new Azienda(rand(0,1000000));

$azienda4 = new Azienda(rand(0,1000000));

$azienda5 = new Azienda(rand(0,1000000));

var_dump(Azienda::$guadagnoTotale);

$controlloGuadagno = $azienda1->guadagnoAnnuale +  $azienda2->guadagnoAnnuale +  $azienda3->guadagnoAnnuale + 
 $azienda4->guadagnoAnnuale + $azienda5->guadagnoAnnuale;

 var_dump($controlloGuadagno);


 //esercizio

 // voglio creare due classi un giardiniere e un fiore e voglio che il giardiniere vada a tagliare diverse istanze di fiori
 // tenendo conto del numero di fiori tagliati o lasciati vivere sulla base del colore (rosso)

 class Fiore{
    public $colore;
    public function __construct($colore)
    {
        $this->colore = $colore;
    }
 }


 class Giardiniere{

    public $fioriTagliati=0;
    public $fioriSalvati =0;

    public function tagliaFiore(Fiore ...$fiori){
       foreach($fiori as $fiore){

        if($fiore->colore != 'rosso'){
            $this->fioriTagliati++;
        }
        else{
            $this->fioriSalvati++;
        }
       }
        
    }
 }

 

 $fiore1 = new Fiore('rosso');
 $fiore2 = new Fiore('giallo');
 $fiore3 = new Fiore('rosso');
 $fiore4= new Fiore('rosso');
 $fiore5 = new Fiore('blue');

 $giardiniere1 = new Giardiniere;

 $giardiniere1->tagliaFiore($fiore1,$fiore2,$fiore3,$fiore4,$fiore5);

 echo $giardiniere1->fioriSalvati;
 echo $giardiniere1->fioriTagliati;
