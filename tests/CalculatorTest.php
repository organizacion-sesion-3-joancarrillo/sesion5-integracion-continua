<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 

    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision(): void
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testAdd(): void
    {
        $result = $this->calculator->add(100, 200);
        $this->assertEquals(300, $result);
    }
 
}
