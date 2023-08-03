<?php declare(strict_types=1);

namespace tests;

use App\FlightReservation\Concrete\ExtraLegroom;
use App\FlightReservation\Concrete\HoldLuggage;
use App\FlightReservation\StandardFlightReservation;
use PHPUnit\Framework\TestCase;

class FlightReservationTest extends TestCase
{
	public function testFlight_reservation_can_be_decorated(): void
	{
		// SETUP
		$reservation = new StandardFlightReservation();
		$reservation = new ExtraLegroom($reservation);
		$reservation = new HoldLuggage($reservation);

		// DO SOMETHING
		$totalCost = $reservation->calculatePrice();

		// MAKE ASSERTIONS
		$this->assertEquals(400, $totalCost); // 300 + 40 + 60
	}
}