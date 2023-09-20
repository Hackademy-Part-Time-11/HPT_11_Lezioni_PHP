<?php

// i tratti sono porzioni di codice aggiuntive che io posso passare a una classe


trait Supplente{

    public function supplenza(){
        echo "Fai supplenza";
    }

}

class Docente{

    public $materia ;

    public function supplenza(){
        echo "Suppl\n";
    }

    public function __countruct($materia)
    {
        $this->materia = $materia;
    }
}

class DocenteMedie extends Docente{

}


class DocenteElementari extends Docente{
    // per aggiungere un tratto a una classe utilizzo
    use Supplente;
    //    public function supplenza()
    // {
    //     echo "prova";
    // }
    
}

class Assistente{
    use Supplente;

  
}
class DocenteSuperiori extends DocenteElementari{

}


$docente= new DocenteSuperiori();
$docente->supplenza();