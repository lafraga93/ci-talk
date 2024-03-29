<?php

declare(strict_types=1);

namespace App\Rule;

final class SoftwareEngineerRule implements PositionRuleInterface
{
    /**
     * @var float
     */
    const BONUS_VALUE = 800.25;

    public function calculate(float $baseSalary): float
    {
        return $baseSalary += self::BONUS_VALUE;
    }
}
