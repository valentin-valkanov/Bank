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
    protected int $id;

    protected int $amount;

    protected \DateTimeImmutable $created;

    public function __construct($id, $amount)
    {
        $this->id = $id;
        $this->setAmount($amount);
        $this->created = new \DateTimeImmutable();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function created(): \DateTimeImmutable
    {
        return $this->created;
    }

    abstract protected function setAmount(int $amount): self;
}