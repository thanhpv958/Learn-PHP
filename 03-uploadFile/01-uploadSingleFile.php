<?php
    require_once './funcProcess.php';

    $fileUpload = $_FILES['fileupload'];
    $configFile = parse_ini_file('config.ini');
    // echo '<pre>';
    // print_r($configFile);
    // echo '</pre>';

    $flagSize = checkSize($fileUpload['size'], $configFile['minSize'], $config['maxSize']);
    $flagExtension = checkExtension($fileUpload['name'], explode('|', $configFile['extension']));


    if($flagSize && $flagExtension ) {
        move_uploaded_file($fileUpload['tmp_name'], './files/'.$fileUpload['name']);
        echo 'Upload success';
    }
    else
    {
        echo 'Fail';
    }
