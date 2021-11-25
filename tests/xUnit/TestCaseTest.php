<?php

namespace xUnit;

use App\xUnit\WasRun;
use PHPUnit\Framework\TestCase;

class TestCaseTest extends TestCase {

	public function testTemplateMethod() : void {
		$test = new WasRun('testMethod');
		$test->run();
		self::assertSame('setUp testMethod tearDown', $test->log);
	}

	public function testResult() : void {
		$test = new WasRun('testMethod');
		$result = $test->run();
		self::assertSame('1 run, 0 failed', $result->summary());
	}
}
