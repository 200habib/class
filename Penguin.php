
<?php
require_once __DIR__ . '/Bird.php';

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