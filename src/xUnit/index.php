<?php

namespace App\xUnit;

require_once 'WasRun.php';

$test = new WasRun("testMethod");
var_export($test->wasRun);
$test->testMethod();
var_export($test->wasRun);
