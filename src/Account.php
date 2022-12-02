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
    /**
     * @var string
     */
    private string $id;

    /**
     * @var int
     */
    private int $overdraft = 0;

    /**
     * @var array
     */
    private array $transactions = [];

    /**
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return CustomerInterface
     */
    public function customer(): CustomerInterface
    {
        // TODO: Implement customer() method.
    }

    /**
     * @return array
     */
    // this is a getter without get keyword
    public function transactions(): array
    {
        return $this->transactions;
    }

    /**
     * @return bool
     */
    public function hasTransactions(): bool
    {
        return !(count($this->transactions()) === 0);
    }

    /**
     * @param int $amount
     * @return void
     */
    public function deposit(int $amount): void
    {
        $this->addTransaction(new Deposit($this, $amount));
    }

    /**
     * @param int $amount
     * @return void
     */
    public function withdraw(int $amount): void
    {
        $balance = $this->balance();

        if (abs($amount) > $balance) {
            throw new \RuntimeException('Insufficient funds!');
        }

        $this->addTransaction(new Withdraw($this, $amount));
    }

    /**
     * @param TransactionInterface $transaction
     * @return void
     */
    private function addTransaction(TransactionInterface $transaction): void
    {
        $this->transactions[] = $transaction;
    }

    /**
     * @return bool
     */
    public function isCredit(): bool
    {
        return $this->overdraft > 0;
    }

    /**
     * @return int
     */
    public function balance(): int
    {
        $balance = (true === $this->isCredit()) ? $this->overdraft : 0;

        foreach ($this->transactions() as $transaction) {
            $balance += $transaction->amount();
        }

        return $balance;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}