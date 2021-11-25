<?php

namespace App\xUnit;

class TestCase {
	public function __construct(public string $name) {
	}

	public function setUp() : void {
	}

	public function run() : TestResult {
		$result = new TestResult();
		$result->testStarted();
		$this->setUp();
		$this->{$this->name}();
		$this->tearDown();
		return $result;
	}

	public function tearDown() : void {
	}
}
