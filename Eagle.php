<?php
require_once __DIR__ . '/Bird.php';

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