<?php declare(strict_types=1);

namespace App\FlightReservation;

class StandardFlightReservation implements FlightReservation
{

	public function calculatePrice(): int
	{
		return 300;
	}
}