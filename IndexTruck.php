<?php
require_once 'Truck.php';

$truck = new Truck(80, 'red', 5, 'fuel');
echo $truck->isFull();


