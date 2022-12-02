<?php declare(strict_types=1);

namespace ValentinValkanov\BankTest;

use PHPUnit\Framework\TestCase;
use ValentinValkanov\Bank\AccountInterface;
use ValentinValkanov\Bank\Customer;
use ValentinValkanov\Bank\CustomerInterface;
use ValentinValkanov\Bank\Deposit;
use ValentinValkanov\Bank\TransactionInterface;

/**
 * Class DepositTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class DepositTest extends TestCase
{
    protected AccountInterface $account;

    protected function setUp(): void
    {
       $this->account = $this->createMock(AccountInterface::class);
    }

    public function testItCanBeConstructed(): void
    {
        $this->assertInstanceOf(TransactionInterface::class, new Deposit($this->account, 100));
    }
}