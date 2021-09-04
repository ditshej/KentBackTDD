<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Sum implements Expression {

	public function __construct(
			public Money $augend,
			public Money $addend
	) {
	}

	#[Pure]
	public function reduce(Bank $bank, string $to) : Money {
		$amount = $this->augend->amount + $this->addend->amount;
		return new Money($amount, $to);
	}

}
