<?php

namespace App\MoneyExample;

interface Expression {

	public function reduce(Bank $bank, string $to) : Expression;

	public function plus(Expression $addend) : Expression;

	public function times(int $multiplier) : Expression;

}
