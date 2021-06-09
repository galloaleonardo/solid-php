<?php

namespace SingleResponsibility\RightWay;

use SingleResponsibility\RightWay\Report;

class JsonReportFormatter
{
    public function format(Report $report)
    {
        return json_encode($report->getContentes());
    }
}
