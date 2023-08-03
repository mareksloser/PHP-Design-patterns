<?php declare(strict_types=1);

namespace App\FlightReservation\Concrete;

use App\FlightReservation\FlightReservationDecorator;

class HoldLuggage extends FlightReservationDecorator
{
	public const Price = 60;

	public function calculatePrice():int
	{
		return $this->flightReservation->calculatePrice() + self::Price;
	}
}