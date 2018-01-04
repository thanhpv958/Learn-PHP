<?php
    require_once './funcProcess.php';
    $config= parse_ini_file('./config.ini');
    $fileUpload = $_FILES['fileupload'];

    foreach($fileUpload['name'] as $key => $value)
    {
        if($value != null)
        {
            $flagSize = checkSize($fileUpload['size'][$key], $config['minSize'], $config['maxSize']);
            $flagExt  = checkExtension($value, explode('|', $config['extension']));

            if($flagSize == true && $flagExt == true)
            {
                move_uploaded_file($fileUpload['tmp_name'][$key], './files/'.$value);
            }
        }
    }