<?php

namespace App\xUnit;

class WasRun extends TestCase {
	public bool $wasRun = false;

	public function testMethod() : void {
		$this->wasRun = true;
	}


}
