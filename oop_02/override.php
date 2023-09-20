<?php

class Guerriero{

    public function attacca(){
        echo "Il guerriero sta attaccando";
    }

}

class Paladino extends Guerriero{
    public function attacca(){
        echo "Il paladino sta attaccando con l'acqua santa";
    }
}

class Arciere extends Guerriero{

}

class PaladinoScalzo extends Paladino{

    public function __construct()
    {
        echo Guerriero::attacca();
    }

    public function attacca(){
        echo "Il paladino scalzo sta attaccando con le scarpe";
    }
}


$paladino = new PaladinoScalzo;

$paladino->attacca();

