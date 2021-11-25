<?php

namespace App\xUnit;

class TestCase {
	public function __construct(public string $name) {
	}

	public function setUp() : void {
	}

	public function run() : TestResult {
		// $results->testStarted();
		$this->setUp();
		$this->{$this->name}();
		$this->tearDown();
		return new TestResult();
	}

	public function tearDown() : void {
	}
}
