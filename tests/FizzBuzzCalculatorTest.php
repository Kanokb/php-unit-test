<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include("FizzBuzzCalculator.php");

final class FizzBuzzCalculatorTest extends TestCase
{
    public function testValueShouldBeDivided3(): void
    {
        $number = new FizzBuzzCalculator();

        $this->assertEquals(
            "Fizz",
            $number->calculate(3)
        );
    }
    public function testValueShouldBeDivided5(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "Buzz",
            $number->calculate(5)
        );
    }
    public function testValueShouldBeDivided7(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "Wuzz",
            $number->calculate(7)
        );
    }
    public function testValueShouldBeDivided15(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "FizzBuzz",
            $number->calculate(15)
        );
    }

    public function testValueShouldBeDivided30(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "FizzBuzz",
            $number->calculate(30)
        );
    }
    public function testValueShouldBeDivided40(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "Buzz",
            $number->calculate(40)
        );
    }
    public function testValueShouldBeDivided42(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "FizzWuzz",
            $number->calculate(42)
        );
    }
    public function testValueShouldBeDivided21(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "FizzWuzz",
            $number->calculate(21)
        );
    }
    public function testValueShouldBeDivided35(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "FizzBuzzWuzz",
            $number->calculate(35)
        );
    }
    public function testValueShouldBeDivided70(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "FizzBuzzWuzz",
            $number->calculate(70)
        );
    }
    public function testValueShouldBeDivided101(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertEquals(
            "101",
            $number->calculate(101)
        );
    }
    public function testValueShouldBeDividedInt(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertIsInt(
            111,
            $number->calculate("120")
        );
    }
    public function testValueShouldBeDividedSame(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertSame(
            "1111",
            $number->calculate("1111")
        );
    }
    public function testValueShouldBeMatchsFormat(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertStringMatchesFormat(
            "FizzBuzz",
            $number->calculate("120")
        );
    }
    
    public function testValueShouldBeMatchsNull(): void
    {
        $number = new FizzBuzzCalculator();
        $this->assertNull(
            null,
            $number->calculate(null)
        );
    }
    

}
