<?php

namespace App\Service;

class FooService
{
    /**
     * @var int
     */
    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function test(): void
    {
        new \DateTime();
    }
}