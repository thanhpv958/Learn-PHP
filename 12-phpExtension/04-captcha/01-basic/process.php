<?php
session_start();
if($_SESSION['captcha'] == $_POST['captchaText'])
{
    echo 'ok';
}
else
{
    echo 'fail';
}