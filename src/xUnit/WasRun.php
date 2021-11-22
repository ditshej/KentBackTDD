<?php

namespace App\xUnit;

class WasRun {
	public bool $wasRun = false;

	public function __construct($name) {
	}

	public function testMethod() {
		$this->wasRun = true;
	}
}
