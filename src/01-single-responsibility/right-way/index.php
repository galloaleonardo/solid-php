<?php

use SingleResponsibility\RightWay\Report;
use SingleResponsibility\RightWay\JsonReportFormatter;

require './../../../vendor/autoload.php';

$report = new Report();
$reportFormatter = new JsonReportFormatter();

$formated = $reportFormatter->format($report);

var_dump($formated);
