<?php

namespace xUnit;

use App\xUnit\WasRun;
use PHPUnit\Framework\TestCase;

class TestCaseTest extends TestCase {

	private WasRun $test;

	public function setUp() : void {
		$this->test = new WasRun("testMethod");
	}

	public function testSetUp() : void {
		$this->test->run();
		self::assertTrue($this->test->wasSetUp);
	}

	public function testRun() : void {
		$this->test->run();
		self::assertTrue($this->test->wasRun);
	}
}
