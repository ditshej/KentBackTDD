<?php

namespace App\xUnit;

class WasRun extends TestCase {
	public bool $wasRun = false;
	public string $log = '';

	public function testMethod() : void {
		$this->wasRun = true;
		$this->log .= ' testMethod';
	}

	public function setUp() : void {
		$this->log = 'setUp';
	}

}
