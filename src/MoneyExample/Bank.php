<?php

namespace App\MoneyExample;

class Bank {

	private array $rates = [];

	public function reduce(Expression $source, string $to) : Money {
		return $source->reduce($this, $to);
	}

	public function rate(string $from, string $to) : int {
		if ($from === $to) {
			return 1;
		}
		return (int) array_search(new Pair($from, $to), $this->rates, false);
	}

	public function addRate(string $from, string $to, int $rate) {
		$this->rates[ $rate ] = new Pair($from, $to);
	}

}
