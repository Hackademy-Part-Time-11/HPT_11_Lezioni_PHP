<?php

//! keyword abstract 

// una classe astratta non può essere istanziata

 abstract class Normale{
    public $nome;

    public function saluta(){
        echo "ciao sono $this->nome";
    }


}


// per definire un metodo come astratto devo essere all'interno di una classe astratta
// quando definisco un metodo come astratto non posso assegnargli un corpo
abstract class Diversa {
    public $nome;
    // la visibilità di metodi astratti è o public o protected
    public abstract function saluta();
}

class Sotto extends Diversa{
    public function saluta(){
        echo "Ciao";
    }


}
class Sopra extends Diversa{
    public function saluta(){
        echo "Ciao sopra";
    }
}


//Persona, Studente, Docente

 abstract class Persona{

    public $name;
    public $surname;

    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public abstract function presentati();

 } 

 class Docente extends Persona{

    public $materia;
    public function __construct($name,$surname,$materia)
    {
        $this->materia = $materia;
        parent::__construct($name,$surname);
    }

    public function presentati()
    {
        echo " Sono $this->name $this->surname e insegno $this->materia \n";
    }
 }

 class Studente extends Persona{

    public $media;
    public function __construct($name,$surname,$media)
    {
        $this->media = $media;
        parent::__construct($name,$surname);
    }

    public function presentati()
    {
        echo " Sono $this->name $this->surname e ho la media di $this->media \n";
    }
 }

 class Supplente extends Docente{

 }


 $persona = new Studente('Gianni','Chao',78);

class Classe{
    public $membri=[];
    public function addPersona(Persona $persona){
        array_push($this->membri, $persona);
        $persona->presentati();
    }

}

$docente = new Docente('Piero','Freschi','Italiano');

$classe = new Classe;

$classe->addPersona($docente);
$classe->addPersona(new Studente('Paola','Viola',72));
var_dump( $classe);