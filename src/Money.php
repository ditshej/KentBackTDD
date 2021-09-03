<?php

namespace App;

use App\Money\Dollar;
use App\Money\Franc;
use JetBrains\PhpStorm\Pure;

abstract class Money {

	protected int $amount;

	#[Pure]
	public static function dollar(int $amount) : Money {
		return new Dollar($amount);
	}

	#[Pure]
	public static function franc(int $amount) : Money {
		return new Franc($amount);
	}

	public function equals(Money $money) : bool {
		return $this->amount === $money->amount
				&& get_class($this) === get_class($money);
	}

	abstract public function times(int $multiplier) : Money;

}
