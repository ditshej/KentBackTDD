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
		if (method_exists($this, $this->name)) {
			$this->{$this->name}();
		} else {
			$result->testFailed();
		}
		$this->tearDown();
		return $result;
	}

	public function tearDown() : void {
	}
}
