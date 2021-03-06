<?php declare(strict_types=1);

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
        self::assertFalse($this->comparison->isGreaterThan(4, 4));
        self::assertTrue($this->comparison->isGreaterThan(PHP_INT_MAX, PHP_INT_MIN));
    }

    public function test_isSmallerThan()
    {
        self::assertTrue($this->comparison->isSmallerThan(3, 5));
        self::assertFalse($this->comparison->isSmallerThan(4, 4));
        self::assertTrue($this->comparison->isSmallerThan(PHP_INT_MIN, PHP_INT_MAX));
    }
}
