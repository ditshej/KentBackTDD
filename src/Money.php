<?php

namespace App;

use App\Money\Dollar;
use App\Money\Franc;
use JetBrains\PhpStorm\Pure;

class Money {

	protected string $currency;
	protected int $amount;

	public function __construct(int $amount, string $currency) {
		$this->amount = $amount;
		$this->currency = $currency;
	}

	#[Pure]
	public static function dollar(int $amount) : Money {
		return new Money($amount, 'USD');
	}

	#[Pure]
	public static function franc(int $amount) : Money {
		return new Money($amount, 'CHF');
	}

	public function currency() : string {
		return $this->currency;
	}

	#[Pure]
	public function equals(Money $money) : bool {
		return $this->amount === $money->amount
				&& $this->currency() === $money->currency();
	}

	#[Pure]
	public function times(int $multiplier) : Money {
		return new Money($this->amount * $multiplier, $this->currency);
	}

}
