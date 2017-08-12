<?php

namespace MutationTestingTests;

use MutationTesting\Comparison;
use PHPUnit\Framework\TestCase;

class ComparisonTest extends TestCase
{
    /**
     * @var Comparison
     */
    private $comparison;

    public function setUp()
    {
        $this->comparison = new Comparison();
    }

    public function test_isEqual()
    {
        self::assertTrue($this->comparison->isEqual(1, 1));
    }

    public function test_isGreaterThan()
    {
        self::assertTrue($this->comparison->isGreaterThan(5, 3));
    }

    public function test_isSmallerThan()
    {
        self::assertTrue($this->comparison->isSmallerThan(3, 5));
    }
}
