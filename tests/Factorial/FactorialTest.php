<?php

class FactorialTest extends PHPUnit_Framework_TestCase
{
    protected $factorial = null;

    /**
     * Prepare for tests.
     */
    protected function setUp()
    {
        $this->factorial = new \Factorial\Factorial();
    }

    /**
     * Provide test data sets.
     *
     * @return array Test data sets
     */
    public function testData()
    {
        $data = [];

        $data[] = [0, '1'];
        $data[] = [1, '1'];
        $data[] = [2, '2'];
        $data[] = [3, '6'];
        $data[] = [25, '15511210043330985984000000'];

        return $data;
    }

    /**
     * @test
     */
    public function testGuardInteger()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->factorial->calculate(0.1);
    }

    /**
     * @test
     */
    public function testNonNegative()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->factorial->calculate(-1);
    }

    /**
     * @test
     * @dataProvider testData
     */
    public function testCalculate($data, $expected)
    {
        $this->assertEquals($expected, $this->factorial->calculate($data));
    }

    /**
     * Tidy up after tests.
     */
    protected function tearDown()
    {
        unset($this->factorial);
    }
}
