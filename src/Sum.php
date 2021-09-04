<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Sum implements Expression {

	public function __construct(
			public Expression $augend,
			public Expression $addend
	) {
	}

	public function reduce(Bank $bank, string $to) : Money {
		$amount = $this->augend->reduce($bank, $to)->amount + $this->addend->reduce($bank, $to)->amount;
		return new Money($amount, $to);
	}

	#[Pure]
	public function plus(Expression $addend) : Expression {
		return new Sum($this, $addend);
	}
}
