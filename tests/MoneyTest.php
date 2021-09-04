<?php

use App\Bank;
use App\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase {

	public function testMultiplication() : void {
		$five = Money::dollar(5);
		self::assertEquals(Money::dollar(10), $five->times(2));
		self::assertEquals(Money::dollar(15), $five->times(3));
	}

	public function testEquality() : void {
		self::assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
		self::assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
		self::assertFalse((Money::franc(5))->equals(Money::dollar(5)));
	}

	public function testCurrency() : void {
		self::assertEquals('USD', Money::dollar(1)->currency());
		self::assertEquals('CHF', Money::franc(1)->currency());
	}

	public function testSimpleAddition() : void {
		$five = Money::dollar(5);
		$sum = $five->plus($five);
		$bank = new Bank();
		$reduced = $bank->reduce($sum, 'USD');
		self::assertEquals(Money::dollar(10), $reduced);
	}
}
