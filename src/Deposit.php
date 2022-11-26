<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Deposit
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Deposit extends Transaction
{
    public function amount(): int
    {
        return $this->amount;
    }

    protected function setAmount(int $amount): self
    {
        if ($amount > 0) {
            $this->amount = $amount;
            return $this;
        }
        throw new \InvalidArgumentException("Invalid amount");
    }
}