<?php

namespace ValentinValkanov\Bank;

interface AccountInterface
{
    public function customer():CustomerInterface;

    public function deposit(int $amount);

    public function withdraw(int $amount);

    public function isCredit():bool;

    public function balance():float;
}