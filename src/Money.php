<?php

namespace App;

use App\Money\Dollar;
use App\Money\Franc;
use JetBrains\PhpStorm\Pure;

abstract class Money {

	protected string $currency;
	protected int $amount;

	public function __construct(int $amount, string $currency) {
		$this->amount = $amount;
		$this->currency = $currency;
	}

	#[Pure]
	public static function dollar(int $amount) : Money {
		return new Dollar($amount, 'USD');
	}

	#[Pure]
	public static function franc(int $amount) : Money {
		return new Franc($amount, 'CHF');
	}

	public function currency() : string {
		return $this->currency;
	}

	public function equals(Money $money) : bool {
		return $this->amount === $money->amount
				&& get_class($this) === get_class($money);
	}

	abstract public function times(int $multiplier) : Money;

}
