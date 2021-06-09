<?php

namespace SingleResponsibility\RightWay;

class Report
{
    public function getTitle()
    {
        return 'This is a title.';
    }

    public function getDate()
    {
        return date('Y-m-d');
    }

    public function getContentes()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate()
        ];
    }
}
