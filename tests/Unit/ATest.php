<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\A;
use App\Tests\TestCase;

class ATest extends TestCase
{
    public function testGetName()
    {
        $a = new A();

        $this->assertEquals('App\A', $a->getName());
    }
}