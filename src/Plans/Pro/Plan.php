<?php declare(strict_types=1);

namespace App\Plans\Pro;

use App\Plans\Plan as MasterPlan;

class Plan extends MasterPlan
{
	private const Rate = 150;

	protected array $features = ['Unlimited emails', 'Unlimited contacts', '24-7 support'];

	public function getRate(): int
	{
		return self::Rate;
	}
}