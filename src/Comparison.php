<?php declare(strict_types=1);

namespace MutationTesting;

class Comparison
{
    public function isGreaterThan(int $x, int $y): bool
    {
        return $x > $y;
    }

    public function isSmallerThan(int $x, int $y): bool
    {
        return $x < $y;
    }

    public function isEqual(int $x, int $y): bool
    {
        return $x === $y;
    }
}
