<?php

if (!function_exists('number')) {
    /**
     * @param        $number
     * @param int    $decimals
     *
     * @return float
     */
    function number($number, $decimals = 2) {
        return (double)number_format($number, $decimals, '.', '');
    }
}
