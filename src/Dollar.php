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

	public function times(int $multiplier) : void {
		$this->amount *= $multiplier;
	}

}
