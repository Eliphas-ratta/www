<?php

    class Humain {

        public function __construct($firstName, $name, $age, $country) {
            $this->firstName = $firstName;
            $this->age = $age;
            $this->name = $name;
            $this->country = $ $country;

        }
        public $firstName;
        public $age;
        public $name;
        public $country;
        

        public function introduce() {
            echo "Hi, i am ".
    $this->firstName . "" .  $this->name;   }
    }

    $wajdi = new Humain("wajdi", "Rouafi", "22", "France");

    $wajdi->introduce();

?>