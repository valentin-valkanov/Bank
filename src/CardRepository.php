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
        $this->items[0] = new Card('1001', new Account('111', 1000), 0000);
        $this->items[1] = new Card('1002', new Account('112', 0), 1234);
    }

    public function get($id): Card {
        return $this->items[$id];
    }

    public function findBy(array $options): ?Card {

        /* $callback = static function (Card $card) use ($options) {
            return ($card->id() === $options['id'] && $card->pin() === $options['pin']);
        }; */

        $array = array_filter($this->items,  static function (Card $card) use ($options) {
            return ($card->id() === $options['id'] && $card->pin() === $options['pin']);
        });

        $key = key($array);
        return (!empty($array)) ? $array[$key] : null;
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