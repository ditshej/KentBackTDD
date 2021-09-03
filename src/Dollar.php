<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Dollar {

	private int $amount;

	public function __construct(int $amount) {
		$this->amount = $amount;
	}

	#[Pure]
	public function times(int $multiplier) : self {
		return new Dollar($this->amount * $multiplier);
	}

	public function equals(Dollar $dollar) : bool {
		return $this->amount === $dollar->amount;
	}

}
