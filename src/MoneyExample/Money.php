<?php

namespace App\MoneyExample;

use JetBrains\PhpStorm\Pure;

class Money implements Expression {

	public function __construct(
			public int $amount,
			protected string $currency
	) {
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
	public function times(int $multiplier) : Expression {
		return new Money($this->amount * $multiplier, $this->currency);
	}

	#[Pure]
	public function plus(Expression $addend) : Expression {
		return new Sum($this, $addend);
	}

	public function reduce(Bank $bank, string $to) : Money {
		$rate = $bank->rate($this->currency, $to);
		return new Money($this->amount / $rate, $to);
	}

}
