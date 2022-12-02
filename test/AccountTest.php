<?php declare(strict_types=1);

namespace ValentinValkanov\BankTest;

use PHPUnit\Framework\TestCase;
use ValentinValkanov\Bank\Account;
use ValentinValkanov\Bank\AccountInterface;

/**
 * Class AccountTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class AccountTest extends TestCase
{
    public function testItCanBeInitialized(): void
    {
        $this->assertInstanceOf(AccountInterface::class, new Account( '5'));
    }
}

