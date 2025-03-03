<?php

// METTRE EN PLACE UNE STATION SERVICE

// QUI A UNE CAPACITÉ
// ET QUI PERMET DE FAIRE LE PLEIN DANS LES VÉHICULES
// ET QUI FAIT ÉVOLUER SA CAPACITÉ EN FONCTION DES VÉHICULES SERVIS

// METTRE EN PLACE DES VÉHICULES
// QUI ONT UN RÉSERVOIR
// AVEC UNE CAPACITÉ MAX
// ET QUI VIENNENT FAIRE LE PLEIN DANS LA STATION SERVICE


// LA STATION SERVICE AURA 800 LITRES

// CRÉER 3 VÉHICULES

// voiture 1 : capacité de 70L, dispose actuellement de 35L
// voiture 2 : capacité de 50L, dispose actuellement de 25L
// voiture 1 : capacité de 40L, dispose actuellement de 20L



 class Vehicule {
    public $first_name;
    public $capacityMax;
    public $capacityactual;

    public function __construct($first_name, $capacityMax, $capacityactual) {
       $this->first_name = $first_name;
       $this->capacityMax = $capacityMax;
       $this->capacityactual = $capacityactual;
    }

    public function getFirst_name(){
        return $this->first_name;
    }

    public function getCapacityMax(){
        return $this->capacityMax;
    }

    public function getCapacityactual(){
        return $this->capacityactual;
    }

    public function setFirst_name($first_name){
        $this->first_name = $first_name;
    }

    public function setCapacityMax($capacityMax){
        $this->capacityMax = $capacityMax;
    }

    public function setCapacityactual($capacityactual){
        $this->capacityactual = $capacityactual;
    }

    public function fillUp($litres){
        $this->getCapacityactual() +- $litres;
    }

    public function __toString(){
        return "Le véhicule " . $this->getFirst_name() . " a une capacité de " . $this->getCapacityMax() . " litres et dispose actuellement de " . $this->getCapacityactual() . " litres.";
    }


 }

 class StationService {
    public $capacity;
    public $vehicules = [];

    public function __construct($capacity) {
       $this->capacity = $capacity;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function addVehicule(Vehicule $vehicule){
        $this->vehicules[] = $vehicule;
        $this->setCapacity($this->getCapacity() - $vehicule->getCapacityactual());
    }

    public function __toString(){
        return "La station service a une capacité de " . $this->getCapacity() . " litres.";
    }

 }

$stationService = new StationService(800);



$Mazda = new Vehicule("Mazda", 70, 35);
$Dacia = new Vehicule("Dacia", 50, 25);
$Opel = new Vehicule("Opel", 40, 20);

echo $stationService . "<br>";

$stationService->addVehicule($Mazda);
$stationService->addVehicule($Dacia);
$stationService->addVehicule($Opel);



echo $Mazda . "<br>";
echo $Dacia . "<br>";
echo $Opel . "<br>";

echo $stationService . "<p> après avoir remplie les voitures <p> ";


?>