<?php

use OpenClosed\Violates\Logger;

require './../../../vendor/autoload.php';

$logger = new Logger();

var_dump($logger->writeText(date('Y-m-d')));
var_dump($logger->writeCsv(date('Y-m-d')));
