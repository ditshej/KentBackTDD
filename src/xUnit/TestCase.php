<?php

namespace App\xUnit;

class TestCase {
	public function __construct(public string $name) {
	}

	public function setUp() : void {
	}

	public function run() : void {
		// $results->testStarted();
		$this->setUp();
		$this->{$this->name}();
		$this->tearDown();
	}

	public function tearDown() : void {
	}
}
