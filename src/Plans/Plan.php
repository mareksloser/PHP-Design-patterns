<?php declare(strict_types=1);

namespace App\Plans;

abstract class Plan
{
	protected array $features = [];

	abstract public function getRate(): int;

	public function getFeatures(): array
	{
		return $this->features;
	}
}