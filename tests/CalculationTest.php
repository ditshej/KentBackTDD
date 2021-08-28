<?php

namespace Tests;

use App\Dollar;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase {

	public function testMultiplication() : void {
		$five = new Dollar(5);
		$product = $five->times(2);
		self::assertEquals(10, $product->amount);
		$product = $five->times(3);
		self::assertEquals(15, $product->amount);
	}

}
