<?php

namespace App\xUnit;

class WasRun extends TestCase {
	public string $log = '';

	public function setUp() : void {
		$this->log = 'setUp';
	}

	public function testMethod() : void {
		$this->log .= ' testMethod';
	}

	public function tearDown() : void {
		$this->log .= ' tearDown';
	}
}
