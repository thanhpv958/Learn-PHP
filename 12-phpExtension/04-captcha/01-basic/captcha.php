<?php

session_start();
header('Content-type: image/png');
$captcha = imagecreate(100, 50); // tạo hình ảnh
imagecolorallocate($captcha, 42, 192, 42); // phân bố màu cho ảnh
$content = substr(md5(time()*20-10242), 0, 5);
$text = imagettftext($captcha, 18, 2, 10, 30, imagecolorallocate($captcha, 15, 24, 15), 'adobeming.otf', $content);
$_SESSION['captcha'] = $content; // lưu mã captcha vào session để so sánh
imagepng($captcha);
imagedestroy($captcha);


?>