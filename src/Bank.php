<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Bank
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Bank
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var array
     */
    private array $customers;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->customers = [];
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function customers(): array
    {
        return $this->customers;
    }

    /**
     * @param CustomerInterface|EntityInterface $customer
     * @return void
     */
    public function addCustomer(CustomerInterface|EntityInterface $customer): void
    {
        $this->customers[$customer->getId()] = $customer;
    }

    /**
     * @param int $id
     * @return CustomerInterface|null
     */
    public function customer(int $id): ?CustomerInterface
    {
        return $this->customers[$id];
    }
}

