<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\A;
use App\Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ATest extends TestCase
{
    public function testGetName(): void
    {
        $a = new A();

        $this->assertEquals('App\A', $a->getName());
    }

    public function testGetName2(): void
    {
        $a = new A();

        $this->assertNotEquals('A', $a->getName());
    }

    public function testGetHello(): void
    {
        $a = new A();

        $this->assertEquals('hello', $a->getHello());
    }
}
