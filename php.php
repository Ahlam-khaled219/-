<?php


class Car
{
    public $Volvo;
    public $Audi;
    public $Toyata;

    /*Function __construct()
    {
        $this->Volvo=$Volvo;
       $this->Audi=$Audi;
        $this->Toyata=$Toyata;

    }
    */function __construct($Volvo, $Audi,$Toyata)
{
    $this->Volvo=$Volvo;
    $this->Audi=$Audi;
    $this->Toyata=$Toyata;
}

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo  "<br> ". "From Destructor        ".$this->Volvo;
    }


    // Methods
    function set_Volvo($Volvo){
        $this->Volvo=$Volvo;
    }

    function get_Volvo() {
        return $this->Volvo;
    }

    function set_Audi($Audi) {
        $this->Audi = $Audi;
    }

    function get_Audi() {
        return $this->Audi;
    }

    function set_Toyata($Toyata){
        $this->Toyata=$Toyata;
    }

    function get_Toyata() {
        return $this->Toyata;
    }


}