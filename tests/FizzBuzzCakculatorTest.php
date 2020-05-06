<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include("FizzBuzzCalculator.php");

final class FizzBuzzCalculatorTest extends TestCase
{
    public function testValueShouldBe(): void
    {
        $i = new FizzBuzzCalculator();

        $this->assertEquals(
            "Fizz",
            $i->calculate(3)
        );
    }

}
