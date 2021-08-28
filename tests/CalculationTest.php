<?php

namespace Tests;

use App\Dollar;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase {

	public function testMultiplication() : void {
		$five = new Dollar(5);
		$five->times(2);
		self::assertEquals(10, $five->amount);
	}

}
