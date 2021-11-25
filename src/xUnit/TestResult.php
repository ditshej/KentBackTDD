<?php

namespace App\xUnit;

class TestResult {

	private int $runCount = 0;
	private int $errorCount = 0;

	public function testStarted() : void {
		++$this->runCount;
	}

	public function testFailed() : void {
		++$this->errorCount;
	}

	public function summary() : string {
		return sprintf('%d run, %d failed', $this->runCount, $this->errorCount);
	}

}
