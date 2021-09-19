<?php
declare(strict_types=1);

namespace App;

class A
{
    public function getName(): string
    {
        return __CLASS__;
    }

    public function getHello(): string
    {
        return 'hello';
    }
}
