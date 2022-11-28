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
    private string $name;

    private array $customers;

    /**
     * @param string $name
     * @param array $customers
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

    public function addCustomer(CustomerInterface|EntityInterface $customer): void
    {
        $this->customers[$customer->getId()] = $customer;
    }


    public function customer(int $id): ?CustomerInterface
    {
        return $this->customers[$id];
    }




}

