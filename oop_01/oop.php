<?php

//! OOP: object oriented programming

//? è un paradigma di programmazione basato su classi o oggetti 

//Definizione classe

// nomi della classe utilizzano il camel case con la prima lettere maiuscola

class ClasseComposta{
    // attributi


    // metodi


}


//keyword di visibilità : public, private e protected

class Persona{

    // per la definizione di costanti è buona pratica scrivere tutto il nome maiuscolo al massimo separata da _
    const ANNO_SOLARE = 5;


    public $name;
    public $surname;
    public $age;

    // constructor ha la proprietà di venir chiamato in automatico ogni volta che viene creato un oggetto

    public function __construct($nome,$cognome,$eta)
    {   
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;
    }

    // destructor è un metodo che viene eseguito quando viene eliminato l'oggetto di questa classe o al termine del programma

    public function __destruct()
    {
        
    }

    // metodi

    public function saluta(){
        echo "Ciao sono $this->name $this->surname e ho $this->age anni!";
    }

}

//? istanziamento oggetti
$persona = new Persona('Giacomo','Rossi',57);

$persona1 = new Persona('Francesco','Bianchi',25);

//? accesso a attributi e metodi delle classi

// echo $persona->name;

// echo $persona->surname;

// $persona->surname = 'Bianchi';


// $this rappresenta l'istanza corrente dell'oggetto in cui viene chiamato


//?esempio di accesso ad istanze diverse

var_dump($persona->name);

var_dump($persona1->name);


//?chiamata metodo della classe

//!$persona::saluta(); non si accede a metodi o attributi statici con -> 

$persona1->saluta();


//? accesso alle costanti  si utilizza l'operatore ::

Persona::ANNO_SOLARE;






