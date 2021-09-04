<?php

use App\Bank;
use App\Money;
use App\Sum;
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

	public function testPlusReturnsSum() : void {
		$five = Money::dollar(5);
		$sum = $five->plus($five);
		self::assertEquals($five, $sum->augend);
		self::assertEquals($five, $sum->addend);
	}

	public function testReduceSum() : void {
		$sum = new Sum(Money::dollar(3), Money::dollar(4));
		$bank = new Bank();
		$result = $bank->reduce($sum, 'USD');
		self::assertEquals(Money::dollar(7), $result);
	}

	public function testReduceMoney() : void {
		$bank = new Bank();
		$result = $bank->reduce(Money::dollar(1), 'USD');
		self::assertEquals(Money::dollar(1), $result);
	}

	public function testReduceMoneyDifferentCurrency() : void {
		$bank = new Bank();
		$bank->addRate('CHF', 'USD', 2);
		$result = $bank->reduce(Money::franc(2), 'USD');
		self::assertEquals(Money::dollar(1), $result);
	}
}
