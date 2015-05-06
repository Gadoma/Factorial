<?php

namespace Factorial;

class Factorial implements FactorialInterface
{
    /**
     * Calculate factorial of the given number.
     *
     * @param int $number Factorial calculation parameter
     *
     * @return mixed Result of calculations or recursive callback
     */
    public function calculate($number)
    {
        $this->guardInteger($number);
        $this->guardNonNegative($number);

        return $number < 2 ? '1' : bcmul($number, $this->calculate(--$number));
    }

    /**
     * Check if the parameter is integer.
     *
     * @param int $number Factorial calculation parameter
     *
     * @throws \InvalidArgumentException
     */
    private function guardInteger($number)
    {
        if (!is_int($number)) {
            throw new \InvalidArgumentException('Given number must be an integer.');
        }
    }

    /**
     * Check if the parameter is non-negative.
     *
     * @param int $number Factorial calculation parameter
     *
     * @throws \InvalidArgumentException
     */
    private function guardNonNegative($number)
    {
        if ($number < 0) {
            throw new \InvalidArgumentException('Given number cannot be negative.');
        }
    }
}
