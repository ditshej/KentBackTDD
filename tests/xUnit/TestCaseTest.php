<?php

namespace xUnit;

use App\xUnit\WasRun;
use PHPUnit\Framework\TestCase;

class TestCaseTest extends TestCase {
	public function testRun() : void {
		$test = new WasRun("testMethod");
		self::assertFalse($test->wasRun);
		$test->run();
		self::assertTrue($test->wasRun);
	}
}
