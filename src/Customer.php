<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Customer
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Customer implements EntityInterface, CustomerInterface
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $phone;

    /**
     * @var array
     */
    private array $accounts;

    /**
     * @param string $id
     * @param string $name
     * @param string $email
     * @param string $phone
     */
    public function __construct(string $id, string $name, string $email, string $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->accounts = [];
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function addAccount(AccountInterface $account): void
    {
        $this->accounts[$account->getId()] = $account;
    }

    public function getAccount($id): AccountInterface
    {
        return $this->accounts[$id];
    }

    public function getAccounts(): array
    {
        return $this->accounts;
    }

    public function getId(): string
    {
        return $this->id;
    }
}