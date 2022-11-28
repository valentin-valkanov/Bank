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
$vasil->addAccount(new Bank\Account(101)); // 3 account
$vasil->addAccount(new Bank\Account(102)); // 3 account

// 2 customer
$valentin = new Bank\Customer(2, 'Valentin Valkanov', 'valenitnvalkanof@gmail.com', '0888395505');
$valentin->addAccount(new Bank\Account(103)); // 3 account

$bank->addCustomer($vasil);
$bank->addCustomer($valentin);

//var_dump(count($customer->getAccounts()));
//var_dump($customer->getAccount(1));
// var_dump($bank->customer(2));

var_dump( ($bank->customer(2))->getAccount(103) );

