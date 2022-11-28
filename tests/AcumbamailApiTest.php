<?php

namespace EncreInformatique\AcumbamailApi;

use PHPUnit\Framework\TestCase;
use EncreInformatique\AcumbamailApi\Acumbamail;

class AcumbamailTest extends TestCase
{
    /**
     * @test
     * @group Client
     */
    public function constructor(): void
    {
        $token = 'lorem';

        new Acumbamail($token);
    }
}
