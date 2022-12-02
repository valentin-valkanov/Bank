<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Transaction
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
abstract class Transaction implements TransactionInterface, EntityInterface
{
    protected string $id;

    protected int $amount;

    protected AccountInterface $account;

    protected \DateTimeImmutable $created;

    public function __construct(AccountInterface $account, $amount)
    {
        $this->id = Uuid::v4();
        $this->setAccount($account);
        $this->setAmount($amount);

        $this->created = new \DateTimeImmutable();
    }


    public function getId(): string
    {
        return $this->id;
    }

    public function amount(): int
    {
        return $this->amount;
    }


    public function created(): \DateTimeImmutable
    {
        return $this->created;
    }

    protected function setAccount(AccountInterface $account): self
    {
        $this->account = $account;

        return $this;
    }

    abstract protected function setAmount(int $amount): self;
}