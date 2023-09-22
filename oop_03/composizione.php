<?php 

// composizione è un paradigma di programmazione basato su dependency injection e object composition

class Computer{

    public $motherboard;
    public $graphicsCard;
    public $processor;

    public function __construct(Motherboard $motherboard, GCARD $graphicsCard,Processor $processor)
    {
        $this->motherboard = $motherboard;
        $this->graphicsCard = $graphicsCard;
        $this->processor = $processor;
    }

    public function start(){
        $this->motherboard->avvio();
        $this->graphicsCard->render();
        $this->processor->processa();
    }

}


class Motherboard{
    public $name;
    public $serial;
    public function __construct($name,$serial)
    {
        $this->name = $name;
        $this->serial = $serial;
    }
    public function avvio(){
        echo "Sto partendo con scheda madre $this->name : $this->serial \n";
    }
}

class Processor{
    public $name;
    public $serial;
    public function __construct($name,$serial)
    {
        $this->name = $name;
        $this->serial = $serial;
    }
    public function processa(){
        echo "Sto processando con processore $this->name : $this->serial \n";
    }
}

class GCARD{
    public $name;
    public $serial;
    public function __construct($name,$serial)
    {
        $this->name = $name;
        $this->serial = $serial;
    }
    public function render(){
        echo "Sto renderizzando con scheda video $this->name : $this->serial \n";
    }
}

$processore1= new Processor('Intel i11','9034hj03s');
$processore2= new Processor('Intel i20923','8021j03s');

$mb= new Motherboard('ASUS Prime-Z','0sa5hr90390');
$mb2= new Motherboard('ASUS Prime-Z-Pro','dpoa8923dsa');

$gc1= new GCARD('NVIDIA GTX 1070','03n4209f');
$gc2= new GCARD('NVIDIA GTX 4090','023d209f');

$computer = new Computer($mb2,$gc1,$processore1);

$computer->start();