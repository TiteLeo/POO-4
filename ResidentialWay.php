<?php

final class ResidentialWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle($vehicle): void
    {
        if($vehicle instanceof car)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}