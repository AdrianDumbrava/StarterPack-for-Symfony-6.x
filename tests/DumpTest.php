<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class DumpTest extends TestCase
{
    public function testSeeIfItWorks(): void
    {
        $test = 1;
        $lala = $test + 2;
        $this->assertArrayHasKey(1, [1 => 1], 'yes');
    }

    public function testShouldNotWork(): void
    {
        $this->assertArrayHasKey(2, [1 => 1], 'yes');
    }
}