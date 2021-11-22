<?php

namespace App\xUnit;

class TestCase {
	public function __construct(public string $name) {
	}

	public function setUp() : void {
	}

	public function run() : void {
		$this->setUp();
		$this->{$this->name}();
	}
}
