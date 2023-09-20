<?php 

// creaimo tre classi persona, docente e studente

class Persona{
    public $nome;
    public $cognome;
    public $eta;
    public static $numeroGambe = 2;

    public static function numeroDiGambe(){
        echo "Una persona ha ". self::$numeroGambe. " gambe \n"; 
    }

    public function saluta(){
        echo "Ciao sono $this->nome $this->cognome";
    }

    public function __construct($nome,$cognome,$eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }
}

   // all'interno delle definizioni di classe posso accedere a attributi o
    // metodi della classe padre statici solamente con parent::
    // se gli elementi non sono statici posso utilizzare direttamente $this->attributo
class Docente extends Persona{

    public $materia;
    public function __construct($nome,$cognome,$eta,$materia)
    {
        parent::__construct($nome,$cognome,$eta);
        $this->materia = $materia;
        
        
    }

}

class Studente extends Persona{
    public $media ;
 
    public function __construct($nome,$cognome,$eta,$media)
    {
        parent::__construct($nome,$cognome,$eta);
        $this->media = $media;
    }
    
    
}

class StudenteElementari extends Studente{
    

    public function __construct($nome,$cognome,$eta,$media)
    {
        parent::__construct($nome,$cognome,$eta,$media);
        
    }
    
    
}


$studente = new Studente('Marco','Bianchi',23,87);

// se accedo ai metodi o attributi da un'istanza posso accedere sia in modo statico che non statico

$studente->numeroDiGambe();
$studente::numeroDiGambe();
$studente->saluta();

// dall'istanza non posso accedere a metodi non statici con operatori statici
// $studente::saluta();

// se accedo senza aver istanziato un oggetto devo farlo esclusivamente in maniera statica

Persona::numeroDiGambe();

Studente::numeroDiGambe();
