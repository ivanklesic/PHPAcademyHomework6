<?php

require_once 'Task1/Monitor.php';
require_once 'Task2/Customer.php';

use Task1\Monitor;
use Task2\Customer;

//Task1 test

$monitor1 = new Monitor('1920x1080', 60);
$monitor2 = new Monitor();

$monitor2->resolution = '2560x1440';
$monitor2->refreshRateHZ = 144;

$monitor2->randomProperty = 1;

echo $monitor2->randomProperty;
echo '<br>';
var_dump($monitor1);
echo '<br>';
var_dump($monitor2);
echo '<br>';


//Task2 test

$customer = new Customer();
$customer->setFirstName("D'Brickashaw")->setLastName('Ferguson')->setRandomProperty(5);

var_dump($customer);
echo '<br>';

echo $customer->getRandomProperty() . '<br>';
echo $customer->hasLastName() . '<br>';

$customer->unsRandomProperty();

//$customer->randomMethodName();
var_dump($customer);
echo '<br>';