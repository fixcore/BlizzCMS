<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Projects\Ankur\Calculator;

/**
 * Class CalculatorTest.
 */
class CalculatorTest extends TestCase
{
    /**
     * Calculator class instance
     *
     * @var Projects\Ankur\Calculator
     */
    private $calc;

    public function __construct()
    {
        $this->calc = new Calculator();
        parent::__construct();
    }

    public function testInstanceCalculator()
    {
        $this->calc = new Calculator();
        $this->assertInstanceOf(Calculator::class, $this->calc);
    }

    public function testAdd()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $value = $this->calc->addTwo(2, 3);
        $this->assertEquals($value, 5);
    }

    public function testMultiply()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $value = $this->calc->multiplyTwo(2, 3);
        $this->assertEquals($value, 6);
    }

    public function testSubtract()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $value = $this->calc->subtractTwo(4, 2);
        $this->assertEquals($value, 2);
    }

    public function testNormalDivide()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $value = $this->calc->divideTwo(4, 2);
        $this->assertEquals($value, 2);
    }

    public function testDivisorHasZero()
    {
        fwrite(STDOUT, __METHOD__ . "\n");

        $this->expectException(\InvalidArgumentException::class);
        $value = $this->calc->divideTwo(4, 0);  
    }
}
