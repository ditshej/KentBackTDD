<?php

namespace App\xUnit;

class WasRun extends TestCase {
	public bool $wasRun = false;
	public bool $wasSetUp = false;

	public function testMethod() : void {
		$this->wasRun = true;
	}

	public function setUp() : void {
		$this->wasSetUp = true;
	}

}
