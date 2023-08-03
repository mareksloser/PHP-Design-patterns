<?php declare(strict_types=1);

namespace App\FlightReservation\Concrete;

use App\FlightReservation\FlightReservationDecorator;


class ExtraLegroom extends FlightReservationDecorator
{
	private const Price = 40;

	public function calculatePrice(): int
	{
		return $this->flightReservation->calculatePrice() + self::Price;
	}
}