<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Transaction
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
abstract class Transaction implements TransactionInterface
{
    protected int $id;

    protected float $amount;

    public function __construct($id, $amount)
    {
        $this->id = $id;
        $this->amount = $amount;
    }
}