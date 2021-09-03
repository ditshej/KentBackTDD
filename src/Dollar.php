<?php
/**
 * Description.
 */

namespace App;

class Dollar {

	public int $amount = 0;

	public function __construct(int $amount) {
		$this->amount = $amount;
	}

	public function times(int $multiplier) : self {
		return new Dollar($this->amount * $multiplier);
	}

	public function equals(Dollar $dollar) {
		return $this->amount === $dollar->amount;
	}

}
