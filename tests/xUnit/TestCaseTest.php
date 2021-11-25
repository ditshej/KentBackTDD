<?php

namespace xUnit;

use App\xUnit\WasRun;
use PHPUnit\Framework\TestCase;

class TestCaseTest extends TestCase {

	public function testTemplateMethod() : void {
		$test = new WasRun("testMethod");
		$test->run();
		self::assertSame('setUp testMethod', $test->log);
	}
}
