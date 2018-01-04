<?php
    require_once './upload.class.php';

    $upload = new UploadFile();
    $upload->setExt(['jpg', 'png', 'jpeg']); // set định dạng tập tin
    $upload->setSize(10240, 5242880);
    $upload->setUploadDir('./files/');
    $upload->uploadFile();