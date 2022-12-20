<?php declare(strict_types=1);

namespace ValentinValkanov\BankTest;

use PHPUnit\Framework\TestCase;
use ValentinValkanov\Bank\Atm;

/**
 * Class AtmTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class AtmTest extends TestCase
{
    /**
     * @test
     */
    public function itCanWithdrawIfAccountHasMoney(): void
    {
        $atm = new Atm('1001', 0000);
        $balance = $atm->withdraw(-100);

        $this->assertEquals(900, $balance);
    }

    /**
     * @test
     */
    public function itCannotWithdrawIfAccountHasNoMoney(): void
    {
        $atm = new Atm('1002', 1234);
        $message = $atm->withdraw(-100);

        $this->assertEquals('Insufficient funds!', $message);
    }
}
