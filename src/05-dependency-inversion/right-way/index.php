<?php

use DependencyInversion\RightWay\Email;
use DependencyInversion\RightWay\Notification;

require './../../../vendor/autoload.php';

$email = new Email();
$notification = new Notification($email);

var_dump($notification->send('Hello world. =)'));
