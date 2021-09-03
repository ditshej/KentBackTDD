<?php

namespace App\Money;

use App\Money;
use JetBrains\PhpStorm\Pure;

class Dollar extends Money {

	#[Pure]
	public function times(int $multiplier) : Money {
		return Money::dollar($this->amount * $multiplier);
	}

}
