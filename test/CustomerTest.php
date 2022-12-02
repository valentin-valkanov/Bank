<?php declare(strict_types=1);

namespace ValentinValkanov\BankTest;

use PHPUnit\Framework\TestCase;
use ValentinValkanov\Bank\Account;
use ValentinValkanov\Bank\Customer;
use ValentinValkanov\Bank\CustomerInterface;

/**
 * Class CustomerTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class CustomerTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $this->assertInstanceOf(CustomerInterface::class, new Customer( '5', 'Pesho', 'pesho@gmail.com', '0888395055'));
    }

    public function testItCanGetCustomerName(): void
    {
        $object = new Customer( '5', 'Pesho', 'pesho@gmail.com', '0888395055');
        $this->assertEquals('Pesho', $object->name());
    }

    public function testItCanGetCustomerEmail(): void
    {
        $object = new Customer( '5', 'Pesho', 'pesho@gmail.com', '0888395055');
        $this->assertEquals('pesho@gmail.com', $object->email());
    }

    public function testItCanGetCustomerPhone(): void
    {
        $object = new Customer( '5', 'Pesho', 'pesho@gmail.com', '0888395055');
        $this->assertEquals('0888395055', $object->phone());
    }

    public function testItCanGetCustomerAccounts(): void
    {
        $object = new Customer( '5', 'Pesho', 'pesho@gmail.com', '0888395055');
        $this->assertIsArray($object->getAccounts());
    }

}