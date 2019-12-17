<?php

    //check file size
    function checkSize($size, $minSize, $maxSize) {
        $flags=false;
        if($size > $minSize && $size < $maxSize ) {
            $flags = true;
        }
        return $flags;
    }

    //check file extension
    function checkExtension($fileName, $arrExtension) {
        $flags = false;
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array( strtolower($ext), $arrExtension ))
            $flags=true;
        return $flags;
    }