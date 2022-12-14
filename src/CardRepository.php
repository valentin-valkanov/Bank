<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class CardRepository
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class CardRepository
{
    private array $items = [];

    public function __construct()
    {
        $this->items[] = new Card('1001', new Account('111', 1000), 0000);
        $this->items[] = new Card('1002', new Account('112', 1000), 0001);
    }

    public function get($id): Card {
        return $this->items[$id];
    }

    public function findBy(array $options) {
        foreach ($this->items as $key => $card) {
            return ($card->id() === $options['id'] && $card->pin() === $options['pin']) ? $card : null;
        }
        return null;
    }

    public function find($id): ?Card
    {
        $card = $this->items[$id];
        if (!$card instanceof Card) {
            return null;
        }
        return $card;
    }
}