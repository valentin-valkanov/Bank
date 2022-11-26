<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Withdraw
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Withdraw extends Transaction
{

    protected function setAmount(int $amount): Transaction
    {
        if ($amount < 0) {
            $this->amount = $amount;
            return $this;
        }
        throw new \InvalidArgumentException('Invalid amount');
    }

    public function amount(): int
    {
        // TODO: Implement amount() method.
    }
}