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