<?php

use OpenClosed\RightWay\Csv;
use OpenClosed\RightWay\Logger;
use OpenClosed\RightWay\Txt;

require './../../../vendor/autoload.php';

$text = new Txt();
$loggerText = new Logger($text);

$csv = new Csv();
$loggerCsv = new Logger($csv);

var_dump($loggerText->write(date('Y-m-d')));
var_dump($loggerCsv->write(date('Y-m-d')));
