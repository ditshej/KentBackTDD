<?php

namespace xUnit;

use App\xUnit\TestResult;
use App\xUnit\TestSuite;
use App\xUnit\WasRun;
use PHPUnit\Framework\TestCase;

class TestCaseTest extends TestCase {

	protected TestResult $result;

	protected function setUp() : void {
		$this->result = new TestResult();
	}

	public function testTemplateMethod() : void {
		$test = new WasRun('testMethod');
		$test->run($this->result);
		self::assertSame('setUp testMethod tearDown', $test->log);
	}

	public function testResult() : void {
		$test = new WasRun('testMethod');
		$test->run($this->result);
		self::assertSame('1 run, 0 failed', $this->result->summary());
	}

	public function testFailedResult() : void {
		$test = new WasRun('testBrokenMethod');
		$test->run($this->result);
		self::assertSame('1 run, 1 failed', $this->result->summary());
	}

	public function testFailedResultFormatting() : void {
		$this->result->testStarted();
		$this->result->testFailed();
		self::assertSame('1 run, 1 failed', $this->result->summary());
	}

	public function testSuite() : void {
		$suite = new TestSuite();
		$suite->add(new WasRun('testMethod'));
		$suite->add(new WasRun('testBrokenMethod'));
		$suite->run($this->result);
		self::assertSame('2 run, 1 failed', $this->result->summary());
	}
}
