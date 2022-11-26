<?php

namespace ValentinValkanov\Bank;

interface TransactionInterface
{
    public function getId();

    public function amount():float;
}