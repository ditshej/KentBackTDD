<?php

namespace App\xUnit;

class TestSuite {

	/** @var \App\xUnit\WasRun[] */
	public array $tests = [];

	public function add(WasRun $test) : void {
		$this->tests[] = $test;
	}

	public function run(TestResult $result) : void {
		foreach ($this->tests as $test) {
			$test->run($result);
		}
	}

}
