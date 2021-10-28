<?php

final class PedestrianWay
{
    protected array $currentVehicles;
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle($vehicle): void
    {
        if($vehicle instanceof bike || $vehicle instanceof skate)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}