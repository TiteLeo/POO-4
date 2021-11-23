<?php
require_once 'Vehicle.php';

class car extends Vehicle
{
    private bool $hasParkBrake = true;

 public function start()
	{
		if ($this->hasParkBrake) {
			throw new Exception('Your ParkBrake Dude!!');
		}
		echo 'Go baby!!!';
	}

	public function setParkBrake()
	{
		$this->hasParkBrake = !$this->hasParkBrake;
	}

	public function getParkBrake(): bool
	{
		return $this->hasParkBrake;
	}
}
