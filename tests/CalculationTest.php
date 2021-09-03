<?php

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

	public function testEquality() : void {
		self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
		self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
	}
}
