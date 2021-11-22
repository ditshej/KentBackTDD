<?php

namespace App\xUnit;

class TestCase {
	public function __construct(public string $name) {
	}

	public function run() : void {
		$this->{$this->name}();
	}
}
