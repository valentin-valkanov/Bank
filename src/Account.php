<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Account
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Account implements AccountInterface, EntityInterface
{
    private int $overdraft = 0;

    private array $transactions = [];


    public function customer(): CustomerInterface
    {
        // TODO: Implement customer() method.
    }

    public function transactions(): array
    {
        return $this->transactions;
    }

    public function deposit(int $amount): void
    {
        $this->addTransaction(new Deposit(1, $amount));
    }

    public function withdraw(int $amount): void
    {
       $this->addTransaction(new Withdraw(2, $amount));
    }

    private function addTransaction(TransactionInterface $transaction): void
    {
        $this->transactions[] = $transaction;
    }

    public function isCredit(): bool
    {
        return $this->overdraft > 0;
    }

    public function balance(): float
    {
        // TODO: Implement balance() method.
    }

    public function getId(): int
    {
        // TODO: Implement getId() method.
    }
}