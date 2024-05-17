<?php
abstract  class Animal {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    protected function getName(): string {
        return $this->name;
    }

    protected function getAge(): int {
        return $this->age;
    }
    abstract public  function makeSound():string;
    abstract public  function move():string;
}

abstract  class Mammal extends Animal {
    protected  string $furColor;

    public function __construct(string $name, int $age, string $furColor) {
        parent::__construct($name, $age);
        $this->furColor = $furColor;
    }

    public function getFurColor(): string {
        return $this->furColor;
    }

    public function setFurColor(string $furColor){
        $this->furColor = $furColor;
    }
}

abstract class Bird extends Animal {
    private float $wingSpan;

    public function __construct(string $name, int $age, float $wingSpan) {
        parent::__construct($name, $age);
        $this->wingSpan = $wingSpan;
    }

    public function getWingSpan(): float {
        return $this->wingSpan;
    }

    public function setWingSpan(float $wingSpan){
        $this->wingSpan = $wingSpan;
    }
}

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

abstract class Eagle extends Bird {
    private float $flightSpeed;

    public function __construct(string $name, int $age, float $wingSpan, float $flightSpeed) {
        parent::__construct($name, $age, $wingSpan);
        $this->flightSpeed = $flightSpeed;
    }

 
    public function getFlightSpeed(): float {
        return $this->flightSpeed;
    }

    public function setFlightSpeed(float $flightSpeed): string {
        $this->flightSpeed = $flightSpeed;
    }
}

abstract class Penguin extends Bird {
    private float $swimSpeed;

    public function __construct(string $name, int $age, float $wingSpan, float $swimSpeed) {
        parent::__construct($name, $age, $wingSpan);
        $this->swimSpeed = $swimSpeed;
    }


    public function getSwimSpeed(): float {
        return $this->swimSpeed;
    }

    public function setSwimSpeed(float $swimSpeed){
        $this->swimSpeed = $swimSpeed;
    }
}
?>
