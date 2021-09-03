<?php

namespace App\Money;

use App\Money;
use JetBrains\PhpStorm\Pure;

class Dollar extends Money {

	public function __construct(int $amount) {
		$this->amount = $amount;
	}

	#[Pure]
	public function times(int $multiplier) : Money {
		return new Dollar($this->amount * $multiplier);
	}

}
