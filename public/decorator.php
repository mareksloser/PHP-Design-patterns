<?php declare(strict_types=1);

use App\FlightReservation\Concrete\ExtraLegroom;
use App\FlightReservation\Concrete\HoldLuggage;
use App\FlightReservation\StandardFlightReservation;


require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$reservation = new StandardFlightReservation();
$reservation = new ExtraLegroom($reservation);
$reservation = new HoldLuggage($reservation);

// DO SOMETHING
$totalCost = $reservation->calculatePrice();

// MAKE ASSERTIONS
var_dump($totalCost);