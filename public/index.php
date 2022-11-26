<?php

use ValentinValkanov\Bank\Deposit;

chdir(dirname(__DIR__));
include __DIR__ . '/../vendor/autoload.php';

//$deposit = new Deposit(1, 100);
//var_dump($deposit->amount());

$atm = new Atm();
$pos = new Pos();

$amount = $atm->withdraw($card, $pin);

$payment = $pos->payment($card, $pin);