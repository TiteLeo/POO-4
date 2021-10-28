<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $storage = 0;
    private string $energy;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct($storageCapacity, $color, $nbSeats, $energy )
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }
    public function setStorage($storage): void
    {
        if ($storage >= $this->getStorageCapacity()) {
            $this->storage = $storage;
        }
    }
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setStorageCapacity($storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function isFull() : string
    {
        $isFull = "";
        if ($this->getStorage() < $this->getStorageCapacity()) {
            $isFull = 'in filling';
        } else {
            $isFull = 'full';
        }
        return $isFull;
    }
}