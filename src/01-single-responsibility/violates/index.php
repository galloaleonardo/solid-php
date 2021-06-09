<?php

use SingleResponsibility\Violates\Report;

require './../../../vendor/autoload.php';

$report = new Report();
$formated = $report->formatJson();

var_dump($formated);
