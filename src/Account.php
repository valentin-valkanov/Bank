<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

use function PHPUnit\Framework\isEmpty;

/**
 * Class Account
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Account implements AccountInterface, EntityInterface
{
    private string $id;

    private int $overdraft = 0;

    private array $transactions = [];

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function customer(): CustomerInterface
    {
        // TODO: Implement customer() method.
    }

    // this is a getter without get keyword
    public function transactions(): array
    {
        return $this->transactions;
    }


    public function hasTransactions(): bool
    {
        return !(count($this->transactions()) === 0);
    }

    public function deposit(int $amount): void
    {
        $this->addTransaction(new Deposit($this, $amount));
    }

    public function withdraw(int $amount): void
    {
        $balance = $this->balance();

        if (abs($amount) > $balance) {
            throw new \RuntimeException('Insufficient funds!');
        }

        $this->addTransaction(new Withdraw($this, $amount));
    }

    private function addTransaction(TransactionInterface $transaction): void
    {
        $this->transactions[] = $transaction;
    }

    public function isCredit(): bool
    {
        return $this->overdraft > 0;
    }

    public function balance(): int
    {
        $balance = (true === $this->isCredit()) ? $this->overdraft : 0;

        foreach ($this->transactions() as $transaction) {
            $balance += $transaction->amount();
        }

        return $balance;
    }

    public function getId(): string
    {
        return $this->id;
    }
}