<?php

namespace App\MoneyExample;

class Pair {

	private string $from;
	private string $to;

	public function __construct(string $from, string $to) {
		$this->from = $from;
		$this->to = $to;
	}

	public function equals(Pair $object) : bool {
		return $this->from === $object->from && $this->to === $object->to;
	}

	public function hashCode() {
		return 0;
	}

}
