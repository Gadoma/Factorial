<?php

namespace Factorial;

interface FactorialInterface
{
    /**
     * Calculate factorial of the given number.
     *
     * @param int $number Factorial calculation parameter
     *
     * @return mixed Result of calculations or recursive callback
     */
    public function calculate($number);
}
