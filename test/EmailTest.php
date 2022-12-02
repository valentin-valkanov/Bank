<?php declare(strict_types=1);

namespace ValentinValkanov\BankTest;

use PHPUnit\Framework\TestCase;
use ValentinValkanov\Bank\Email;

/**
 * Class EmailTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class EmailTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $this->assertInstanceOf(Email::class, new Email('vasildakov@gmail.com'));
    }
}