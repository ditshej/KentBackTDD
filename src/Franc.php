<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Franc {

	private int $amount;

	public function __construct(int $amount) {
		$this->amount = $amount;
	}

	#[Pure]
	public function times(int $multiplier) : self {
		return new Franc($this->amount * $multiplier);
	}

	public function equals(Franc $dollar) : bool {
		return $this->amount === $dollar->amount;
	}

}
