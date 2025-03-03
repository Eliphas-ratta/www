<?php

class Human {

    private $first_name;
    private $last_name;
    private $sexe;
    private $adress;
    
    public function __construct($first_name_arg, $last_name_arg, $sexe_arg, $adress_arg) { 
  
 
        $this->setFirst_name($first_name_arg);
        $this->setLast_name($last_name_arg);
        $this->setSexe($sexe_arg);
        $this->setAdress($adress_arg);
    } 

    
    public function setFirst_name($value) {
        $this->first_name = $value;
    }

    public function setLast_name($value) {
        $this->last_name = $value;
    }

    public function setSexe($value) {
        $this->sexe = $value;
    }

    public function setAdress($value) {
        $this->adress = $value;
    }

    public function whatSexe($sexe) {

        if ($sexe == "femme") {
            echo "je suis une femme";
        } else {
            echo "je suis un homme";
        }
    }



    
}

$human = new Human("Fabrice", );
    echo $human->getFirst_name();
    $human->setFirst_name("Samih");




?>