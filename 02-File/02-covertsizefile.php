<?php
    function covertSize($size, $totalDigit = 2, $ditance=' ') {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        for($i=0; $i<count($units); $i++) {
            if($size > 1024 ) {
                $size = $size / 1024; // 
            }
            
            else {
                $unit = $units[$i];
                break;
            }
        }
        $result = round($size, $totalDigit) . $ditance . $unit;
        return $result;
    }

    $filename = '../01-base/';
    $filesize = filesize($filename);
    echo covertSize($filesize, 3, '---');
    