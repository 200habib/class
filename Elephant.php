<?php
require_once __DIR__ . '/mammal.php';

abstract class Elephant extends Mammal {
    private float $tuskLength;

    public function __construct(string $name, int $age, string $furColor, float $tuskLength) {
        parent::__construct($name, $age, $furColor);
        $this->tuskLength = $tuskLength;
    }



    public function getTuskLength(): float {
        return $this->tuskLength;
    }

    public function setTuskLength(float $tuskLength): string {
        $this->tuskLength = $tuskLength;
    }
}