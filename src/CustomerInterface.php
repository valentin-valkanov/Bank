<?php

namespace ValentinValkanov\Bank;

interface CustomerInterface
{
    public function name(): string;

    public function email(): string;

    public function phone(): string;

    public function getAccount($id): AccountInterface;

    public function getAccounts(): array;
}