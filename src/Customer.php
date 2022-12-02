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

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function phone(): string
    {
        return $this->phone;
    }

    /**
     * @param AccountInterface $account
     * @return void
     */
    public function addAccount(AccountInterface $account): void
    {
        $this->accounts[$account->getId()] = $account;
    }

    /**
     * @param $id
     * @return AccountInterface
     */
    public function getAccount($id): AccountInterface
    {
        return $this->accounts[$id];
    }

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}