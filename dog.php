<?php
require_once __DIR__ . '/mammal.php';
abstract class Dog extends Mammal {
    private string $breed;

    public function __construct(string $name, int $age, string $furColor, string $breed) {
        parent::__construct($name, $age, $furColor);
        $this->breed = $breed;
    }

    public function getBreed(): string {
        return $this->breed;
    }

    public function setBreed(string $breed){
        $this->breed = $breed;
    }
}