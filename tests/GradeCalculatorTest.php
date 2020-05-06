<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include("GradeCalculator.php");

final class GradeCalculatorTest extends TestCase
{
    public function testValuShouldBeLowGradeA(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "A",
            $score->getGrade(80)
        ) ;
    }
    public function testValuShouldBeUpGradeA(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "A",
            $score->getGrade(89)
        ) ;
    }
    public function testValuShouldBeLowGradeBplus(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "B+",
            $score->getGrade(75)
        ) ;
    }
    public function testValuShouldBeUpGradeBplus(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "B+",
            $score->getGrade(79)
        ) ;
    }
    public function testValuShouldBeLowGradeB(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "B",
            $score->getGrade(70)
        ) ;
    }
    public function testValuShouldBeUpGradeB(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "B",
            $score->getGrade(74)
        ) ;
    }
    public function testValuShouldBeLowGradeCplus(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "C+",
            $score->getGrade(65)
        ) ;
    }
    public function testValuShouldBeUpGradeCplus(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "C+",
            $score->getGrade(69)
        ) ;
    }
    public function testValuShouldBeLowGradeC(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "C",
            $score->getGrade(60)
        ) ;
    }
    public function testValuShouldBeUpGradeC(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "C",
            $score->getGrade(64)
        ) ;
    }
    public function testValuShouldBeLowGradeDPlus(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "D+",
            $score->getGrade(55)
        ) ;
    }
    public function testValuShouldBeUpGradeDPlus(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "D+",
            $score->getGrade(59)
        ) ;
    }
    public function testValuShouldBeLowGradeD(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "D",
            $score->getGrade(50)
        ) ;
    }
    public function testValuShouldBeUpGradeD(): void 
    {
        $score = new GradeCalculator();
        $this->assertEquals(
            "D",
            $score->getGrade(54)
        ) ;
    }
    public function testValuShouldBeGradeF(): void 
    {
        // $expected = "A"; 
        // $actual = "A"; 
        $score = new GradeCalculator();
        $this->assertEquals(
            "F",
            $score->getGrade(0)
        ) ;
    }

    public function testValuShouldBeErrorGradeMax(): void 
    {
        // $expected = "A"; 
        // $actual = "A"; 
        $score = new GradeCalculator();
        $this->assertEquals(
            "Invalid score",
            $score->getGrade(101)
        ) ;
    }
    public function testValuShouldBeErrorGradeMin(): void 
    {
        // $expected = "A"; 
        // $actual = "A"; 
        $score = new GradeCalculator();
        $this->assertEquals(
            "Invalid score",
            $score->getGrade(-1)
        ) ;
    }
    public function testValuShouldBeGradeFInvalid(): void 
    {
        // $expected = "A"; 
        // $actual = "A"; 
        $score = new GradeCalculator();
        $this->assertEquals(
            "F",
            $score->getGrade("Test")
        ) ;
    }
    public function testValueotEquals(): void 
    {
        // $expected = "A"; 
        // $actual = "A"; 
        $score = new GradeCalculator();
        $this->assertNotEquals(
            "Invalid score",
            $score->getGrade("Test")
        ) ;
    }
    public function testValueEmpty(): void 
    {
        // $expected = "A"; 
        // $actual = "A"; 
        $score = new GradeCalculator();
        $this->assertEmpty(
            null,
            $score->getGrade(null)
        ) ;
    }
    

    
}