<?php

/**
 * Number Format Except Zero.
 *
 * @param float $num
 * @param int $decimals
 * @param string|null $decimal_separator
 * @param string|null $thousands_separator
 *
 * @return string
 */
function number_format_except_zero(float $num, int $decimals, ?string $decimal_separator = '.', ?string $thousands_separator = ','): string
{
    if ($num == 0) {
        return '0';
    }

    return number_format($num, $decimals, $decimal_separator, $thousands_separator);
}
