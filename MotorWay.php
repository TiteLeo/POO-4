<?php
require_once 'HighWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

final class MotorWay
{
    protected array $currentVehicles;
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle($vehicle): void
    {
        if($vehicle instanceof vehicle)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}