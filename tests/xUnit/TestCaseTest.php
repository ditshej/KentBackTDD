<?php

namespace xUnit;

use App\xUnit\TestResult;
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

	public function testFailedResult() : void {
		$test = new WasRun('testBrokenMethod');
		$result = $test->run();
		self::assertSame('1 run, 1 failed', $result->summary());
	}

	public function testFailedResultFormatting() : void {
		$result = new TestResult();
		$result->testStarted();
		$result->testFailed();
		self::assertSame('1 run, 1 failed', $result->summary());
	}
}
