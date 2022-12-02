<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Email
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Email
{
    private string $value;

    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    private function setValue(string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('The value must be a valid email!');
        }

        $this->value = $value;
    }


    public function __toString(): string
    {
        return $this->value;
    }
}