<?php

use PHPUnit\Framework\TestCase;
use MyWeeklyAllowance\Account;
use InvalidArgumentException;
use RuntimeException;

final class AccountTest extends TestCase
{
    public function testNewAccountStartsWithZeroBalance(): void
    {
        $acc = new Account("id-1", "Alice");
        $this->assertSame(0.0, $acc->getBalance());
    }

    public function testDepositIncreasesBalance(): void
    {
        $acc = new Account("id-1", "Alice");
        $acc->deposit(50);

        $this->assertSame(50.0, $acc->getBalance());
    }

    public function testSpendDecreasesBalance(): void
    {
        $acc = new Account("id-1", "Alice");
        $acc->deposit(100);
        $acc->spend(30);

        $this->assertSame(70.0, $acc->getBalance());
    }

    public function testSpendMoreThanBalanceThrows(): void
    {
        $this->expectException(RuntimeException::class);

        $acc = new Account("id-1", "Alice");
        $acc->deposit(50);
        $acc->spend(60); // dépasse le solde
    }

    public function testDepositNegativeAmountThrows(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $acc = new Account("id-1", "Alice");
        $acc->deposit(-10);
    }

    public function testSpendNegativeAmountThrows(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $acc = new Account("id-1", "Alice");
        $acc->spend(-5);
    }
}






