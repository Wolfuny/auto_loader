<?php

namespace App\Owner;

class Owner {
    private string $name;
    private array $animals;
    public function __construct(string $name, array $animals) {
        $this->name = $name;
        $this->animals = $animals;
    }

    /**
     * Get the value of name
     */
    public function getname() {
        return $this->name;
    }
    public function addAnimals($animal) {
        if(is_a($animal, "Animal")) {
            if($animal->getName() == null) {
                if($this->containAnimals($animal)) {
                    $this->animals[] = $animal;
                    $animal->setOwner($this);
                }

            } else {
                throw new Exception("tu essayes de voler l'animal d'un autre");
            }
        }else{
            throw new Exception("Tu ne peux pas avoir 2 foix le meme animale");
        }

    }
    public function containAnimals($animalToCheck) {
        foreach($this->animals as $animal) {
            if($animalToCheck == $animal) {
                return false;
            }
        }
        return true;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setOwner($name) {
        $this->name = $name;

        return $this;
    }

    public function showAnimals() {
        if(count($this->animals) > 0) {
            echo "<ul>";
            foreach($this->animals as $animal) {
                echo "<li>".$animal->getAnimals()."Espèce : ".$animal->getSpecies."</li>";
            }
            echo "</ul>";
        } else {
            $name = $this->name;
            echo "<h2>$name n'a pas d'animaux de compagnie</h2>";
        }
    }
}