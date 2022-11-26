<?php

namespace ValentinValkanov\Bank;

interface TransactionInterface
{
    public function amount(): int;

    public function created(): \DateTimeImmutable;
}