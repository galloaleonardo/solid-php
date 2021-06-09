<?php

use DependencyInversion\Violates\Notification;

require './../../../vendor/autoload.php';

$notification = new Notification();

var_dump($notification->send('Hello world. =)'));
