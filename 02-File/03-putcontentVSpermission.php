<?php
    $filename = './abc.txt';
    $data = 'ABCasafasdf';

    //Ghi nd $data vào $file, nếu FILE_APPEND thì ghi tiếp vào cuối
    echo file_put_contents($filename, $data, FILE_APPEND);

    /*
        mkdir($path, $mode)  tạo ra folder $path
        rmdir($path)         xóa folder
        Permisson:
            x - y - z: Owner/user - Group - Other
            Read: 4, Write 2, Execute 1
        fileperms: xem permisson
        chmod($dirName, $mod): phân quyền mod cho $dirName

        parse_ini_file: đọc file .ini

        
        glob: hiện thị tất cả các folder file
    */