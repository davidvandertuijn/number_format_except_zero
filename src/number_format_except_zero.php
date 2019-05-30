<?php

/**
 * Number Format Except Zero.
 *
 * @param float $fNumber
 * @param int $iDecimals
 * @param string $sDecPoint
 * @param string $sThousandsSep
 *
 * @return string
 */
function number_format_except_zero(float $fNumber, int $iDecimals, string $sDecPoint = '.', string $sThousandsSep = ',') : string
{
    if ($fNumber == 0) {
        return '0';
    }

    return number_format($fNumber, $iDecimals, $sDecPoint, $sThousandsSep);
}
