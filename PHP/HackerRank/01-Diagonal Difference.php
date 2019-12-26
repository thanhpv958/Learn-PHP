<?php

/**
 * Tính (Đường chéo chính - đường chéo phụ) của 1 ma trận bất kì (kết quả trả về số nguyên ko âm)
 */

function diagonalDifference($arr) {
    $length = count($arr);
    $lastIndex = $length;
    $primaryDiagonal = 0;
    $secondDiagonal = 0;

    for($i = 0; $i < $length; $i++){
        $primaryDiagonal += $arr[$i][$i];
        $secondDiagonal += $arr[$i][--$lastIndex];
    }

    return abs($primaryDiagonal - $secondDiagonal);
}

$arrOriginal = [
    [ 11, 2, 4 ],
    [ 4, 5, 6 ],
    [ 10, 8, -12 ],
];

$result = diagonalDifference($arrOriginal);
echo $result;
