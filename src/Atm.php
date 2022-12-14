<?php declare(strict_types=1);

namespace ValentinValkanov\Bank;

/**
 * Class Atm
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Atm
{
    private CardRepository $cards;

    // the card id
    private string $cardId;

    // the pin code
    private int $pin;

    public function __construct(string $cardId, int $pin)
    {
        $this->cards  = new CardRepository();
        $this->cardId = $cardId;
        $this->pin  = $pin;
    }

    public function withdraw(int $amount)
    {
        $card = $this->cards->findBy([
            'id'  => $this->cardId,
            'pin' => $this->pin
        ]);
        if(!$card instanceof Card) {
            exit('ATM: card problem!');
        }

        try {
            $account = $card->account();

            $account->withdraw($amount);
            return $account->balance();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }


}
