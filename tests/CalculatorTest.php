<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include("Calculator.php");

final class CalculatorTest extends TestCase
{
    public function testValueShouldBeValidForSum(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(
            1000,
            $calculator->sum(500,500)
        );
    }

    public function testValueShouldBeValidForSub(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(
            0,
            $calculator->sub(500,500)
        );
    }
}
