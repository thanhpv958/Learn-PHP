<?php

/**
 * Tính (Đường chéo chính - đường chéo phụ) của 1 ma trận bất kì (kết quả trả về số nguyên ko âm)
 */

function timeConversion($s)
{
    $sArr = explode(':', trim($s));

    $hh = $sArr[0];
    $mm = $sArr[1];
    $ss = substr($sArr[2], 0, 2);
    $AmPm = trim(substr($sArr[2], 2));

    if (strtoupper($AmPm) == 'PM' && $hh < 12) {
        $hh += 12;
    } elseif (strtoupper($AmPm) == 'AM' && $hh == 12) {
        $hh = '00';
    }

    $s = ($hh) . ':' . $mm . ':' . $ss;

    return $s;
}

// built-in function php
function timeConversion2($s) {
    $strToTime = strtotime($s);

    return date('H:i:s', $strToTime);
}

$strOriginal = "12:40:22AM";

$result = timeConversion2($strOriginal);
echo $result;
