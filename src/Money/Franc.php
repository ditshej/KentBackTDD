<?php

namespace App\Money;

use App\Money;
use JetBrains\PhpStorm\Pure;

class Franc extends Money {

	#[Pure]
	public function times(int $multiplier) : Money {
		return Money::franc($this->amount * $multiplier);
	}

}
