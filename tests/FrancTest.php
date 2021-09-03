<?php

use App\Franc;
use PHPUnit\Framework\TestCase;

class FrancTest extends TestCase {

	public function testMultiplication() : void {
		$five = new Franc(5);
		self::assertEquals(new Franc(10), $five->times(2));
		self::assertEquals(new Franc(15), $five->times(3));
	}

}
