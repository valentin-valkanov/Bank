<?php

namespace ValentinValkanov\Bank;

interface CustomerInterface
{
    public function getName(): string;

    public function getAccount($id): AccountInterface;

    public function getAccounts(): array;
}