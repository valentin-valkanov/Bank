<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Card
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Card
{
    private string $id;

    private int $pin;

    private AccountInterface $account;

    public function __construct(string $id, $account, int $pin)
    {
        $this->id = $id;
        $this->account = $account;
        $this->pin = $pin;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function pin(): int {
        return $this->pin;
    }

    public function account(): AccountInterface {
        return $this->account;
    }

}
