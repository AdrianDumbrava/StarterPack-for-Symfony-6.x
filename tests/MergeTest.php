<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class MergeTest extends TestCase
{
    public function testMerge() {
        $this->assertArrayHasKey(2, [1 => 1], 'contine');
    }
}