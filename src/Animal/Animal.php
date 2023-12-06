<?php

namespace App\Animal;

use App\Owner\Owner;

class Animal {
    private string $name;
    private Owner $owner;
    private array $animals;
    public function __construct($name, Owner $owner, array $animals) {
        $this->name = $name;
        $this->animals = $animals;
        $this->owner = $owner;
    }



    /**
     * Get the value of name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of animals
     */ 
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Set the value of animals
     *
     * @return  self
     */ 
    public function setAnimals($animals)
    {
        $this->animals = $animals;

        return $this;
    }
}