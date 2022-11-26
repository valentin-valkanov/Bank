<?php

namespace ValentinValkanov\Bank;

interface AccountInterface
{
    public function getId();

    public function customer():CustomerInterface;

    public function deposit(float $amount);

    public function withdraw(float $amount);

    public function isCredit():bool;

    public function balance():float;
}