<?php
// front controller
use ValentinValkanov\Bank;

chdir(dirname(__DIR__));
include __DIR__ . '/../vendor/autoload.php';

/**
 * Motivation
 *
 * (1) OOP - Inheritance, Polymorphism, Encapsulation
 * (2) SOLID - SrP, OcP, LsP, IsP, DiP
 * (3) DRY, KISS
 */


// 1 bank
$bank = new Bank\Bank('HSBC');

// 2 customer
$vasil = new Bank\Customer(1, 'Vasil Dakov', 'vasildakov@gmail.com', '0888323020');

$uuid = Bank\Uuid::v4();
$vasil->addAccount(new Bank\Account($uuid)); // 3 account
// $vasil->addAccount(new Bank\Account(102)); // 3 account

// 2 customer
//$valentin = new Bank\Customer(2, 'Valentin Valkanov', 'valenitnvalkanof@gmail.com', '0888395505');
//$valentin->addAccount(new Bank\Account(103)); // 3 account

$bank->addCustomer($vasil);

//$bank->addCustomer($valentin);

$customer = $bank->customer(1);
$account  =  $customer->getAccount($uuid);
$account->deposit(100);
$account->withdraw(-20);
$account->withdraw(-10);
$account->withdraw(-100);

var_dump($account->balance());
