<?php
require_once 'Vehicle.php';

class car extends Vehicle
{
    private bool $hasParkBrake = true;
}


    public function setParkBrake(bool $hasParkBrake)
{
    $this->hasParkBrake = $hasParkBrake;
}

    public function start(): string
{
    if($this->hasParkBrake = true){
        throw new Exception("You ride with the park brake!!!");
    }
    $this->currentSpeed = 10;
    return "Start!";
}